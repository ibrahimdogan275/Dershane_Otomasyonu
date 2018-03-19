<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ders extends Model
{
    protected $fillable=[
      'ptesi','sali','carsamba','persembe','cuma','ctesi','updated_at','created_at'
    ];
    protected $table="dersprogrami";
}
