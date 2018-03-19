<?php

namespace App\Http\Controllers;
use Validator;
use App\Ders;

use DB;

use App\Yonetici;
use Illuminate\Http\Request;

class YoneticiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $yoneticiListe=DB::table("yonetici")->get();
        return view("Yonetici.YoneticiListele",["yoneticiListe"=>$yoneticiListe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Yonetici.YoneticiEkle");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kulaniciVarmi=DB::table("yonetici")->where("kulaniciadi",$request->kulaniciadi)->get();
        if($kulaniciVarmi!="[]"){
            return redirect('yonetici/create');
        }


        $validator =  Validator::make($request->all(), [
            'adi' => 'required',
            'soyadi' => 'required',
            'kulaniciadi' => 'required',
            'sifre' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('yonetici/create')
                ->withErrors($validator)
                ->withInput();
        }


        $kaydet=new Yonetici();
        $kaydet->adi=$request->adi;
        $kaydet->kulaniciadi=$request->kulaniciadi;
        $kaydet->soyadi=$request->soyadi;
        $kaydet->sifre=$request->sifre;
        $kaydet->save();





        return redirect("yonetici");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Yonetici  $yonetici
     * @return \Illuminate\Http\Response
     */
    public function show(Yonetici $yonetici)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Yonetici  $yonetici
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yoneticiListe=Yonetici::find($id);
        return view("Yonetici.YoneticiEkle",["yoneticiListe"=>$yoneticiListe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Yonetici  $yonetici
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $validator =  Validator::make($request->all(), [
            'adi' => 'required',
            'soyadi' => 'required',
            'kulaniciadi' => 'required',
            'sifre' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('yonetici/create')
                ->withErrors($validator)
                ->withInput();
        }



        $kaydet=Yonetici::find($id);
        $kaydet->adi=$request->adi;
        $kaydet->kulaniciadi=$request->kulaniciadi;
        $kaydet->soyadi=$request->soyadi;
        $kaydet->sifre=$request->sifre;
        $kaydet->save();
        return redirect("yonetici");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Yonetici  $yonetici
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $sil=Yonetici::find($id);
      $sil->delete();
      return redirect("yonetici");
    }

    public function dersprogramiekle(Request $request){

        $id=1;
        for($saat=8;$saat<16;$saat++){
            $kaydet=Ders::find($id);
             $gun=0;
            $birlastir=$gun.$saat;

            $kaydet->ptesi=$request->$birlastir;
            $gun=1;
            $birlastir=$gun.$saat;
            $kaydet->sali=$request->$birlastir;
            $gun=2;
            $birlastir=$gun.$saat;
            $kaydet->carsamba=$request->$birlastir;
            $gun=3;
            $birlastir=$gun.$saat;
            $kaydet->persembe=$request->$birlastir;
            $gun=4;
            $birlastir=$gun.$saat;
            $kaydet->cuma=$request->$birlastir;
            $gun=5;
            $birlastir=$gun.$saat;
            $kaydet->ctesi=$request->$birlastir;

            $kaydet->save();
            $id++;

        }
        return redirect("ders");
    }
    public function dersprogramiolustur(){

        $dersListele=DB::table("ogretmen_ders")->get();
        



         return view("Ders.DersProgramiEkle",["dersListele"=>$dersListele]);
    }


}
