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
use Illuminate\Http\Request;
use App\Providers\NewsletterProvider;



class WebsiteController extends Controller
{
    public function index()
    {
        return view ('website/index');
    }


    public function contact()
    {
        return view ('website/contact');
    }


    public function showTarif()
    {
    	$family = Family::getAllFamily();
    	$presta = Prestation::getAllPrestation();

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
    	$text = $request->input('text');var_dump($text);die;

        return view ('website/contact', array(
        	'alert' => 'ok',
        ));
    }


    public function whoAre()
    {
        return view ('website/who');
    }


    public function addToNewsletter(Request $request)
    {
       $return =  NewsletterProvider::saveMail($request->mail);
       return view ('website.block.adress', array(
           'result' => $return,
       ));
    }
}