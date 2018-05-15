<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Newsletter;
use Config;
use App\Providers\MailServiceProvider;

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
        // insert if not exist
        $exist = Newsletter::where('mail', '=', $mail)->count();
        if ($exist == 1) {
            return Config::get('constante.error.adress');
        } else {
            $insert = new Newsletter;
            $insert->mail = $mail;
            $insert->active ='1';
            $insert->created_at = date('Y-m-d H:i:s');
            $insert->token = NewsletterProvider::random(25);
            $insert->save();

            //sending mail confirmation to user
            //MailServiceProvider::sendmail($mail, 'Inscription Newsletter', 'mailing.newsletterAdd', array('test' => 'test'));

            //notificate the admin in back office

            return Config::get('constante.confirm.adress');
        }


    }


    public static function random($var){
        $string = "";
        $chaine = "a0b1c2d3e4f5g6h7i8j9klmnpqrstuvwxy123456789";
        srand((double)microtime()*1000000);
        for($i=0; $i<$var; $i++){
            $string .= $chaine[rand()%strlen($chaine)];
        }
        return $string;
    }
 
}


