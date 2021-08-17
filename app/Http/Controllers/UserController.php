<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use Webpatser\Uuid\Uuid;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
   
    //Register User
    public function register(Request $request){

        //Validate Request
        $request->validate([
            'username' => 'required | min:6 | unique:users',
            'email' => 'required  | unique:users',
            'phone' => 'required | min:11 | unique:users',
            'password' => [ 
                'required',
                'confirmed', 
                Password::min(8)->letters()->numbers()->mixedCase()
             ]
        ]);



        //Generate Unique Registration number
        //get the name and select the first five strings
        $name = Str::Substr(strtoupper(trim($request->username)), 0, 5);

        //Generate unique 5 digit integer
        $code = mt_rand(10000, 19999);

        //generate registration number
        $reg_no = $name.''.$code;

        //Create User
        $user = new User;
        
        $user->username = str_replace(' ', '', $request->username);
        $user->reg_number = $reg_no;
        $user->email_verified = False; //Email has not been verified
        $user->submitted = False;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
           
        $user->save();

        //Try and catch syntaxxx to send error (Never forget)
        try {
             //Send Verification mail after registration
            Mail::to($request->email)->send(new VerifyEmail($user));

            //redirect user to email verification page 
            return redirect()->route('email-verification')->with('success', 'Registration Successful Please check your email, we have sent you a link to verify your email also check spam folder');

        } catch (Exception $error){
            return back()->with('error', 'Registration complete but Something went wrong; Could not send verification mail');
        }
       

    }


}
