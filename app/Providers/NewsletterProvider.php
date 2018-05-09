<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Newsletter;
use Config;


class NewsletterProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public static function saveMail($mail)
    {
        $exist = Newsletter::where('mail', '=', $mail)->count();
        if ($exist == 1) {
            return Config::get('constante.error.adress');
        } else {
            $insert = new Newsletter;
            $insert->mail = $mail;
            $insert->save();
            return Config::get('constante.confirm.adress');
        }
    }
}


