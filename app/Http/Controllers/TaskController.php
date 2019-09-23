<?php


namespace App\Http\Controllers;

use Auth;
use Alert;
use App\Models\Task;
use App\Models\Completed_task;
use App\User;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Auth::user()
        ->tasks()
        ->orderBy('status')
        ->orderByDesc('created_at')
        ->paginate(10);

        $task = Task::where('id',Auth::user()->id);
        $users = User::where('id', Auth::user()->id)->get();     

    // return task index view with paginated tasks
    return view('tasks.index', compact('tasks','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $create_task = Task::create([
              'title' => $request->input('title'),
              'description' => $request->input('description'),
              'deadline' => $request->input('deadline'),
              'user_id' => Auth::user()->id,
              'status' => '0'
          ]);

          if($create_task){
           
            return redirect()->route('tasks.index')->with('success', 'success');
           
        }

        return back()->withInput()->with('warning', 'Ooh snap!, you failed to create a task');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        if(Auth::check()){
            $task = Task::where('id', $task->id)->first();
            $user = User::where('id', $task->user_id)->first();
        }
    
        return view('tasks.edit', compact('task','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        if(Auth::check()){

                 $task_update = Task::where('id',$task->id)->update([
                'status' => '1',
                ]);          
              
                $completed_tasks = Completed_task::create([
                    'title' => $task->title,
                    'status' => '1',
                    'user_id' => $task->user_id,
                    'description' => $task->description,                 
                ]);

        if($task_update){

            return redirect()->route('tasks.index')->with('success', 'Task succesfully completed');

           }
            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
