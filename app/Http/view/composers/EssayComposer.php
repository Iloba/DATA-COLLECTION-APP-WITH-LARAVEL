<?php

namespace App\Http\View\Composers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

   

class EssayComposer{
  

    public function compose(View $view){
       

        //get user id by session
        $userId = Session('user')->id;

        //find user
        $essay = User::find($userId)->essay;
  
        //pass to view
        $view->with('essay', $essay);
    }
}


?>
