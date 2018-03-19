<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yonetici extends Model
{
    protected $fillable=[
        'adi','soyadi','kulaniciadi','sifre','updated_at','created_at'
    ];
    protected $table="yonetici";
}
