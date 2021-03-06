<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Makalem;
use Illuminate\Http\Request;

use App\Http\Requests;

class KategoriController extends Controller
{
    //
    public function index($slug)
    {
        $kategori = Kategori::where("slug",$slug)->first();
        $makaleler = Makalem::where("kategori_id",$kategori->id)->where("durum",1)->paginate(10);
        return view("kategori",compact('kategori','makaleler'));
    }
}
