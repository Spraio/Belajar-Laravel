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

    public function test()
    {
        $data = htmlspecialchars($_GET['namanya']);

        // dd($name);

        ClassRoom::create([
            'name' => $data,
            'kelas',
        ]);

        //return redirect('/class');

        return redirect()->route('index');

    }
}
