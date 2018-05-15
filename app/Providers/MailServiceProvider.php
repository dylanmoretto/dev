<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
Use Mail;

class MailServiceProvider extends ServiceProvider
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

    public static function sendmail($to, $sujet, $view, $data)
    {
        $data = array('mess' => 'test', 'email' => 'test',);
        $sujet = 'sujet';

        Mail::send($view, $data, function ($message) use ($sujet) {
            $message->to('dylan.moretto06@gmail.com')->subject($sujet);
        });
    }
}
