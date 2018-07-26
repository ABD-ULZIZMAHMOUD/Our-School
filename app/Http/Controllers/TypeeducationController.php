<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeeducation;
use Illuminate\Support\Facades\Redirect;

class TypeeducationController extends Controller
{


    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =Typeeducation::where('name', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"هذه نوع الدراسه  موجود من قبل الرجاء ادخال نوع اخر ");

        }
        $type= new Typeeducation();
        $type->name=$request['name'];
        $type->save();

        return redirect('/educationType/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Typeeducation::all();
        return view ("backend.showeducation",compact('allTypes'));


    }
    public function gettype($id){

        $user = Typeeducation::find($id);
        return view ("backend.editeducation",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Typeeducation::find($id);
        $type->name = $request['name'];
        $type->save();
        return redirect('/educationType/allTypes');
    }
    public function deletetype($id){


        $user = Typeeducation::find($id)->delete();
        return back();

    }
}
