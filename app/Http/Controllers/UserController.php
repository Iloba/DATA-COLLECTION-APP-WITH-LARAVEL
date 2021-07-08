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

        //Generate unique 5 digit integer
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

        
        try {
             //Send Verification mail after registration
            Mail::to($request->email)->send(new VerifyEmail($user));

            //redirect user to email verification page 
            return redirect()->route('email-verification')->with('success', 'Registration Successful Please check your email, we have sent you a link to verify your email');

        } catch (Exception $error){
            return back()->with('error', 'Registration complete but Something went wrong; Could not send verification mail');
        }
       

    }

     //Update verified email field
    public function verifyEmail(User $user){
        //find user on the db table
        $user = User::find($user->id);

        //check if user reg number matches that in database
        if(User::where('reg_number', $user->reg_number)->exists()){
            //set verified to true
            $user->email_verified = true;
            $user->save();

            return redirect()->route('login_page')->with('success', 'Email successfully verified, Please login');
        }
    }

    //Login User with either reg number or email
    public function login(Request $request){
        return $request->input();
    }

    //logout User
    public function logout(){
        Session::forget('user');
        return redirect()->route('login')->with('success', 'Logout Successful');
    }
}
