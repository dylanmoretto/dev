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
use App\Models\View;
use Khill\Lavacharts\Lavacharts;


class BackController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index ()
    {
        $nbViewToday = View::getCountViewToday();

        return view ('back.index', array(
            'nbViewToday' => $nbViewToday,
        ));
    }


    public function newsletter ()
    {
        $client = Newsletter::getAll();
        return view ('back.newsletter', array(
            'clients' =>$client
        ));
    }


    public function stat ()
    {
      /*  $lava = new Lavacharts; // See note below for Laravel
        $finances = $lava->DataTable();
        $finances->addDateColumn('Year')
                 ->addNumberColumn('Sales')
                 ->addNumberColumn('Expenses')
                 ->setDateTimeFormat('Y')
                ->addRow(['2006', 623452])
               ->addRow(['2007', 685034])
               ->addRow(['2008', 716845])
               ->addRow(['2009', 757254])
               ->addRow(['2010', 778034])
               ->addRow(['2011', 792353])
               ->addRow(['2012', 839657])
               ->addRow(['2013', 842367])
               ->addRow(['2014', 873490]);

        $columnchart = $lava->ColumnChart('Finances')
                            ->setOptions(array(
                                'datatable' => $finances,
                                'title' => 'Company Performance',
                                'titleTextStyle' => $lava->TextStyle(array(
                                    'color' => '#eb6b2c',
                                    'fontSize' => 14
                                ))
                            ));
        */
        $nbViewWeek  = View::getCountViewWeek();
        $nbViewToday = View::getCountViewToday();
        $nbViewMonth = View::getCountViewMonth();

        return view ('back.stat', array(
            'nbViewToday' => $nbViewToday,
            'nbViewWeek' => $nbViewWeek,
            'nbViewMonth' => $nbViewMonth,
            //'lava'=>$lava,
        ));
    }
}
