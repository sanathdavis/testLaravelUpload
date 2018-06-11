<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\User;
use App\Http\Requests\StoreTask;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::paginate(2);
        
        return view('task.list', compact('tasks'));
    }
    
    public function user(User $user)
    {
        dd($user->tasks[0]->title);
        // return view('task.form', compact('task'));
    }
    
    public function create()
    {
        $users = User::all();
        return view('task.form', compact('users'));
    }
    
    public function save(StoreTask $request)
    {
        Task::create(request(['title', 'user_id']));
        
        return redirect('/task');
    }
    
    public function edit(Task $task)
    {
        return view('task.form', compact('task'));
    }
    
    public function update(StoreTask $request, Task $task)
    {
        $task->title = request('title');
        $task->save();
        
        return redirect('/task');
    }
}
