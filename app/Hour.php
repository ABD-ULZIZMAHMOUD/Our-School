<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hour extends Model
{
    protected $table = 'hour';
    public $primaryKey = 'hourid';
    public $timestamps = false;
}
