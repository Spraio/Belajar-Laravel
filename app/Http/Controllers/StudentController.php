<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'name' => 'required|max:255',
            'nim' => 'required',
        ]);
        $post = Student::find($id);
        $post->update($request->all());

        return redirect()->route('student.index')
            ->with('success', 'Post updated successfully.');
    }
}
