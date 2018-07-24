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
        return view ("backend.alltypes",compact('allTypes'));


    }

    public function edittype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $type =Typeeducation::find($request['$name']);

        $type->name = $request['$name'];
        $type->save();
        return redirect('/alltypes');
    }

    public function deletetype(Request $request){
        $this->validate($request, [

            'name' => 'required'

        ]);

        Typeeducation::find($request['name'])->delete();
        return redirect('/alltypes');

    }
}
