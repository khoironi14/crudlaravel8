<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('login');
});


Route::post('/postlogin',[LoginController::class,'postlogin']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/beranda',[BerandaController::class,'index']);
Route::get('/task',[TaskController::class,'index']);
Route::get('create-task',[TaskController::class,'create']);
Route::post('/savetask',[TaskController::class,'store']);
Route::get('/edit-task/{id}',[TaskController::class,'edit']);
Route::delete('/hapus-task/{id}',[TaskController::class,'destroy']);
Route::post('/update-task/{id}',[TaskController::class,'update']);

});
Route::get('/logout',[LoginController::class,'logout']);
