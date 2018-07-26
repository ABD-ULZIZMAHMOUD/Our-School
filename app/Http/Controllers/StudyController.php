<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Study;
use Illuminate\Support\Facades\Redirect;

class StudyController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =Study::where('name', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك الماده الدراسيه موجوده من قبل  ");

        }
        $type= new Study();
        $type->name=$request['name'];
        $type->save();

        return redirect('/study/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Study::all();
        return view ("backend.showstudie",compact('allTypes'));


    }
    public function gettype($id){

        $user = Study::find($id);
        return view ("backend.editstudie",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Study::find($id);
        $type->name = $request['name'];
        $type->save();
        return redirect('/study/allTypes');
    }

    public function deletetype($id){


        $user = Study::find($id)->delete();
        return back();

    }
}
