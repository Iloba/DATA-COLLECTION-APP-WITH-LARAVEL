<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\ConfirmSubmission;
use Illuminate\Support\Facades\Validator;

class PreviewDataController extends Controller
{
    //preview data
    public function preview(User $user){
        // dd($user);

        return view('user.preview_data',[
            'user' => $user
        ]);
    }

    public function submit(Request $request, User $user){
        // dump($user);

        //validate form request
        $rules = [
            'confirm_submission' => 'required'
        ];

        $messages = [
            'confirm_submission.required' => 'Please Click the Check Box Below to Confirm Submission'
        ];


       $validator =  Validator::make($request->all(), $rules, $messages);

       if($validator->fails()){
        return redirect()->back()
        ->withErrors($validator)
        ->withInput();
       };


        
        $user = User::find($user->id);

       //Check if email is verified
        if(!$user->email_verified == true){
            return redirect()->back()->with('error', 'Please Verify your Email before submitting');
        }



       //generate pdf and send to user email



        //submit form
       $user->submitted = true;

       $user->save();


       //redirect to submission page
       return redirect()->route('form-submitted')->with('success', 'Congratulations, your Form submitted successfully, Please check your email for confirmation');
       
        
      

    }
   
    
    

   
}
