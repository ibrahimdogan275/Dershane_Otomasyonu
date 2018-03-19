<?php

namespace App\Http\Controllers;
use App\Deneme;
use App\Ogrenci;
use App\YoneticiOgrenci;
use DB;
use App\Ogretmen;
use Illuminate\Http\Request;

class OgretmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Ogretmen  $ogretmen
     * @return \Illuminate\Http\Response
     */
    public function show(Ogretmen $ogretmen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ogretmen  $ogretmen
     * @return \Illuminate\Http\Response
     */
    public function edit(Ogretmen $ogretmen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ogretmen  $ogretmen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ogretmen $ogretmen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ogretmen  $ogretmen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ogretmen $ogretmen)
    {
        //
    }

    public function bilgi(Request $request){


        $ogretmenbilgi=DB::table("personel")->where('id',$request->id)->get();


       return view("Ogretmen.OgretmenGenelBilgi",["ogretmenBilgi"=>$ogretmenbilgi]);
    }

    public function deneme(Request $request){


        $denemeNotlari=DB::table("ogrenci_deneme")->get();
       return view("Ogretmen.OgrencilerinDenemeNotlari",["denemeNotlari"=>$denemeNotlari]);
    }

    public function ogrencilerim(Request $request){


        $ogrenciListem=DB::table("ogrenci")->where('personel_id',$request->id)->get();


        return view("Ogretmen.OgrencilerimListele",["ogrenciListem"=>$ogrenciListem]);
    }

    public function dersprogrami(Request $request)
    {

        $dersProgrami=DB::table("dersprogrami")->get();
        return view("Ders.DersProgramiListele",["dersProgrami"=>$dersProgrami]);
    }

}
