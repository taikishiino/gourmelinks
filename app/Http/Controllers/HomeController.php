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
    public function regist()
    {
        return view('auth/regist');
    }
    public function new(Request $request)
    {
        $reporter = new Reporter;
        $reporter->accountId = $request->accountId;
        $reporter->name = '';
        $reporter->twitter = '';
        $reporter->instagram = '';
        $reporter->facebook = '';
        $reporter->comment = '';
        $reporter->save();
        return redirect('reporters/'.$reporter->accountId);
    }
    public function login()
    {
        return view('auth/login');
    }
}
