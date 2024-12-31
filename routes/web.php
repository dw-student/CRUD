<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/',[UserController::class,'index'])->name('index');


Route::get('/create',[UserController::class,'create'])->name('create');


Route::post('/store',[UserController::class,'store'])->name('store');


Route::get('/show/{id}',[UserController::class,'show'])->name('show');


Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');


Route::post('/update/{id}',[UserController::class,'update'])->name('update');


Route::get('/destroy/{id}',[UserController::class,'destroy'])->name('destroy');
