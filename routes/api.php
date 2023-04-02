<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->group(function(){
    //return $request->user();
    Route::get('test/token',[\App\Http\Controllers\Api\Frontend\IndexController::class,'testToken']);
    Route::post('user/logout',[\App\Http\Controllers\Api\Frontend\AuthController::class,'logout']);
});
Route::post('user/register',[\App\Http\Controllers\Api\Frontend\AuthController::class,'register']);
Route::post('user/login',[\App\Http\Controllers\Api\Frontend\AuthController::class,'authenticate']);
Route::get('test',[\App\Http\Controllers\Api\Frontend\AuthController::class,'test']);
Route::get('/index',[App\Http\Controllers\Api\Frontend\IndexController::class,'index']);
Route::get('rooms',[\App\Http\Controllers\Api\Frontend\RoomController::class,'rooms']);
Route::get('rooms/{id}',[App\Http\Controllers\Api\Frontend\RoomController::class,'details']);

