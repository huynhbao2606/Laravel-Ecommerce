<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Bai03Controller;
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
Route::get('/tinh-tong/{a}/{b}',[TestController::class,'sum']);
Route::get('/b3',[Bai03Controller::class,'tuyensinh']);
Route::post('/tuyen-sinh-post',[Bai03Controller::class,'xulytuyensinh']);
