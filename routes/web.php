<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home' ,[BookController::class, 'Home']);;
Route::get('/contact', function () {
    return view('Contact', [
        "title" => "Contact"
    ]);
});
Route::get('/' ,[BookController::class, 'Home']);;

Route::get('/Home/{title}', [BookController::class, 'bookview']);
Route::get('/view.category/{name}', [BookController::class, 'category']);
Route::get('/Publisher', [BookController::class, 'publish']);
Route::get('/Publishers/{name}', [BookController::class, 'publishview']);
