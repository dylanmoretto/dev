<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletter';


    public static function getAll()
    {
        return Newsletter::all();
    }

}

