<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Dompdf\Dompdf;

class TodoController extends Controller
{
    public function todoCreate()
    {
        return view('create');
    }
    public function todoPost(Request $request)
    {
        // return $request->all();
        $inputs = [
            "title" => $request->title,
            "short_desc" => $request->short_desc,
            "content" => $request->content,
        ];
        Todo::create($inputs);

        return Redirect::route('home')->with('message', "New Record Added Successfully.");
    }

    public function todoUpdate($id)
    {
        $todo = Todo::find($id);
        return view('edit', compact('todo'));
    }
    public function todoUpdatePost($id, Request $request)
    {
        // return $id;
        // return $request->all();
        $inputs = [
            "title" => $request->title,
            "short_desc" => $request->short_desc,
            "content" => $request->content,
        ];
        Todo::where('id', $id)
            ->update($inputs);

        return Redirect::route('home')->with('message', "Successfully Updated");
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
        return view('todo-details', compact('todo', 'todoList'));
    }

    public function todoDownload($id)
    {
        $todo = Todo::find($id);
        if (!isset($todo)) {
            return response()->json([
                'status' => 401,
                'message' => "record not found",
            ], 200);
        }

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('todo-download',compact('todo')));

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream($todo->title.".pdf",['Attachment'=>false]);

        // return view('todo-details',compact('todo'));
    }
}
