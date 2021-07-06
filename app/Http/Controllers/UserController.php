<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Register User
    public function register(Request $request){
        return $request->input();
    }

    //Login User
    public function login(Request $request){
        return $request->input();
    }
}
