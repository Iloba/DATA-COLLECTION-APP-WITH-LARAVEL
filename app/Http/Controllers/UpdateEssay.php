<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Essay;
use Illuminate\Http\Request;

class UpdateEssay extends Controller
{
    //
    public function getdata(){    
        return view('user.update_essay');
    }

    public function update(Request $request, User $user){
       //validate request
       $request->validate([
            'essay' => 'required'
       ]);

       
      

       //redirect
       return redirect()->back()->with('success', 'Essay Updated Successfully');
        
    }
}
