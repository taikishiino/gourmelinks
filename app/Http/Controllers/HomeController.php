<?php

namespace App\Http\Controllers;

use App\Gourmet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gourmets = Gourmet::latest()->get();
        return view('index', ['gourmets' => $gourmets]);
    }
}
