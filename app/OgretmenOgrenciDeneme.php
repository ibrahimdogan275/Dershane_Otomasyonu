<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OgretmenOgrenciDeneme extends Model
{
    protected $fillable=[
      'ogrenci_id','ogretmen_id','deneme_id','created_at','updated_at'
    ];
    protected $table="ogretmen_ogrenci_deneme";
}
