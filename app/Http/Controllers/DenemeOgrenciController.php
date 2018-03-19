<?php

namespace App\Http\Controllers;
use App\OgretmenOgrenciDeneme;
use DB;
use App\DenemeOgrenci;
use App\YoneticiOgretmen;

use Illuminate\Http\Request;

class DenemeOgrenciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $denemeNotuListele=DB::table('ogrenci_deneme')->get();
        return view("Yonetici.DenemeNotuListele",["denemeNotuListele"=>$denemeNotuListele]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $ekle=new DenemeOgrenci();
       $ekle->ogrenci_id=$request->ogrenci_id;
       $ekle->deneme_id=$request->deneme_id;
        $ekle->puan=$request->puan;
       $ekle->save();
        $ogretmen_id=$request->ogretmen_id;
       $ogretmenogrencidenemeiliskiekle=new OgretmenOgrenciDeneme();
       $ogretmenogrencidenemeiliskiekle->ogretmen_id=$ogretmen_id;
        $ogretmenogrencidenemeiliskiekle->deneme_id=$request->deneme_id;
       $ogretmenogrencidenemeiliskiekle->ogrenci_id=$request->ogrenci_id;

  $ogretmenogrencidenemeiliskiekle->save();




        $ogrenciListele=DB::table("ogrenci")->get();
        $denemeListele=DB::table("deneme")->get();
        return view("Ogretmen.DenemeNotuGir",["ogrenciListele"=>$ogrenciListele,"denemeListele"=>$denemeListele,"ogretmen_id"=>$ogretmen_id]);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DenemeOgrenci  $denemeOgrenci
     * @return \Illuminate\Http\Response
     */
    public function show(DenemeOgrenci $denemeOgrenci)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DenemeOgrenci  $denemeOgrenci
     * @return \Illuminate\Http\Response
     */
    public function edit(DenemeOgrenci $denemeOgrenci)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DenemeOgrenci  $denemeOgrenci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DenemeOgrenci $denemeOgrenci)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DenemeOgrenci  $denemeOgrenci
     * @return \Illuminate\Http\Response
     */
    public function destroy(DenemeOgrenci $denemeOgrenci)
    {
        //
    }

    public function yedekcreat(Request $request){

         $ogretmen_id=$request->id;
        $ogrenciListele=DB::table("ogrenci")->get();
        $denemeListele=DB::table("deneme")->get();
        return view("Ogretmen.DenemeNotuGir",["ogrenciListele"=>$ogrenciListele,"denemeListele"=>$denemeListele,"ogretmen_id"=>$ogretmen_id]);






    }

}
