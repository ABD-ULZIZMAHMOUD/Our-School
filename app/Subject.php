<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subject';
    public $primaryKey='id';
    public $timestamps=false;
}
