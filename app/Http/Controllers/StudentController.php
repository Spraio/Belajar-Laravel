<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();

        return view('layouts.student', ['liststudent' => $student]);
    }

    public function create()
    {
        $class = ClassRoom::all();

        return view('layouts.createstudent', ['classt' => $class]);
    }

    public function create2(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'gender' => 'required|string|max:1',
            'nim' => 'required|string|max:20|unique:students,nim',
            'class_id' => 'required|exists:class,id',
        ]);

        Student::create($request->all());

        return redirect('/students');
    }

    public function hapusmurid($id)
    {
        $student = Student::find($id);
        $student->delete();

        return redirect('/students');

    }

    public function editmurid($id)
    {
        $class = ClassRoom::all();
        $student = Student::find($id);

        // return redirect()->route('editmurid', ['id' => $student->id]);
        return view('layouts.editstudent', ['classt' => $class, 'liststudent' => $student]);

    }

    public function editmurid2(Request $request, $id)
    {
        $request->validate([
            'name' => '',
            'gender' => '',
            'nim' => '',
            'class_id' => '',
        ]);

        // 'name' => 'required|string|max:255',
        //     'gender' => 'required|string|max:1',
        //     'nim' => 'required|string|max:20|unique:students,nim',
        //     'class_id' => 'required|exists:class,id',

        // dd($request);
        // dd($request->get('class_id'));

        // $student = Student::find($id);
        // $student->name = $request->get('name');
        // $student->gender = $request->get('gender');
        // $student->nim = $request->get('nim');
        // $student->class_id = $request->get('class_id');
        // // dd($student);
        // $student->save();

        $student = Student::find($id)->update([
            'name' => $request->name,
            'gender' => $request->gender,
            'nim' => $request->nim,
            'class_id' => $request->class_id,
        ]);

        return redirect('/students');

    }
}
