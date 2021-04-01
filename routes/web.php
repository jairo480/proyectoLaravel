<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/form',[UserController::class, 'userform']);

Route::post('/save', [UserController::class,'save'])->name('save');

Route::get('/index',[UserController::class, 'list']);

Route::delete('/delete/{id}',[UserController::class,'delete'])->name('delete');

Route::get('/editform/{id}',[UserController::class,'editform'])->name('editform');

route::post('/edit/{id}',[UserController::class, 'edit'])->name('edit');