<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookday extends Model
{
    protected $table = 'bookday';
    public $primaryKey = 'bookdayid';
    public $timestamps = false;
}
