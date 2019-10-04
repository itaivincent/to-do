@extends('layouts.admin')

@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-calendar"></i>Calendar</h1>
          <p>Calender  for events</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/">Home</a></li>
        </ul>
      </div>
      <div class="tile">
            <div class="tile-title-w-btn">
              <h3 class="title">Create an Event</h3>
              <p><a class="btn btn-success icon-btn" data-toggle="modal" data-target="#myModal2" href="#"><i class="fa fa-plus"></i>Add Item	</a></p>
            </div>
            <div class="tile-body">
             <hr>
              Hey there, I am a very simple card. I am good at containing small bits of information. I am quite convenient because I require little markup to use effectively.             
            </div>
          </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile row">
            <div class="col-md-3">
              <div id="external-events">
                <h4 class="mb-4">Draggable Events</h4>
                <div class="fc-event">My Event 1</div>
                <div class="fc-event">My Event 2</div>
                <div class="fc-event">My Event 3</div>
                <div class="fc-event">My Event 4</div>
                <div class="fc-event">My Event 5</div>
                <p class="animated-checkbox mt-20">
                  <label>
                    <input id="drop-remove" type="checkbox"><span class="label-text">Remove after drop</span>
                  </label>
                </p>
              </div>
            </div>
            <div class="col-md-9">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div>





<!-- Modal HTML -->
<div id="myModal2" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Create an Event</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{}}" method="post">
					@csrf
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text" class="form-control" name="title" placeholder="Name" required="required">
						</div>
           </div>
            <div class="form-group">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input type="text-area" class="form-control" name="description" placeholder="Give a brief description" required="required">
						</div>
           </div>                 		
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Create Event</button>
					</div>
					
				</form>
			</div>
			<div class="modal-footer">This platform is proudly brought to you by <a href="#">.TAM</a></div>
		</div> 
	</div>
</div> 
</main>
 @endsection
