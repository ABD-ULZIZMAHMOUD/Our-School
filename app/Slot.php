<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
  protected $table='slot';
  public $primaryKey='slotid';
  public $timestamps=false;
}
