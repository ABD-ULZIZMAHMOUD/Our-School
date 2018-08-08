<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yearuniversity;
use Illuminate\Support\Facades\Redirect;

class YearuniversityController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'name' => 'required'

        ]);
        $count =Yearuniversity::where('name', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك الماده الدراسيه موجوده من قبل  ");

        }

        $type= new Yearuniversity();
        $type->name=$request['name'];
        $type->save();

        return redirect('/yearuniversity/allTypes');


    }
    public function  getalltypes(){

        $allTypes = Yearuniversity::all();
        return view ("backend.yearuniversity.showyearuniversity",compact('allTypes'));


    }
    public function gettype($id){

        $user = Yearuniversity::find($id);
        return view ("backend.yearuniversity.edityearuniversity",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Yearuniversity::find($id);
        $type->name = $request['name'];
        $type->save();
        return redirect('/yearuniversity/allTypes');
    }

    public function deletetype($id){

        $user = Yearuniversity::find($id)->delete();
        return back();

    }
}
