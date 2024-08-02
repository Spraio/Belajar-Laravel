<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.home');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/produk', function () {
    return view('layouts.produk');
});

Route::get('/createstudent', function () {
    return view('layouts.createstudent');
});

Route::get('/students', [StudentController::class, 'index']);

Route::post('/layouts/createstudent', StudentController::class.'@create')->name('student.create');

Route::get('/students', StudentController::class.'@index')->name('layouts.createstudent');

Route::get('/class', [ClassController::class, 'index']);
