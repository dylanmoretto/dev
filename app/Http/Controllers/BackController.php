<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\Family;
use App\Models\Prestation;
use Cart;
use App\Http\Requests;
use Mail;



class BackController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index ()
    {
        /*$data = array();

        Mail::send('test', $data, function ($message) {
            $message->from('us@example.com', 'Laravel');

            $message->to('foo@example.com');
        });
*/
        $data = array('mess' => 'test', 'email' => 'test',);

        $sujet = 'sujet';

        Mail::send('test', $data, function ($message) use ($sujet) {
            $message->to('dylan.moretto06@gmail.com')->subject($sujet);
        });

        return view ('back.index');
    }


    public function newsletter ()
    {
        $client = Newsletter::getAll();
        return view ('back.newsletter', array(
            'clients' =>$client
        ));
    }
}
