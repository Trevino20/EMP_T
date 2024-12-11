<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controller\EmpConstroller;
use App\Http\Controllers\EmpController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/emps',[EmpConstroller::class,'index'])->name('emp.index');

// Route::get('/emp', function () {
//     return view('emp');
// });

Route::get('/',[EmpController::class,'showEmp'])->name('emp.index');