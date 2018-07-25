<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Typeofstudey;
use Illuminate\Support\Facades\Redirect;
class TypeofstudeyController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =Typeofstudey::where('name', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"هذه نوع الدراسه  موجود من قبل الرجاء ادخال نوع اخر ");

        }
        $type= new Typeofstudey();
        $type->name=$request['name'];
        $type->save();

        return redirect('/studyType/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Typeofstudey::all();
        return view ("backend.showstudy",compact('allTypes'));


    }
    public function gettype($id){

        $user = Typeofstudey::find($id);
        return view ("backend.editstudy",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Typeofstudey::find($id);
        $type->name = $request['name'];
        $type->save();
        return redirect('/studyType/allTypes');
    }

    public function deletetype($id){


        $user = Typeofstudey::find($id)->delete();
        return back();

    }
}
