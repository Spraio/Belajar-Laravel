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

Route::get('/layouts/createstudent', [ClassController::class, 'index']);

Route::post('/class', ClassController::class.'@create')->name('class.create');

Route::get('/class', ClassController::class .'@index')->name('class.index');
