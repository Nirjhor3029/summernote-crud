<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        $todoList = Todo::orderBy('id', 'DESC')->get();
        return view('home',compact('todoList'));
    }
}
