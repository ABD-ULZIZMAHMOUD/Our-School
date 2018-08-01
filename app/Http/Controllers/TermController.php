<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;
use Illuminate\Support\Facades\Redirect;

class TermController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =Term::where('name', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"هذه السنه الدراسيه  موجود من قبل الرجاء ادخال نوع اخر ");

        }
        $type= new Term();
        $type->name=$request['name'];
        $type->save();

        return redirect('/term/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Term::all();
        return view ("backend.term.showterm",compact('allTypes'));


    }
    public function gettype($id){

        $user = Term::find($id);
        return view ("backend.term.editterm",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Term::find($id);
        $type->name = $request['name'];
        $type->save();
        return redirect('/term/allTypes');
    }
    public function deletetype($id){


        $user = Term::find($id)->delete();
        return back();

    }
}
