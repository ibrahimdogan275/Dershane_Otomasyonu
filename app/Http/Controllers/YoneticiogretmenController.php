<?php

namespace App\Http\Controllers;
use DB;
use App\YoneticiOgretmen;
use Illuminate\Http\Request;
use App\Ogrenci;
use Validator;
class YoneticiogretmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ogretmenListele=DB::table("personel")->get();
        return view("Yonetici.OgretmenListele",["ogretmenListele"=>$ogretmenListele]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $yoneticiListele=DB::table('yonetici')->get();

        return view("Yonetici.YeniPersonelKayit",["yoneticiListele"=>$yoneticiListele]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kulaniciVarmi=DB::table("personel")->where("kulaniciadi",$request->kulaniciadi)->get();
        $tcVarmi=DB::table("personel")->where("tc",$request->tc)->get();
        if($kulaniciVarmi!="[]"){
            return redirect('ogretmenekle/create');
        }
        if($tcVarmi!="[]"){
            return redirect('ogretmenekle/create');
        }

        $validator =  Validator::make($request->all(), [
            'tc' => 'required|numeric|digits:11',
            'adi' => 'required',
            'soyadi' => 'required',
            'kulaniciadi' => 'required',
            'telefon' => 'required|numeric|digits:11',
            'sifre' => 'required|min:6',
            'adres' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('ogretmenekle/create')
                ->withErrors($validator)
                ->withInput();
        }



      $kaydet=new YoneticiOgretmen();
        $kaydet->tc=$request->tc;
        $kaydet->adi=$request->adi;
        $kaydet->kulaniciadi=$request->kulaniciadi;
        $kaydet->soyadi=$request->soyadi;
        $kaydet->adres=$request->adres;
        $kaydet->telefon=$request->telefon;
        $kaydet->brans=$request->brans;
        $kaydet->maas=$request->maas;
        $kaydet->sifre=$request->sifre;
        $kaydet->yonetici_id=$request->yonetici_id;
        $kaydet->save();

        $sonidbulma=DB::table("personel")->get();
        foreach ($sonidbulma as $id){
            $sid=$id->id;
        }


        $ogretmendersiliski=new Ogrenci();
        $ogretmendersiliski->ogretmen_id=$sid;
        $ogretmendersiliski->dersadi=$request->brans;
        $ogretmendersiliski->save();

        return redirect("ogretmenekle");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\YoneticiOgretmen  $yoneticiOgretmen
     * @return \Illuminate\Http\Response
     */
    public function show(YoneticiOgretmen $yoneticiOgretmen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\YoneticiOgretmen  $yoneticiOgretmen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yoneticiListele=DB::table('yonetici')->get();
        $ogretmenListele=YoneticiOgretmen::find($id);
        return view("Yonetici.YeniPersonelKayit",["ogretmenListele"=>$ogretmenListele,"yoneticiListele"=>$yoneticiListele]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\YoneticiOgretmen  $yoneticiOgretmen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $validator =  Validator::make($request->all(), [
            'tc' => 'required|numeric|digits:11',
            'adi' => 'required',
            'soyadi' => 'required',
            'kulaniciadi' => 'required',
            'telefon' => 'required|numeric|digits:11',
            'sifre' => 'required|min:6',
            'adres' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('ogretmenekle/create')
                ->withErrors($validator)
                ->withInput();
        }

        $guncelle=YoneticiOgretmen::find($id);

        $guncelle->tc=$request->tc;
        $guncelle->adi=$request->adi;
        $guncelle->kulaniciadi=$request->kulaniciadi;
        $guncelle->soyadi=$request->soyadi;
        $guncelle->adres=$request->adres;
        $guncelle->telefon=$request->telefon;
        $guncelle->brans=$request->brans;
        $guncelle->maas=$request->maas;
        $guncelle->sifre=$request->sifre;
        $guncelle->yonetici_id=$request->yonetici_id;

        $guncelle->save();
        return redirect("ogretmenekle");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\YoneticiOgretmen  $yoneticiOgretmen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $sil=YoneticiOgretmen::find($id);
         $sil->delete();
         return redirect("ogretmenekle");
    }
}
