<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deneme extends Model
{
    protected $fillable=[
        'yayin','yapilacak_tarih','updated_at','created_at'
        ];
    protected $table="deneme";
}
