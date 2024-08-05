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

    public function tambahstudent()
    {
        Student::create([
            'name' => 'name',
        ]);
    }
}
