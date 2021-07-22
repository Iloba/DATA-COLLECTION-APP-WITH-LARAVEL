<?php

namespace App\Http\View\Composers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

   

class EducationComposer{
  

    public function compose(View $view){
       

        //get user id by session
        $userId = Session('user')->id;

        //find user
        $education = User::find($userId)->educations()->orderBy('updated_at')->paginate(3);
  
        //pass to view
        $view->with('education', $education);
    }
}


?>
