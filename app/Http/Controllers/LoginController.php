<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    //Login User with either reg number or email
    public function login(Request $request){

        //Validate Request
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->orWhere('reg_number', $request->email)->first();
       
        //if user is found, compare passwords
        if($user){
            if(Hash::check($request->password, $user->password)){
               
                //Create session
                $request->session()->put('user', $user);


                //redirect to dashboard
                return redirect()->route('dashboard')->with('success', 'Login Successful');


            }else{
                return back()->with('error', 'Password Does not match our records');
            }
        }else{
            return back()->with('error', 'The provided credentials do not match our records. No Results Found!!');
        }


        
    }

    //logout User
    public function logout(){
        Session::forget('user');
        return redirect()->route('login')->with('success', 'Logout Successful');
    }
}
