<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  protected $table='address';
  public $primaryKey='addressid';
  public $timestamps=false;

  public function addAddress( $flatnum,	$bulidingnum,	$street,	$region,	$governorate,	$country ){

     $address= new Address();
      $address->flatnum=$flatnum;
	    $address->bulidingnum=$bulidingnum;
    	$address->street=$street;
    	$address->region=$region;
      $address->governorate=$governorate;
      $address->country=$country;
      $address->save();
      $json = array("status"=>"success");
      return $json;

  }
}
