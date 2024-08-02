<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::all();

        return view('layouts.classroom', ['classlist' => $class]);
    }


        /**
     * create a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        ClassRoom::create($request->all());

        return redirect()->route('class.index')
            ->with('success', 'Post created successfully.');
    }
}
