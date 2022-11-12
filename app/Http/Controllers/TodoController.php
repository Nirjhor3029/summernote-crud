<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TodoController extends Controller
{
    public function todoPost(Request $request)
    {
        // return $request->all();
        $inputs = [
            "title" => $request->title,
            "content" => $request->content,
        ];
        Todo::create($inputs);

        return Redirect::back();
    }

    public function todoDelete($id)
    {
        $todo = Todo::find($id);
        if (!isset($todo)) {
            return response()->json([
                'status' => 401,
                'message' => "record not found",
            ], 200);
        }
        $todo->delete();
        return response()->json([
            'status' => 200,
            'message' => "Successfully deleted",
        ], 200);
    }

    public function todoView($id)
    {
        $todo = Todo::find($id);
        if (!isset($todo)) {
            return response()->json([
                'status' => 401,
                'message' => "record not found",
            ], 200);
        }
        
        $todoList = Todo::all();
        return view('todo-details',compact('todo','todoList'));
    }


}
