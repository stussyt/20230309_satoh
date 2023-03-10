<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Todolist;

class TodolistController extends Controller
{
    public function index()
    {
        $todolists = Todolist::all();
        return view('index', ['todolists' => $todolists]);
    }
    public function store(Request $request)
    {
        $form = $request->only(['content']);
        Todolist::create($form);

        return redirect('/');
    }
    public function update(Request $request)
    {
        $form = $request->only(['content', 'id']);
        Todolist::where('id', $request->id)->update($form);

        return redirect('/');
        
    }
    public function delete(Request $request)
    {
        $form = $request->only(['id']);
        Todolist::where('id', $request->id)->delete($form);

        return redirect('/');
    }
}
