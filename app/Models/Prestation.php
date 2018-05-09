<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    protected $table = 'prestation';

    public static function getAllPrestation()
    {
        return Prestation::all();
    }

    public static function getPrestationById($family)
    {
        return Prestation::where('id', '=', $family)->get();
    }

    public static function getPrestationByFamId($family)
    {
        return Prestation::where('family', '=', $family)->get();
    }
}
