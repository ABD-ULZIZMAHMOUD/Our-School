<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admin';
    public $primaryKey = 'adminid';
    public $timestamps = false;

    public function validuser($uesrname, $password)
    {
        $ad = Admin::where("username", $uesrname)->count();
        if ($ad == 0) {
            $json = array("error" => "1");
            return $json;
        }
        $admin = Admin::where("username", $uesrname)->where("password", $password)->count();
        if ($admin == 0) {
            $json = array("error" => "2");
            return $json;
        }
        $result = array("error" => "0");
        return $result;


    }

}
