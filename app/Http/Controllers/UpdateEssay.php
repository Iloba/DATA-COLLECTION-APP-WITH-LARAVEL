<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Essay;
use Illuminate\Http\Request;

class UpdateEssay extends Controller
{
    //
    public function getdata(User $user){
        $essays = Essay::find($user->id);
        return view('user.update_essay', [
            'essays' => $essays
        ]);
    }

    public function update(Request $request, User $user){
       //validate request
       $request->validate([
            'essay' => 'required'
       ]);

       $essay = Essay::find($user->id);
       $essay->essay = $request->essay;
       $essay->save();

       //redirect
       return redirect()->back()->with('success', 'Essay Updated Successfully');
        
    }
}
