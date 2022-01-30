<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmailVerification extends Controller
{
     //Update verified email field
     public function verifyEmail(User $user){
        //find user on the db table
        $user = User::find($user->id);

        //check if user reg number matches that in database
        if(User::where('reg_number', $user->reg_number)->exists()){
            //set value of verified field to true
            $user->email_verified = true;
            
            //save
            $user->save();

            return redirect()->route('login_page')->with('success', 'Email successfully verified, Please login');
        }
    }

}
