<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::middleware('userVerifyToken')->group(function(){
    Route::get('my/rented-history',[\App\Http\Controllers\Frontend\DefaultController::class,'myRented'])->name('myRented');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[\App\Http\Controllers\Frontend\DefaultController::class,'indexPage'])->name('index');
Route::get('user/login',[\App\Http\Controllers\Frontend\DefaultController::class,'loginPage'])->name('loginPage');
Route::get('user/register',[\App\Http\Controllers\Frontend\DefaultController::class,'registerPage'])->name('registerPage');
Route::get('rooms',[\App\Http\Controllers\Frontend\DefaultController::class,'roomAll'])->name('rooms');
Route::get('rooms/detail/{id}',[\App\Http\Controllers\Frontend\DefaultController::class,'roomDetails'])->name('roomDetails','id');
Route::get('testCookie',[\App\Http\Controllers\Frontend\DefaultController::class,'testCookie']);

