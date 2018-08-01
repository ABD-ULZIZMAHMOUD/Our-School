<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Faculty;
use Illuminate\Support\Facades\Redirect;

class FacultyController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =Faculty::where('name', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك الماده الدراسيه موجوده من قبل  ");

        }
        $type= new Faculty();
        $type->name=$request['name'];
        $type->save();

        return redirect('/faculty/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Faculty::all();
        return view ("backend.university.showfaculty",compact('allTypes'));


    }
    public function gettype($id){

        $user = Faculty::find($id);
        return view ("backend.university.editfaculty",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Faculty::find($id);
        $type->name = $request['name'];
        $type->save();
        return redirect('/faculty/allTypes');
    }

    public function deletetype($id){


        $user = Faculty::find($id)->delete();
        return back();

    }
}
