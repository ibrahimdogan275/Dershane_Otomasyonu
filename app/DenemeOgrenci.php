<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DenemeOgrenci extends Model
{
  protected $fillable=[
  'ogrenci_id','deneme_id','puan','created_at','updated_at'
];
  protected $table="ogrenci_deneme";
}
