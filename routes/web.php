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
    return view('welcome'); // Loads your welcome.blade.php
});

Route::get('/home', function () {
    return view('home');  // Loads your home.blade.php
});


//route for POST registration
Route::post('/register', [UserController::class, 'register']);

//
Route::post('/logout', [UserController::class, 'logout']);

//login
Route::post('/login', [UserController::class, 'login']);


//quejas relacionadas
Route::post('/create-post', [PostController::class, 'createPost']);
// In routes/web.php

//get ALL posts
Route::get('/posts', [PostController::class, 'showPosts'])->name('posts.index');

// DELETE  route (the original one can be removed if no longer used)
Route::delete('/delete-post/{post}', [PostController::class, 'destroy'])->name('posts.destroy');

Route::get('/delete-post', function () {
    return view('delete-post');  // Loads your home.blade.php
});


// GET route to show the form
Route::get('/delete-post', function() {
    return view('delete-post');
})->name('posts.deletepage');

// DELETE route to handle the deletion
Route::delete('/delete-post', [PostController::class, 'destroy'])->name('posts.destroy');


Route::delete('/delete-posts', [PostController::class, 'destroyMultiple'])->name('posts.destroyMultiple');



