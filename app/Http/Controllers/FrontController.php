<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Cart;
use App\Models\Family;
use App\Models\Prestation;
use Illuminate\Http\Requests;



class FrontController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        $family = Family::getAllFamily();
        $prestation = Prestation::getAllPrestation();
        return view ("front/index",array(
            'family' => $family,
            'presta' => $prestation,
            'cart' =>  Cart::total(),
            'content' => Cart::content(),
        ));
    }


    public function showCategory($id)
    {
        $prestation = Prestation::getPrestationByFamId($id);

        return view ("front/popup");
    }


    public function showPanier()
    {
        return view  ('front/panier',array(
            'content' => Cart::content(),
        ));
    }
}
