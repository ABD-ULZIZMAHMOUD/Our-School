<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  protected $table='education';
  public $primaryKey='educationid';
  public $timestamps=false;
}
