<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table='teacher';
  public $primaryKey='teacherid';
  public $timestamps=false;
}
