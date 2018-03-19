<?php

namespace App\Http\Controllers;
use DB;
use App\Ders;
use Illuminate\Http\Request;

class DersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dersProgrami=DB::table("dersprogrami")->get();
        return view("Ders.DersProgramiListele",["dersProgrami"=>$dersProgrami]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ders  $ders
     * @return \Illuminate\Http\Response
     */
    public function show(Ders $ders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ders  $ders
     * @return \Illuminate\Http\Response
     */
    public function edit(Ders $ders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ders  $ders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ders $ders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ders  $ders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ders $ders)
    {
        //
    }
}
