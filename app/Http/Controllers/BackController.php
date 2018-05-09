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



class BackController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index ()
    {
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
