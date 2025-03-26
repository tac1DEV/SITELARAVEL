<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::all();

        return view('todo.index', [
           'todoCount' => Todo::count(),
            'todos' => $todos
        ]);
    }

    public function add(Request $request){
        $validated = $request->validate([
            'name' => 'required|min:3'
        ]);
        Todo::create($validated);
        return redirect()->back();
    }

    public function delete(Todo $todo){
        $todo->delete();
        return redirect()->back();
    }
}
