<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parents;

class ParentController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'frisrtname' => 'required',
            'lastname' => 'required',
            'email'=>'required|email|' ,
            'password'=>'required' ,
            'phonenum'=>'required' ,
            'gov'=>'required' ,
            'district'=>'required' ,
            'street'=>'required' ,
            'houseno'=>'required' ,
            'flatno'=>'required',
            'confirmpassword'=>'required',
            'username'=>'required',
            'country'=>'required'



        ]);
        $count =Parents::where('email', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك   الايميل موجود من قبل  ");

        }
        $type= new Parents();
        //firstname	lastname	email	phonenum	password	confirmpassword	flatenum	bulidingnum	street	region	gov	country
        $type->firstname=$request['frisrtname'];
        $type->lastname=$request['lastname'];
        $type->email=$request['email'];
        $type->password=$request['password'];
        $type->phonenum=$request['phonenum'];
        $type->gov=$request['gov'];
        $type->region=$request['district'];
        $type->street=$request['street'];
        $type->bulidingnum=$request['houseno'];
        $type->flatenum=$request['flatno'];
        $type->country=$request['country'];
        $type->confirmpassword=$request['confirmpassword'];

        $type->save();

        return redirect('/parent/allTypes');


    }
    public function  getalltypes(){



        $allTypes = parents::all();
        return view ("backend.parent.showparent",compact('allTypes'));


    }
    public function gettype($id){

        $user = Parents::find($id);
        return view ("backend.parent.editparent",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Parents::find($id);
        $type->firstname=$request['frisrtname'];
        $type->lastname=$request['lastname'];
        $type->email=$request['email'];
        $type->password=$request['password'];
        $type->phonenum=$request['phonenum'];
        $type->gov=$request['gov'];
        $type->region=$request['district'];
        $type->street=$request['street'];
        $type->bulidingnum=$request['houseno'];
        $type->flatenum=$request['flatno'];
        $type->country=$request['country'];
        $type->confirmpassword=$request['confirmpassword'];

        $type->save();
        return redirect('/parent/allTypes');
    }

    public function deletetype($id){


        $user = Parents::find($id)->delete();
        return back();

    }


}
