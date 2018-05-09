<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = 'family';


    public static function getAllFamily()
    {
        return Family::all();
    }


    public static function getFamilyById($familyId)
    {
        return  $model = Family::where('id', '=', $familyId)->get();
    }
}
