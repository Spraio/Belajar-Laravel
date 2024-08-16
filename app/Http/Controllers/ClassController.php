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

        ClassRoom::create([
            'name' => $data,
        ]);

        return redirect('/class');

    }

    public function editkelas($name)
    {
        $class = ClassRoom::find($name);

        return view('layouts.editclassroom', ['classlist' => $class]);

    }

    public function editt()
    {
        $class = ClassRoom::find($name);
        $class->update($name->all());

    }
}
