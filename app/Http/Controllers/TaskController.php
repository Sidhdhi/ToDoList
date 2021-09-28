<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    public function show()
    {
        return view('list')
            ->with('tasks',Task::all());
    }

    public function createnew()
    {
        return view('task_form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'task' => 'required',
        ]);

        Task::create([
            'title' => $request->input('title'),
            'task' => $request->input('task'),
            'status' => 0
        ]);

        return redirect('/');
    }

    public function editTask($id)
    {
        $task = Task::findOrFail($id);

        return view('task_form', [
            'task' => $task
        ]);

    }

    public function edit($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'task' => 'required',
            'status' => 'required|between:0,1'
        ]);        

        $task = Task::findOrFail($id);

        $task->title = $request->input('title', $task->title);
        $task->task = $request->input('task', $task->task);
        $task->status = $request->input('status', $task->status);
        $task->completed_at = $task->status ? Carbon::now()->toDateTimeString() : null;

        $task->save();

        return redirect('/');
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect('/');
    }
}
