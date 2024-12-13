<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('testing/login');
    }
    public function login(){
        try {
            validator(request()->all(), [
                'email' => 'required|email',
                'password' => 'required|min:8'
            ])->validate();
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }



        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            return "success";
        }else {
            return "fail";
        }
    }

}
