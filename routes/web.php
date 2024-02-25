<?php

use App\Http\Controllers\PhotoController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\articlesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/home', [indexController::class,'index']);
Route::get('/about', [aboutController::class,'about']);
Route::get('/articles/{id}', [articlesController::class,'artikel']);

Route::get('/about', function () {
    return '2341728012 dwina atalia selamat datang';
});

Route::get('/user/{name}', function ($name) {
    return 'dwina atalia'.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($id) {
return "Halaman Artikel ke-" .$id;
});


Route::get('/user/{name}', function ($name) {
return 'Nama saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
    });

    Route::get('/user/{name?}', function ($name='Dwina Atalia') {
        return 'Nama saya '.$name;
        });

Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);