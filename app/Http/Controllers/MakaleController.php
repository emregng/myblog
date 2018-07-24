<?php

namespace App\Http\Controllers;

use App\Makalem;
use Illuminate\Http\Request;

use App\Http\Requests;

class MakaleController extends Controller
{
    //
    public  function index($slug)
    {
        $makale = Makalem::where("slug",$slug)->first();
        return view("makale",compact('makale'));
    }
}
