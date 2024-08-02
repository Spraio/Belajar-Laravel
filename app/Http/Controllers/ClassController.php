<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::all();

        return view('layouts.classroom', ['classlist' => $class]);
    }
}
