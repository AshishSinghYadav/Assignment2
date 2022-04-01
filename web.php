<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoopsController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SumController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//basic routes

Route::get('/test', function () {
    return 'Welcome to Laravel class';});



//controllers
Route::get('/first', [UserController::class, 'index']);

Route::get('/second', [GuestController::class, 'show']);


// blades
Route::get('loops',[LoopsController::class,'cont']);

//advance
Route::get('/user/profile', [profileController::class,'show'])->name('profile');
Route::get('verifyuser',[profileController::class,'verifyuser']);


Route::get('/current/url', function()
{
    return URL::current();
});


//Q-1
Route::get('upload',[UploadController::class,'uploadForm']);
Route::post('upload',[UploadController::class,'uploadFile'])->name('upload.uploadFile');


//Q-2
Route::view("question",'questone');
Route::get('control',[SumController::class,'get']);
Route::get('control',[SumController::class,'add']);
Route::get('control',[SumController::class,'resumeform']);
Route::view("form",'form');


