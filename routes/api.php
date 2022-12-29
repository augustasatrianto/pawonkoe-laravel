<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryApiCOntroller;
use App\Http\Controllers\UserApiController;
use App\Http\Controllers\PostApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/categories', [CategoryApiController::class, 'index']);
Route::get('/users', [UserApiController::class, 'index']);
Route::get('/users/{id}', [UserApiController::class, 'show']); // get single user
Route::get('/posts', [PostApiController::class, 'index']);
Route::get('/posts/{id}', [PostApiController::class, 'show']); // get single post