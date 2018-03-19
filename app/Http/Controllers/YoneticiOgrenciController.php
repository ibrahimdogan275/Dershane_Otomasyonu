<?php

namespace App\Http\Controllers;
use App\Ogretmen;
use DB;
use App\YoneticiOgrenci;
use Illuminate\Http\Request;
use Validator;
class YoneticiOgrenciController extends Controller
{ /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        $ogrenciListele=DB::table("ogrenci")->get();
        return view("Yonetici.OgrenciListele",["ogrenciListele"=>$ogrenciListele]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sorumluOgretmen=DB::table('personel')->get();
        return view("Yonetici.YeniOgrenciKayit",["sorumluOgretmen"=>$sorumluOgretmen]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $kulaniciVarmi=DB::table("ogrenci")->where("kulaniciadi",$request->kulaniciadi)->get();
          $tcVarmi=DB::table("ogrenci")->where("tc",$request->tc)->get();
          if($kulaniciVarmi!="[]"){
              return redirect('ogrenci/create');
          }
        if($tcVarmi!="[]"){
            return redirect('ogrenci/create');
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
            return redirect('yonetici/create')
                ->withErrors($validator)
                ->withInput();
        }



        $kaydet=new YoneticiOgrenci();
        $kaydet->tc=$request->tc;
        $kaydet->adi=$request->adi;
        $kaydet->kulaniciadi=$request->kulaniciadi;
        $kaydet->soyadi=$request->soyadi;
        $kaydet->adres=$request->adres;
        $kaydet->telefon=$request->telefon;
        $kaydet->alan=$request->alan;
        $kaydet->sifre=$request->sifre;
        $kaydet->personel_id=$request->personel_id;
       $kaydet->save();


        $liste=DB::table("ogrenci")->get();
        $sayac=0;

        foreach ($liste as $item){
            $sayac=$item->id;
        }
        $iliskiKaydet=new Ogretmen();
        $iliskiKaydet->ogretmen_id=$request->personel_id;
        $iliskiKaydet->ogrenci_id=$sayac;
        $iliskiKaydet->save();

       return redirect("ogrenci");
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
    { $sorumluOgretmen=DB::table('personel')->get();
        $ogrenciListele=YoneticiOgrenci::find($id);
        return view("Yonetici.YeniOgrenciKayit",["ogrenciListele"=>$ogrenciListele,"sorumluOgretmen"=>$sorumluOgretmen]);
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
            return redirect('ogrenci/create')
                ->withErrors($validator)
                ->withInput();
        }

        $guncelle=YoneticiOgrenci::find($id);
        $guncelle->tc=$request->tc;
        $guncelle->adi=$request->adi;
        $guncelle->kulaniciadi=$request->kulaniciadi;
        $guncelle->soyadi=$request->soyadi;
        $guncelle->adres=$request->adres;
        $guncelle->telefon=$request->telefon;
        $guncelle->alan=$request->alan;
        $guncelle->sifre=$request->sifre;
        $guncelle->personel_id=$request->personel_id;
        $guncelle->save();
        return redirect("ogrenci");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ogrenci  $ogrenci
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sil=YoneticiOgrenci::find($id);
        $sil->delete();
        return redirect("ogrenci");
    }
}
