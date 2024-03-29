<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Pagecontroller;
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

/* 1. Basic route*/
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
});
// Route::get('/', function () {
//     return 'Selamat Datang';
// });
// Route::get('/about', function () {
//     return '2241720210';
// });
Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
}); 
Route::get('/posts/{post}/comments/{comment}', function 
    ($postId, $commentId) { 
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});
// Route::get(' /articles/{id}', function ($id) { 
//     return 'Halaman Artikel dengan ID '.$id; 
// });
Route::get('/user/{name?}', function ($name="john") {
    return 'Nama saya '.$name; 
}); 

// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/', [Pagecontroller::class,'index']);
// Route::get('/about', [Pagecontroller::class,'about']);
// Route::get('/articles/{id}', [Pagecontroller::class,'articles']);

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'about']);
Route::get('/articles/{id}', [Pagecontroller::class,'articles']);

use App\Http\Controllers\PhotoController; 
Route::resource('photos', PhotoController::class); 

Route::get('/greeting', function () { 
    return view('blog.hello', ['name' => 'Dayutirta']); 
});
Route::get('/greeting', [WelcomeController::class,'greeting']); 