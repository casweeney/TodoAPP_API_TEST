<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();

        return response()->json([
            "todos" => $todos
        ], 200);
    }

    public function store(Request $request){
        $todo = Todo::create([
            "content" => $request->content,
            "completed" => false
        ]);

        return response()->json([
            "todo" => $todo
        ], 200);
    }

    public function update(Request $request, Todo $todo){
        //$todo = Todo::whereId($request->id)->first();

        if(!is_null($todo)){
            $todo->content = $request->content;
            $todo->save();

            return response()->json([
                "todo" => $todo
            ], 200);
        }
    }

    public function delete(Request $request, Todo $todo){
        // $todo = Todo::whereId($request->id)->first();

        if(!is_null($todo)){
            $todo->delete();
        }

        return response()->json(200);
    }

    public function complete(Request $request, Todo $todo){
        // $todo = Todo::whereId($request->id)->first();

        if(!is_null($todo)){
            $todo->completed = !$todo->completed;
            $todo->save();
            return response()->json(200);
        }
    }
}
