<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Mailsetting;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Customisation;
use App\Models\Post;

use Config;

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
        // Paginator::useBootstrap();
        
        // $mailsetting = Mailsetting::first();
        // if($mailsetting){
        //     $data = [
        //         'driver'            => $mailsetting->mail_transport,
        //         'host'              => $mailsetting->mail_host,
        //         'port'              => $mailsetting->mail_port,
        //         'encryption'        => $mailsetting->mail_encryption,
        //         'username'          => $mailsetting->mail_username,
        //         'password'          => $mailsetting->mail_password,
        //         'from'              => [
        //             'address'=>$mailsetting->mail_from,
        //             'name'   => 'Socialist'
        //         ]
        //     ];
        //     Config::set('mail',$data);
        // }


        // View::composer('*', function ($view) {
        //     $theme= Customisation::find(1);
        //     // $text = "hello satish";
        //     // $view->with('text', $text);


        // });

        View::composer('*', function ($view) {
            $themes = Customisation::find(1);
            $view->with('themes', $themes);
         });

         View::composer('single-post', function ($view) {
            $posts = Post::get();
            $view->with('posts', $posts);
         }); 

    }
}
