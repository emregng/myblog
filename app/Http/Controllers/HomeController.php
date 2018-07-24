<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Makalem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makaleler = Makalem::where("durum",1)->orderBy("created_at","desc")->paginate(10);

        return view('anasayfa',compact('makaleler'));
    }
}
