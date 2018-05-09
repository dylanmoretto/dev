<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Models\Family;
use App\Models\Prestation; 
use Cart;



class CartController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function add(Request $request)
    {
        $typeP = $request->typeP;
        if ($typeP == 'presta') {
            $article = Prestation::getPrestationById($request->id);
        }

        foreach ($article as $art) {
            Cart::add($art->id, $art->designation, 1, $art->price);
        }

        return Cart::total(). ' TTC';
    }
}
