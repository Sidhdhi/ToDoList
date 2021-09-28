<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function show()
    {
        return view('list')->with('ToDoArray',Task::all());
    }

    public function createnew()
    {
        return view('createnew');
    }

    public function store(Request $request)
    {
        $Todo = new Task();
        $Todo->title = $request->input('title');
        $Todo->task = $request->input('task');
        $Todo->iscompleted = $request->input('iscompleted');
        $Todo->save();
        return redirect('/');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('/');
    }
}
