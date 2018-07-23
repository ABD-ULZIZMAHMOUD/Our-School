<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  protected $table='course';
  public $primaryKey='coureid';
  public $timestamps=false;
}
