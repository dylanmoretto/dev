<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13/04/2018
 * Time: 13:11
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Models\Family;
use App\Models\Prestation;
//use Illuminate\Http\Request;
use App\Providers\NewsletterProvider;
use App\Models\Newsletter;
use Request;
use App\Providers\IpProvider;
use App\Models\View;


/*
 * Avant chaque return on insert dans la DB view
 *
 *  View::saveView($page);
 */


class WebsiteController extends Controller
{
    public function index()
    {
        View::saveView("index");

        return view ('website/index');
    }


    public function contact()
    {
        View::saveView("contact");

        return view ('website/contact');
    }


    public function showTarif()
    {
    	$family = Family::getAllFamily();
    	$presta = Prestation::getAllPrestation();
        View::saveView("tarif");

        return view ('website/tarif', array (
        	'family' => $family,
        	'presta' => $presta,
        ));
    }


    public function contactForm(Request $request)
    {
    	$name = $request->input('name');
    	$mail = $request->input('mail');
    	$object = $request->input('object');
    	$text = $request->input('text');

        View::saveView("contact");

        return view ('website/contact', array(
        	'alert' => 'ok',
        ));
    }


    public function whoAre()
    {
        View::saveView("who");

        return view ('website/who');
    }


    public function addToNewsletter(Request $request)
    {
       $return =  NewsletterProvider::saveMail($request->mail);
       return view ('website.block.adress', array(
           'result' => $return,
       ));
    }


    public function Unsubscribe ($token)
    {
        if ('1' == Newsletter::getByToken($token)){
            Newsletter::UnsubscribeByToken($token);
            return view ('mailing.unsubscribe');
        } else {
            return redirect()->route('index');
        }
    }
}
