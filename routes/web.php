<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

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
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);

// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;

// Route::get('/', HomeController::class);
// Route::get('/about', AboutController::class);
// Route::get('/articles/{id}', ArticleController::class);
// Route::get('/hello', [WelcomeController:: class , 'hello' ]);

// Route::get('/world', function () {
//     return 'World';
//  });
// Route::get('/selamat', function () {
//     return 'Selamat Datang';
// });
// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
//     });
    
    
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

    