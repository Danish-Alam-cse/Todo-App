<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function todo(){
        return view('todos.todo')->with('todo_arr',Todo::all());
    }

    //cretate todos
    public function create(){
       return view('todos.create_list');
    }

    public function store(Request $req){
        

        $todo = new Todo();
        $todo->title = $req->input('title');
        $todo->description = $req->input('description');
        $todo->location = $req->input('location');
        $todo->time = $req->input('time');
        $todo->start_time = $req->input('start_time');
        $todo->end_time = $req->input('end_time');
        $todo->save();
        return redirect('/');
     }

     public function delete($id){
         $row = Todo::destroy($id);
         return redirect('/');

     }

     public function edit(Request $req, $id){
         $todo = Todo::find($id);
         
         return view('todos.edit_list')->with('todo_arr',$todo);
     }

     public function update(Request $req, $id){
         $todo = Todo::find($id);
         $todo->title = $req->input('title');
         $todo->description = $req->input('description');
         $todo->location = $req->input('location');
         $todo->time = $req->input('time');
         $todo->start_time = $req->input('start_time');
         $todo->end_time = $req->input('end_time');
         $todo->save();
        return redirect('/');

     }
}
