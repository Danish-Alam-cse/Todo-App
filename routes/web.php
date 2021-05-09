<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Models\Todo;




Route::get('/',[TodoController::class,'todo'])->name('todos');
Route::get('/create',[TodoController::class,'create'])->name('create');
Route::post('/save_new_list',[TodoController::class,'store'])->name('store');
Route::get('/delete/{id}',[TodoController::class,'delete'])->name('delete');
Route::get('/edit/{id}',[TodoController::class,'edit'])->name('edit');
Route::post('/update/{id}',[TodoController::class,'update'])->name('update');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
