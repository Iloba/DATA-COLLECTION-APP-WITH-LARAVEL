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


        //Check if email is verified
        $user = User::find($user->id);
        return $this->CheckIfUserVerifiedEmail($user);


        //Check if user updated data
        return $this->CheckIfUserUpdatedData($user);

        //submit form
    

        //generate pdf and send to user email
      

    }
   
    protected function CheckIfUserUpdatedData(User $user){
        if($user->passport == null ||
         $user->gender == null ||
         $user->dob == null || 
         $user->marital_status == null ||
         $user->state == null || 
         $user->country == null || 
         $user->address == null || 
         $user->essay == null )
         {
            return redirect()->back()->with('error', 'Please Update your Data before submitting');
        }
        
    }

    protected function CheckIfUserVerifiedEmail(User $user){
        if($user->email_verified == False){
            return redirect()->back()->with('error', 'Please Verify your Email before submitting');
        }
    }
}
