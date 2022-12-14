<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('index',[TaskController::class,'index']);
Route::get('edit/{id}',[TaskController::class,'edit']);
Route::post('store',[TaskController::class,'store']);
Route::post('update/{id}',[TaskController::class,'update']);
Route::delete('destroy/{id}',[TaskController::class,'destroy']);
