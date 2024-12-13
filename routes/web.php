<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\VideoUploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/register-user',[RegisterController::class,'register'])->name("register-user");
Route::get("/reg",[RegisterController::class,'index'])->name("register-page");
Route::get("/login",[LoginController::class,'index'])->name("login-page");
Route::post("/login-user",[LoginController::class,'login'])->name("login-user");
Route::get('/upload-video',[VideoUploadController::class,'index'])->name("upload-video");
Route::post('/upload',[VideoUploadController::class,'upload'])->name("upload");
