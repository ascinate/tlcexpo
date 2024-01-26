<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    //
    public function tasks()
    {
        $data = Task::all();
        return view('admin/tasks',['datas' => $data]);
    }

    public function showData($id)
    {
        $data = Task::find($id);
        return view('admin/edittask',['data' => $data]);
    }

    public function inserttask(Request $request)
    {
        $task = new Task();
        $task->priority = $request->priority;
        $task->task_name = $request->task_name;
        $task->task_type = $request->task_type;
        $task->description = $request->description;
        $task->links = $request->links;
        $task->notes = $request->notes;

        $task->save();
        return redirect('admin/tasks');
    }

    public function updatetask(Request $request)
    {
        $task = Task::find($request->id);
        $task->priority = $request->priority;
        $task->task_name = $request->task_name;
        $task->task_type = $request->task_type;
        $task->description = $request->description;
        $task->links = $request->links;
        $task->notes = $request->notes;

        $task->save();
        return redirect('admin/tasks');
    }

    public function delete($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect('admin/tasks');
    }
}
