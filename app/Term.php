<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table='term';
    public $primaryKey='id';
    public $timestamps=false;
}
