@extends('layouts.admin')

@section('content')
<div class="app-content">
       <div class="clearix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Complete your to-do</h3>
            <hr>
            <div class="tile-body">
              <form  class="row" method ="POST" action="{{route('tasks.update',[$task->id]) }}">                  	      
                  @csrf
                <input type="hidden" name="_method" value="put">
                <div class="form-group col-md-3">
                  <label class="control-label">Name</label>
                  <input class="form-control" name="name" type="text" value="{{$task->title}}" readonly>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Description</label>
                  <input class="form-control" name="description" type="text" value="{{$task->description}}" readonly>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Date you made this to-do</label>
                  <input class="form-control" name="created_at" type="text" value="{{$task->deadline}}" readonly>
                </div> 
                <div class="form-group col-md-3">
                  <label class="control-label">Time left</label>                
                  <p id="demo"></p>
                </div>                                             
                <div class="form-group col-md-4 align-self-end">
                <hr>
                  <button class="btn btn-success" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Complete to-do</button>
                 <a hef="/tasks"> <button class="btn btn-secondary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Back</button></a>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>
@endsection
<script>
// Set the date we're counting down to
var countDownDate = new Date("{{$task->created_at->format('M d Y')}}").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
