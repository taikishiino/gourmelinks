<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gourmet;

class GourmetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gourmets = Gourmet::latest()->get();
        return view('gourmets.index', ['gourmets' => $gourmets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gourmets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gourmet = new Gourmet;
        $gourmet->gourmet_name = $request->gourmet_name;
        $gourmet->price = $request->price;
        $gourmet->restaurant_name = $request->restaurant_name;
        $gourmet->reporter_id = rand(1, 2);
        $gourmet->save();
        return redirect('gourmets/'.$gourmet->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gourmet $gourmet)
    {
        return view('gourmets.show', ['gourmet' => $gourmet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gourmet $gourmets)
    {
        return view('gourmets.edit', ['gourmets' => $gourmets]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gourmet $gourmets)
    {
        $gourmet->gourmet_name = $request->gourmet_name;
        $gourmet->price = $request->price;
        $gourmet->restaurant_name = $request->restaurant_name;
        $gourmet->save();
        return redirect('gourmets/'.$gourmet->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
