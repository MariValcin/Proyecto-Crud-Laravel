<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProductoController;
use PgSql\Result;

Route::get('crud', [ProductoController::class,'index'])->name ('crud.index');
Route::get('crud/create', [ProductoController::class,'create'])->name ('crud.create');
Route::post('crud/create/create', [ProductoController::class,'store'])->name ('crud.store');
Route::get('crud/producto', [ProductoController::class,'show' ])->name ('crud.show');
Route::get('crud/producto/{id}', [ProductoController::class,'unico'])->name ('crud.unico');
Route::get('crud/producto/edit/{producto}', [ProductoController::class,'edit'])->name ('crud.edit');
Route::post('crud/producto/edit/update/{producto}', [ProductoController::class,'update'])->name ('crud.update');
Route::delete('crud/producto/edit/delete/{producto}', [ProductoController::class,'destroy'])->name ('crud.destroy');