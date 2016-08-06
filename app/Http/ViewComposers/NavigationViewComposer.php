<?php



namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NavigationViewComposer
{

    public function compose(View $view)
    {
        if(!Auth::check()){
            return;
        }

        $view->with('messages',Auth::user()->messages()->get());
       // $view->with('messages_count',Auth::user()->messages()->count());
    }

}