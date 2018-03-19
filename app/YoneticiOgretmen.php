<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class YoneticiOgretmen extends Model
{
    protected  $fillable=[
        'tc','kulaniciadi','sifre','brans','yonetici_id','maas','adi','soyadi','adres','telefon','updated_at','created_at'
    ];
    protected $table="personel";
}
