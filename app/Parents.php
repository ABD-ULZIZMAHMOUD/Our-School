<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $table='parent';
    public $primaryKey='parentid';
    public $timestamps=false;
}
