<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Essay;
use Illuminate\Http\Request;

class UpdateEssay extends Controller
{
    //
    public function getdata(User $user){
        $user = User::find($user->id);    
        return view('user.update_essay', [
            'user' => $user
        ]);
    }

    public function update(Request $request, User $user){
       //validate request
       $request->validate([
            'essay' => 'required'
       ]);

       $user = User::find($user->id);
       $user->essay = $request->essay;
       $user->save();
       
      

       //redirect
       return redirect()->back()->with('success', 'Essay Updated Successfully');
        
    }
}
