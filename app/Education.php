<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  protected $table='education';
  public $primaryKey='educationid';
  public $timestamps=false;

	//year	type
    public function addAddress( $typeofstudy,$year,$typeofeducation ){


        $education= new Education();


        $json = array("status"=>"success");
        return $json;

    }
}
