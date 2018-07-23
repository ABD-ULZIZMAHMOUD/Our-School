<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;
class AddressController extends Controller
{

  public function store(Request $request)
  {
    //  return 1;
      $address = new Address();
      //
    $flag=  $address->addAddress($request['flatnum'],$request['bulidingnum'],$request['street'],
      $request['region'],$request['governorate'],$request['country']);

        return view ("show_Address")->with('success-msg', 'تم التسجيل بنجاح');



  }
}
