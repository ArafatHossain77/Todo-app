<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todolist=Todo::latest()->get();
        return view('index', compact( 'todolist'));
    }
    public function store(Request $request):RedirectResponse
    {
        Todo::create($request->only("todo"));
        return  redirect()->back()->with('success','Your task added');
    }
    public function distroy($todo):RedirectResponse
    {
        return  redirect()->back()->with('success','Your task has been deleted');
    }
}
