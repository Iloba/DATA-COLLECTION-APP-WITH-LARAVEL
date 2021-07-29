<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PreviewDataController extends Controller
{
    //preview data
    public function preview(User $user){
        // dd($user);

        return view('user.preview_data',[
            'user' => $user
        ]);
    }

    public function submit(User $user){
        dd($user);
    }
}
