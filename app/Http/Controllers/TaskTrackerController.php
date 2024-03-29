<?php

namespace App\Http\Controllers;

use App\TaskTracker;
use Illuminate\Http\Request;
use App\Task;

class TaskTrackerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate(request(), [
            'task_id'  => 'required'
        ]);

        auth()->user()->addTaskTracker(
            $task_tracker = new TaskTracker(request(['task_id']))
        );

        $points = Task::find($task_tracker->task_id)->points;

        auth()->user()->points->daily += $points;
        auth()->user()->points->total += $points;
        auth()->user()->points->save();

        return redirect()->home();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskTracker  $taskTracker
     * @return \Illuminate\Http\Response
     */
    public function show(TaskTracker $taskTracker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TaskTracker  $taskTracker
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskTracker $taskTracker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskTracker  $taskTracker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskTracker $taskTracker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TaskTracker  $taskTracker
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskTracker $taskTracker)
    {
        //
    }
}
