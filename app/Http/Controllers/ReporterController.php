<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reporter;

class ReporterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reporters = Reporter::latest()->get();
        return view('reporters.index', ['reporters' => $reporters]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reporters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reporter = new Reporter;
        $reporter->name = $request->name;
        $reporter->twitter = $request->twitter;
        $reporter->instagram = $request->instagram;
        $reporter->facebook = $request->facebook;
        $reporter->comment = $request->comment;
        $reporter->save();
        return redirect('reporters/'.$reporter->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Reporter $reporter)
    {
        return view('reporters.show', ['reporter' => $reporter]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporter $reporter)
    {
        return view('reporters.edit', ['reporter' => $reporter]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporter $reporter)
    {
        $reporter->name = $request->name;
        $reporter->twitter = $request->twitter;
        $reporter->instagram = $request->instagram;
        $reporter->facebook = $request->facebook;
        $reporter->comment = $request->comment;
        $reporter->save();
        return redirect('reporters/'.$reporter->id);
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
