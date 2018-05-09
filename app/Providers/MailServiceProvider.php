<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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

    public function sendmail($to, $sujet, $view, $data)
    {
        $data = array('mess' => 'test', 'email' => 'test',);
        $sujet = 'sujet';

        Mail::send('test', $data, function ($message) use ($sujet) {
            $message->to('dylan.moretto06@gmail.com')->subject($sujet);
        });
    }
}
