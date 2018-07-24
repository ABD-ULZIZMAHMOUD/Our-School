<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeeducation;

class TypeeducationController extends Controller
{


    public function addtype(Request $request){

        $this->validate($request, [

           'name' => 'required'

        ]);

        $type= new Typeeducation();
        $result=  $type->addtype($request['name']);
        if($result['error']==0){
             return redirect('/alltypes');
         }

         return view("error");
    }
    public function  getalltypes(){


        //$type= new Typeeducation();
        $allTypes = Typeeducation::all();
        return view ("backend.alltypes",compact('allTypes'));


    }

    public function edittype($id,$name){

        $type =Typeeducation::find($id,$name);

        $type->name = $name;
        $name->save();
        $json = array("error"=>"0");
        return $json;
    }

    public function deletetype($id){
        $type=Typeeducation::find($id)->delete();
        $json = array("error"=>"0");
        return $json;

    }
}
