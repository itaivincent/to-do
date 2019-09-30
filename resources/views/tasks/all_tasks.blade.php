@extends('layouts.admin')

@section('content')
<div class="app-content">
<h3 class="tile-title">All Tasks</h3>
<div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                  <tr>
                    <th>Name</th>                   
                    <th>Date Created</th>
                    <th>Deadline</th>
                    <th>Date Completed</th>
                    <th>Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($tasks as $task)
                  <tr>
                    <td>{{$task->title}}</td>                  
                    <td>{{$task->created_at}}</td>
                    <td>{{$task->deadline}}</td>
                    <td>
                      @if($task->created_at == $task->updated_at)
                      Task not Completed
                      @else
                      {{$task->updated_at}}
                      @endif
                    </td>
                    <td class="text-center">
                    @if($task->status == 0)
                   <span class='badge badge-secondary'>Pending</span> 
                    @else                     
                   <span class='badge badge-success'>&nbsp;Completed&nbsp;</span>                   
                    @endif
                  </td>                                
                  </tr>  
                  @endforeach           
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    <div>
@endsection
