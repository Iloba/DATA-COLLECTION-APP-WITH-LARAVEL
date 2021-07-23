<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Education;
use Illuminate\Http\Request;

class UpdateEducation extends Controller
{
    //get data
    public function getdata(){
        return view('user.update_education');
    }

    //update education
    public function update(Request $request, User $user){
       //alidate Request
       $request->validate([
            'level' => 'required',
            'cert' => 'required',
            'school' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'grade' => 'required'
       ]);


       //Update Request
       $user = User::find($user->id);
       $education = new Education;
       $education->user_id = $user->id;
       $education->education = $request->level;
       $education->certificate = $request->cert;
       $education->institution = $request->school;
       $education->start_date = $request->start_date;
       $education->end_date = $request->end_date;
       $education->grade = $request->grade;

       $education->save();


       //return redirect
       return back()->with('success', 'Education Successfully Added');
       
    }

    //delete Education
    public function delete($id){
        $education = Education::find($id);
       
        $education->delete();

        return back()->with('success', 'Eduction Successfully Removed');
    }

}
