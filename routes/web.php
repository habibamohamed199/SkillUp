<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/register-user',[RegisterController::class,'register'])->name("register-user");

Route::get("/reg",function(){
    return view('testing/register');
});
