<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateEducation extends Controller
{
    //get data
    public function getdata(){
        return view('user.update_education');
    }
}
