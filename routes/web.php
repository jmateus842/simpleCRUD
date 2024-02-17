<?php

use Illuminate\Support\Facades\Route;
//add the route to our user class controller
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//main route
Route::get('/', function () {
    return view('home');
});

//route for POST registration
Route::post('/register', [UserController::class, 'register']);

//
Route::post('/logout', [UserController::class, 'logout']);

//login
Route::post('/login', [UserController::class, 'login']);


//quejas relacionadas
Route::post('/create-post', [PostController::class, 'createPost']);

