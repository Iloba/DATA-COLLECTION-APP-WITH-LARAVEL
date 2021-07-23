<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Experience;
use Illuminate\Http\Request;

class UpdateExperience extends Controller
{
    //get data
    public function getdata(){
        return view('user.update_experience');
    }

    //Update Experience
    public function update(Request $request, User $user){
        //Validate Request
        $request->validate([
            'position' => 'required',
            'field' => 'required',
            'employer' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'experience' => 'required',
        ]);

        //find user
        $user = User::find($user->id);

        //use create method
        $experience = $user->experiences()->create([
            'user_id' => $user->id,
            'position' => $request->position,
            'field' => $request->field,
            'employer' => $request->employer,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'experience' => $request->experience,
        ]);

        if($experience){
            return redirect()->back()->with('success', 'Experience Added Successfully');
        }
       
    }
}
