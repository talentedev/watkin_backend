<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class UpcomingTaskController extends Controller
{
    /**
     * @var Task
     */
    private $tasks;

    /**
     * Set the guard for the controller.
     *
     */
    protected function guard()
    {
        return Auth::guard('web');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Task $task)
    {
        $this->middleware('auth:web');
        $this->tasks = $task;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->tasks->with('user')->get();
        return view('admin.upcoming', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Delete a task.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteTask($id)
    {
        $this->tasks->destroy($id);

        return response()->json(['message' => 'Task was removed successfuly'], 200);
    }

    /**
     * Delete the tasks.
     *
     * @return \Illuminate\Http\Response
     */
    public function deleteTasks(Request $request)
    {
        $this->tasks->destroy($request->all());

        return response()->json(['message' => 'Tasks were removed successfuly'], 200);
    }
}