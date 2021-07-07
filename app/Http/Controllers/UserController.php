<?php

namespace App\Http\Controllers;

use App\Models\User;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //Register User
    public function register(Request $request){

        //Validate Request
        $request->validate([
            'username' => 'required | min:6 | unique:users',
            'email' => 'required  | unique:users',
            'phone' => 'required | min:11 | unique:users',
            'password' => 'required | confirmed |  min:8 '
        ]);



        //Generate Unique Registration number
        //get the name and select the first five strings
        $name = Str::Substr(strtoupper($request->username), 0, 5);

        //Generate unique 5 digit string
        $code = mt_rand(10000, 19999);

        //generate registration number
        $reg_no = $name.''.$code;

        //Create User
        $user = new User;
        $user->username = $request->username;
        $user->reg_number = $reg_no;
        $user->email_verified = False; //Email has not been verified
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);

        $user->save();



        //log user in
        $request->session()->put('user', $user);

       return redirect()->route('dashboard')->with('success', 'Registration Successful Welcome');
;


        //Send Verification mail after registration




        //Update verified email field

    }

    //Login User
    public function login(Request $request){
        return $request->input();
    }
}
