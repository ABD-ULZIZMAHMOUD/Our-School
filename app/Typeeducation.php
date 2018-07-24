<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeeducation extends Model
{
    protected $table='typeeducation';
    public $primaryKey='typeeducationid';
    public $timestamps=false;

    public function addtype($name){

        $type= new Typeeducation();
        $type->name=$name;
        $type->save();
        $json = array("error"=>"0");
        return $json;

    }
    public function  getalltypes(){

        return Typeeducation::all();


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
