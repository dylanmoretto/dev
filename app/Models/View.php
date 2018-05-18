<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Providers\IpProvider;



class View extends Model
{
    protected $table = 'view';


    public static function saveView($page)
    {           
		$insert = new View;
        $insert->ip = IpProvider::getIpAdress();
        $insert->page = $page;
        $insert->save();
    }


    public static function getCountViewToday()
    {
    	return View::where('created_at', 'like', date('Y-m-d') . '%')->count();
    }


    public static function getCountViewWeek()
    {
    	$date = date("Y-m-d");
    	$date = date('Y-m-d',strtotime(date("Y-m-d", strtotime($date)) . " -7 day"));

		return View::where('created_at', '>=', $date . '%')->count();    
    }


    public static function getCountViewMonth()
    {
    	return View::where('created_at', 'like', date('Y-m') . '%')->count();
    }
}
