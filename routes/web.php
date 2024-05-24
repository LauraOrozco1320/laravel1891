<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::delete('curso/{Curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
Route::get('cursos/create',[CursoController::class,'create']);
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('curso/{Curso}',[CursoController::class,'show'])->name('curso.show');


Route::get('products/listar',[ProductController::class,'index'])->name('products.index');
Route::get('products/create',[ProductController::class,'create']);
Route::post('products/store', [ProductController::class,'store'])->name('products.store');
