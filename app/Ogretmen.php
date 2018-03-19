<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ogretmen extends Model
{
    protected $fillable=[
      'ogrenci_id','ogretmen_id','created_at','updated_at'
    ];
    protected $table="ogretmen_ogrenci";
}
