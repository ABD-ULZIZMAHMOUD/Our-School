<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\University;
use Illuminate\Support\Facades\Redirect;

class UniversityController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =University::where('name', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك الماده الدراسيه موجوده من قبل  ");

        }

        $type= new University();
        $type->name=$request['name'];
        $type->save();

        return redirect('/university/allTypes');


    }
    public function  getalltypes(){

        $allTypes = University::all();
        return view ("backend.university.showuniversity",compact('allTypes'));


    }
    public function gettype($id){

        $user = University::find($id);
        return view ("backend.university.edituniversity",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =University::find($id);
        $type->name = $request['name'];
        $type->save();
        return redirect('/university/allTypes');
    }

    public function deletetype($id){

        $user = University::find($id)->delete();
        return back();

    }
}
