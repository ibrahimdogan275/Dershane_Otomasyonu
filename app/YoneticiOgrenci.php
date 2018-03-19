<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YoneticiOgrenci extends Model
{
    protected $fillable=[
        'alan','tc','adi','soyadi','kulaniciadi','personel_id','sifre','alan','telefon','adres','updated_at','created_at'
    ];
    protected $table="ogrenci";
}
