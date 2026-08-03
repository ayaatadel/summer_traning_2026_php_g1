<?php

use App\Http\Controllers\Api\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');



Route::get('categories',[CategoryController::class,'index'])->name('categories.index');
Route::get('categories/show/{id}',[CategoryController::class,'show'])->name('categories.index');
Route::delete('categories/delete/{id}',[CategoryController::class,'destroy'])->name('categories.destroy');
Route::put('categories/update/{id}',[CategoryController::class,'update'])->name('categories.update');
Route::post('categories/store',[CategoryController::class,'store'])->name('categories.store');


// Route::apiResource('categories', [CategoryController::class]);
//
