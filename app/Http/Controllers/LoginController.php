<?php

namespace App\Http\Controllers;
use App\Ogrenci;
use App\YoneticiOgrenci;
use DB;
use App\YoneticiOgretmen;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
echo "okfda";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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

       $kullanici=$request->yoneticiadi;
        $sifre=$request->yoneticisifre;

        $varmi=DB::table("yonetici")->where('kulaniciadi',$kullanici )->get();
        $varmi2=DB::table("yonetici")->where('sifre',$sifre)->get();



        if($varmi!='[]' and $varmi2!='[]'){


         return redirect('panel');
        }
        else{

     return   view('Login.YoneticiGiris',['varmi'=>"yok"]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {

    }

    public function ogretmen(Request $request){
        $kullanici=$request->ogretmenadi;
        $sifre=$request->ogretmensifre;

        $varmi=DB::table("personel")->where('kulaniciadi',$kullanici )->get();
        $varmi2=DB::table("personel")->where('sifre',$sifre)->get();
        $id=DB::table("personel")->where('kulaniciadi',$kullanici)->pluck('id');

            $ogretmenadi=YoneticiOgretmen::find($id);


        if($varmi!='[]' and $varmi2!='[]'){


            return view('Ogretmen.OgretmenAnasayfa',["ogretmenadi"=>$ogretmenadi]);
        }
        else{

            return   view('Login.OgretmenGiris',['varmi'=>"yok"]);
        }
    }

    public function ogrenci(Request $request){

        $kullanici=$request->ogrenciadi;
        $sifre=$request->ogrencisifre;

        $varmi=DB::table("ogrenci")->where('kulaniciadi',$kullanici )->get();
        $ogrenciadi=DB::table("ogrenci")->where('sifre',$sifre)->get();


        $id=DB::table("ogrenci")->where('kulaniciadi',$kullanici)->pluck('id');

        $ogrenciadi=YoneticiOgrenci::find($id);


        if($varmi!='[]' and $ogrenciadi!='[]'){


            return view('Ogrenci.OgrenciAnasayfa',['ogrenciadi'=>$ogrenciadi]);
        }
        else{

            return   view('Login.OgrenciGiris',['varmi'=>"yok"]);
        }
    }

}
