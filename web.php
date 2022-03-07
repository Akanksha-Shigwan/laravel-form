<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
use App\Http\Controllers\UsersController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function (){
//     return view('home');
// });
Route::view('home',"home"); //short cut of above

Route::get('users', [users::class, 'index']); //from controller

Route::get('hello', [users::class, 'hello']); //from view with the help of controller

Route::view('add', 'users');
Route::get('db', [UsersController::class, 'index']);
Route::post('add', [UsersController::class, 'getData']);

Route::view('contact', 'contactform');
Route::post('contact', [UsersController::class, 'formData']);
