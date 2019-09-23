@extends('layouts.admin')

@section('content')
<div class="app-content">
       <div class="clearix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Complete your to-do</h3>
            <hr>
            <div class="tile-body">
              <form class="row" method ="POST" action="{{route('tasks.update',[$task->id]) }}">                  	      
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
                  <label class="control-label">Time left</label>
                  <input class="form-control" name="deadline" type="text" value="{{$task->deadline}}" readonly>
                </div>
                <div class="form-group col-md-3">
                  <label class="control-label">Date you made this to-do</label>
                  <input class="form-control" name="created_at" type="text" value="{{$task->created_at}}" readonly>
                </div>
                
                <div class="form-group col-md-4 align-self-end">
                <hr>
                  <button class="btn btn-success" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Complete to-do</button>
                  <button class="btn btn-secondary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Back</button>
                </div>
              </form>
            </div>
          </div>
        </div>
</div>
@endsection