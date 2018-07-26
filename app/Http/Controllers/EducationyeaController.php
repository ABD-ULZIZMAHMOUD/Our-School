<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Educationyear;
use Illuminate\Support\Facades\Redirect;

class EducationyeaController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =Educationyear::where('year', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"هذه السنه الدراسيه  موجود من قبل الرجاء ادخال نوع اخر ");

        }
        $type= new Educationyear();
        $type->year=$request['name'];
        $type->save();

        return redirect('/year/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Educationyear::all();
        return view ("backend.showyear",compact('allTypes'));


    }
    public function gettype($id){

        $user = Educationyear::find($id);
        return view ("backend.edityear",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Educationyear::find($id);
        $type->year = $request['name'];
        $type->save();
        return redirect('/year/allTypes');
    }
    public function deletetype($id){


        $user = Educationyear::find($id)->delete();
        return back();

    }
}
