<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){

        return view('todo' , [
            'todos' => Todo::all()
        ]);
    }


    public function save(Request $request){

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->description = $request->description;
        $todo->save();

        return $request->route('todos.index');
    }
}
