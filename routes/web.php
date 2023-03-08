<?php

use App\Http\Controllers\Computers;
use Illuminate\Support\Facades\Route;
Route::get('/',[Computers::class,'index']);
Route::get('/create',[Computers::class,'create'])->name('create');
Route::get('/show/{id}',[Computers::class,'show'])->name('show');
Route::get('/edit/{id}',[Computers::class,'edit'])->name('edit');
/* Rutas POST, PUT y DELETE */
Route::post('/store',[Computers::class,'store'])->name('store');
Route::delete('/destroy/{id}',[Computers::class,'destroy'])->name('destroy');
Route::put('/update/{id}',[Computers::class,'update'])->name('update');