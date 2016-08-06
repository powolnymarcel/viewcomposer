<?php

namespace App\Providers;

use App\Http\ViewComposers\NavigationViewComposer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
     //   if (Auth::user()){
     //       view()->composer('layouts.nav',function($view){
     //           $view->with('messages', \Auth::user()->messages()->get());
     //       });
     //   }
     //  else{}

        view()->composer('layouts.nav',NavigationViewComposer::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
