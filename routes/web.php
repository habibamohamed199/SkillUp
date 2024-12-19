<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VideoUploadController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/courseplay',function(){
    return view('courseplay');
});
Route::get('/test',function(){
    return view('testing/test');
});
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::post('/register-user',[RegisterController::class,'register'])->name("register-user");
Route::get("/reg",[RegisterController::class,'index'])->name("register-page");
Route::get("/login",[LoginController::class,'index'])->name("login");
Route::post("/login-user",[LoginController::class,'login'])->name("login-user");
Route::get('/upload-video',[VideoUploadController::class,'index'])->name("upload-video");
Route::post('/upload',[VideoUploadController::class,'upload'])->name("upload");
Route::get('/signup',[RegisterController::class,'index'])->name("signup");
Route::post('/signup-user',[RegisterController::class,'register'])->name("signup-user");



