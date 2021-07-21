<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UpdateBiodata extends Controller
{
    //get user id and  biodata and pass to view
    public function getdata(User $user){
        $user = User::find($user->id);
       

        //return view
        return view('user.biodata', [
            'user' =>  $user
        ]);
    }

    //Update User
    public function update(Request $request, User $user){
        

        //Validate Request
        $request->validate([
            'phone' => 'required',
            'photo' => 'mimes:jpg,jpeg',
            'gender' => 'required',
            'dob' => 'required',
            'marital_status' => 'required',
            'state' => 'required',
            'country' => 'required',
            'address' => 'required'
        ]);

        //upload passport photograph
        if($request->hasFile('photo')){

            //get image name
            $getimagename = $request->photo->getClientOriginalName();

            //Store image in 
           try{

            $request->photo->storeAs('passport_photographs', $getimagename, 'public');
            
           } catch (Exception $error){
                return back()->with('errors', 'Could not upload passport, please Try again');
           }
           

        }

        $user = User::find($user->id);
        $user->passport = is_null($request->photo) ? $user->passport : $getimagename; 
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->dob = $request->dob;
        $user->marital_status = $request->marital_status;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->address = $request->address;

        $user->save();

        //return redirect
        return redirect()->back()->with('success', 'Profile Updated Successfully');
        
    }
}
