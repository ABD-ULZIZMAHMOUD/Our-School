<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booked extends Model
{
    protected $table='booked';
    public $primaryKey='bookedid';
    public $timestamps=false;
}
