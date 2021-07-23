<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateExperience extends Controller
{
    //get data
    public function getdata(){
        return view('user.update_experience');
    }

    //Update Experience
    public function update(Request $request, User $user){
        dd($user);
    }
}
