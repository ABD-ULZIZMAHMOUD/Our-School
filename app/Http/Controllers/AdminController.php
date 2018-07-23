<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function validAdmin( Request $request ){

     $admin= new Admin();
      $result=$admin->validuser($request["username"],$request['password']);
      if ($result->error=="0"){
          return view ("dashboard");
      }
      else if ($result->error=="1"){
          return Redirect::back()->with('Notfound'," المستخدم غير موجود ");

      }
      else if ($result->error=="2"){
          return Redirect::back()->with('WrongPassword',"الرقم السري غير صحيح ");

      }


  }
}
