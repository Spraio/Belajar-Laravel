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

Route::get('/createstudent', [StudentController::class, 'create']);

// Route::get('/students', [StudentController::class, 'index']);

Route::get('/students', StudentController::class.'@index')->name('layouts.createstudent');

Route::get('/tambahstudent', [StudentController::class, 'create2'])->name('tambahstudent');

// Route::get('/testmahasiswa', StudentController::class.'@store')->name('store');

Route::get('/class', [ClassController::class, 'index']);

Route::get('/classt', [ClassController::class, 'test']); //cobacoba

Route::get('/editkelas', [ClassController::class, 'editkelas'])->name('editkelas');

Route::get('/editt', [ClassController::class, 'editt'])->name('editt');

Route::get('/editkelas/{id}', ClassController::class.'@editkelas', function ($id) {
    return view('layouts.editclassroom');
});

// Route::get('/hapusmurid/{$id}', StudentController::class.'@hapusmurid')->name('hapusmurid');

Route::get('/hapusmurid/{id}', StudentController::class.'@hapusmurid', function ($id) {
    return view('layouts.createstudent');
})->name('hapusmurid');

Route::get('/editmurid/{id}', StudentController::class.'@editmurid', function ($id) {
    return view('layouts.editstudent');
})->name('editmurid');

// Route::get('/editmurid/{id}', [StudentController::class, 'editmurid'])->name('editmurid');

// Route::get('/editmurid2/{$id}', StudentController::class.'@editmurid2', function ($id) {})->name('editmurid2');
// Route::put('/editmurid2', [StudentController::class, '/editmurid2'])->name('editmurid2');
Route::put('/editmurid2/{id}', [StudentController::class, 'editmurid2'])->name('editmurid2');
