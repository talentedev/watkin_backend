<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Task;

class TaskController extends ApiController
{
    /**
     * @var Task
     */
    private $task;

    /**
     * TaskController constructor.
     *
     * @param Task $task
     */
    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = auth()->user()->tasks;
        return $this->respond(['tasks' => $tasks]);
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
        $message = '';

        if($this->existSameTask($request->get('name'))) {
            $message = 'Task exist already';
        } else {
            $this->task->name = $request->get('name');
            $this->task->deadline = $request->get('deadline');
            $this->task->description = $request->get('description');
            $this->task->user_id = auth()->user()->id;
            $this->task->save();
            $message = 'Task successfully created';
        }

        return $this->respond(['message' => $message]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Check if same named task exist.
     *
     * @param  string $task_name
     * @return Boolean
     */
    public function existSameTask($task_name)
    {
        $is_exist = false;
        $task = auth()->user()->tasks()->where('name', $task_name)->first();
        if($task) {
            $is_exist = true;
        }
        return $is_exist;
    }
}
