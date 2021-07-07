<?php

namespace App\Http\Controllers;

use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Register User
    public function register(Request $request){

        //Validate Request
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);



        //Generate Unique Registration number
        $reg_no = Str::uuid(5);

        dd($reg_no);



        //Create User



        //log user in
;


        //Send Verification mail after registration




        //Update verified email field

    }

    //Login User
    public function login(Request $request){
        return $request->input();
    }
}
