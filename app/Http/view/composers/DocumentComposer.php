<?php

namespace App\Http\View\Composers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

   

class DocumentComposer{
  

    public function compose(View $view){
       

        //get user id by session
        $userId = Session('user')->id;

        //find user
        $documents = User::find($userId)->documents()->paginate(4);
  
        //pass to view
        $view->with('documents', $documents);
    }
}


?>
