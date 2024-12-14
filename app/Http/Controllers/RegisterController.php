<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index(){
        return view('testing/register');
    }
    public function register(){

           request()->validate([
               'email' => 'required|email|unique:users,email',
               'password' => 'required|min:8',
               'name'=>'required',
               'gender'=>'required',
               'phone'=>'required|unique:users,phone',
               'confirm-password'=>'required|same:password'
           ]);
       $newUser = new User;
       $newUser->email=request('email');
       $newUser->password=Hash::make(request('password'));
       $newUser->name=request('name');
       $newUser->phone=request('phone');
       $newUser->gender=request('gender');
       $newUser->save();



       return "User Registered Successfully";

    }


}
