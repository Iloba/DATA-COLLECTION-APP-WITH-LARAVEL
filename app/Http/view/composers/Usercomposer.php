<?php

namespace App\Http\View\Composers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

   

class UserComposer{
  

    public function compose(View $view){
       

        //get user id by session
        $userId = Session('user')->id;

        //find user
        $user = User::find($userId);
  
        //pass to view
        $view->with('user', $user);
    }
}


?>
