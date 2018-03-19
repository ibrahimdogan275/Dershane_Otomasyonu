<?php

namespace App\Http\Controllers;
use DB;
use App\Deneme;
use Illuminate\Http\Request;

class DenemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $denemeListele=DB::table('deneme')->get();
      return view("Deneme.DenemeListele",["denemeListele"=>$denemeListele]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view("Deneme.DenemeEkle");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $ekle=new Deneme();
            $ekle->yayin=$request->yayin;
        $ekle->yapilacak_tarih=$request->yapilacak_tarih;
        $ekle->save();

        return redirect("denemegir");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Deneme  $deneme
     * @return \Illuminate\Http\Response
     */
    public function show(Deneme $deneme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Deneme  $deneme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $denemeListele=Deneme::find($id);
        return view("Deneme.DenemeEkle",["denemeListele"=>$denemeListele]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Deneme  $deneme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deneme $deneme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Deneme  $deneme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sil=Deneme::find($id);
        $sil->delete();
        return redirect("denemegir");
    }
}
