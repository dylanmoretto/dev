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

    public static function getByToken($token)
    {
    	return Newsletter::whereRaw('token = "'. $token .'" and active = 1')->count();
    }


    public static function UnsubscribeByToken($token)
    {
    	return Newsletter::where('token', '=', $token)->update(array(
    		'active' => 0,
    		'desactived_at' => date('Y-m-d H:i:s'),
    	));
    }
}

