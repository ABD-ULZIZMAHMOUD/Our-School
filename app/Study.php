<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    protected $table='study';
    public $primaryKey='studyid';
    public $timestamps=false;
}
