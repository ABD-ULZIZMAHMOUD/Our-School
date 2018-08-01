<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\Redirect;

class SubjectController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =Subject::where('name', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك الماده الدراسيه موجوده من قبل  ");

        }
        $type= new Subject();
        $type->name=$request['name'];
        $type->save();

        return redirect('/subject/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Subject::all();
        return view ("backend.university.showsubject",compact('allTypes'));


    }
    public function gettype($id){

        $user = Subject::find($id);
        return view ("backend.university.editsubject",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Subject::find($id);
        $type->name = $request['name'];
        $type->save();
        return redirect('/subject/allTypes');
    }

    public function deletetype($id){


        $user = Subject::find($id)->delete();
        return back();

    }
}
