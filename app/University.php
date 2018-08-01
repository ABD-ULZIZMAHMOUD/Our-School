<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table='university';
    public $primaryKey='id';
    public $timestamps=false;
}
