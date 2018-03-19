<?php

namespace App\Http\Controllers;
use DB;
use App\Ogrenci;
use Illuminate\Http\Request;

class OgrenciController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Yonetici.YeniOgrenciKayit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kaydet=new Ogrenci();
        $kaydet->tc=$request->tc;
        $kaydet->adi=$request->adi;
        $kaydet->kulaniciadi=$request->kulaniciadi;
        $kaydet->soyadi=$request->soyadi;
        $kaydet->adres=$request->adres;
        $kaydet->telefon=$request->telefon;
        $kaydet->alan=$request->alan;
        $kaydet->sifre=$request->sifre;
        $kaydet->save();
        return redirect("ogretmenekle");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function show(Ogrenci $ogrenci)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ogrenciListele=Ogrenci::find($id);
        return view("Yonetici.YeniOgrenciKayit",["ogrenciListele"=>$ogrenciListele]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function bilgi(Request $request){


       $ogrencibilgi=DB::table("ogrenci")->where('id',$request->id)->get();


       return view("Ogrenci.OgrenciGenelBilgi",["ogrenciBilgi"=>$ogrencibilgi]);
    }

    public function deneme(Request $request){

        $denemeBilgi=DB::table("ogrenci_deneme")->where('ogrenci_id',$request->id)->get();


     return view("Ogrenci.DenemeNotuListele",["denemeBilgi"=>$denemeBilgi]);
    }


    public function dersprogrami(Request $request)
    {

       $dersProgrami=DB::table("dersprogrami")->get();
        return view("Ders.DersProgramiListele",["dersProgrami"=>$dersProgrami]);

    }

}
