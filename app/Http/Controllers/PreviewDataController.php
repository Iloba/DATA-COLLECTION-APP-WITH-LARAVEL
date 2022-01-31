<?php

namespace App\Http\Controllers;

use PDF;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\ConfirmSubmission;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Notifications\SubmissionNotification;

class PreviewDataController extends Controller
{
    //preview data
    public function preview(User $user)
    {
        // dd($user);

        return view('user.preview_data', [
            'user' => $user
        ]);
    }

    public function submit(Request $request, User $user)
    {
        // dump($user);

        //validate form request
        $rules = [
            'confirm_submission' => 'required'
        ];

        $messages = [
            'confirm_submission.required' => 'Please Click the Check Box Below to Confirm Submission'
        ];


        $validator =  Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        };



        $user = User::find($user->id);
        // dd($user->email);

        //Check if email is verified
        // if(!$user->email_verified == true){
        //     return redirect()->back()->with('error', 'Please Verify your Email before submitting');
        // }



        //generate pdf and send to user email
        // $pdf = PDF::loadView('user.pdf-page');

        //  $pdf->download('user-pdf');

        //Try and catch syntaxxx to send error (Never forget)
        try {

            //Send Verification mail after registration
            $user->notify(new SubmissionNotification($user->name));

           
            
        } catch (Exception $error) {
            return back()->with('error', 'Registration complete but Something went wrong; Could not send verification mail');
        }



        //submit form
        $user->submitted = true;

        $user->save();


        //Destroy session........(Logout user)
        Session::forget('user');


        //redirect to submission page
        return redirect()->route('form-submitted')->with('success', 'Congratulations, your Form submitted successfully, Please check your email for confirmation');
    }

    //generate pdf and download
    // public function downloadPDF(){
    //      $pdf = PDF::loadView('user.pdf-page');

    //      $pdf->download('user-pdf');
    // }






}
