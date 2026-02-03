<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController2;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| All routes for Book2 model using BookController2
*/

Route::get('/book2', [BookController2::class, 'index']);        // Get all Book2 entries
Route::post('/book2', [BookController2::class, 'store']);       // Add new Book2
Route::get('/book2/{id}', [BookController2::class, 'show']);    // Get single Book2
Route::put('/book2/{id}', [BookController2::class, 'update']);  // Update Book2
Route::delete('/book2/{id}', [BookController2::class, 'destroy']); // Delete Book2
