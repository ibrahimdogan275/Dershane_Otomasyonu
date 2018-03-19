<?php

namespace App\Http\Controllers;
use DB;
use App\Genel;
use Illuminate\Http\Request;

class GenelbilgiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calisanListe=DB::table("personel")->get();
        $okuyon=DB::table("ogrenci")->get();
        $toplamGelir=0;
        $toplamGider=0;
        $ogrenciSayisi=0;
        $calisanSayisi=0;
        foreach ($calisanListe as $maas){
           $toplamGelir+=$maas->maas;
           $calisanSayisi++;
        }
        foreach ($okuyon as $ogrenci){
            $toplamGider+=2000;
            $ogrenciSayisi++;
        }

        return view("GenelBilgi.GenelBilgi",["toplamGelir"=>$toplamGelir,"ogrenciSayisi"=>$ogrenciSayisi,"toplamGider"=>$toplamGider,"calisanSayisi"=>$calisanSayisi]);
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
     * @param  \App\Genel  $genel
     * @return \Illuminate\Http\Response
     */
    public function show(Genel $genel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Genel  $genel
     * @return \Illuminate\Http\Response
     */
    public function edit(Genel $genel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Genel  $genel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genel $genel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Genel  $genel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genel $genel)
    {
        //
    }
}
