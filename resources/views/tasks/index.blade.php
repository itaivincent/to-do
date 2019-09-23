@extends('layouts.admin')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
@section('content')
<main class="app-content">
    <div class="row user">
    <div class="col-md-12">
          <div class="profile">
            <div class="info"><img class="user-img" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg">
            @foreach($users as $user)    
              <h4>{{$user->name}}</h4>
              <p>{{$user->email}}</p>
              @endforeach
            </div>
            <div class="cover-image"><img src=" {{ asset('img/nature.jpeg') }}" alt="logo" ></div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="tile p-0">
            <ul class="nav flex-column nav-tabs user-tabs">
              <li class="nav-item"><a class="nav-link active"  href="#myModal"  data-toggle="modal">Create a to-do</a></li>
              <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">All to-dos</a></li>                              
            </ul>           
          </div>
        </div>
		<div class="col-lg-9">
       
			<div class="accordion" id="accordionExample">
            @foreach($tasks as $task)
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
						<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#{{$task->id}}" aria-expanded="false" aria-controls="collapseTwo">{{ $task->title }}</a><a href=""><button type="button" class="btn btn-outline-info btn-rounded waves-effect" style="width:80px;">Details</button></a>									
						</h2>						
					</div>
					<div id="{{$task->id}}" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">{{ $task->description }}</div>
					</div>
                </div>	
                @endforeach		
            </div>     
		</div>
    </div>
  


<!-- Modal HTML -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">				
				<h4 class="modal-title">Create a to-do</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{route('tasks.store')}}" method="post">
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
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							<input type="date"  id="input" class="form-control" name="deadline" required="required">
						</div>
                    </div>	
                   		
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Make to-do</button>
					</div>
					
				</form>
			</div>
			<div class="modal-footer">This platform is proudly brought to you by <a href="#">.TAM</a></div>
		</div> 
	</div>
</div> 
</main>
@endsection
<script>
 $('#input').datetimepicker({ footer: true, modal: true });
 </script>

