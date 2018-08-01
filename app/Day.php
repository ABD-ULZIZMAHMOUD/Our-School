<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    protected $table = 'day';
    public $primaryKey = 'dayid';
    public $timestamps = false;
}
