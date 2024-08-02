<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        return view('layouts.student', ['liststudent' => $student]);
    }

    public function create1()
    {
        return view('layouts.createstudent');
    }

    public function create(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        $post = Post::find($id);
        $post->update($request->all());

        return redirect()->route('layouts.create')
            ->with('success', 'Post updated successfully.');
    }
}
