<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ogrenci extends Model
{
     protected $fillable=[
       'ogretmen_id','dersadi','updated','created'
     ];
     protected $table="ogretmen_ders";
}
