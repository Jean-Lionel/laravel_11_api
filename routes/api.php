<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('authors',[AuthorController::class, 'index']);
Route::get('authors/{author}',[AuthorController::class, 'show']);
Route::get('books',[BookController::class, 'index']);
Route::get('books/{book}',[BookController::class, 'show']);
