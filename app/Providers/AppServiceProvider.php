<?php

namespace App\Providers;

use App\category;
use App\Contact;
use App\Footer;
use App\Article;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $A=rand(0,9);
        $B=rand(0,9);
        $c=null;
        $footers=Footer::get();
        $footer=$footers[0];

        $categories=category::get();

        $count=Contact::get()->where('status',0)->count();
//        $cat_all=category::get()->where('id',5);
        view()->share('footer',$footer);
        view()->share('count',$count);
        view()->share('categories',$categories);
        view()->share('A',$A);
        view()->share('B',$B);
//        view()->share('cat_all',$cat_all);



    }
}
