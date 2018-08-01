<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Illuminate\Support\Facades\Redirect;

class TeacherController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'fristname' => 'required',
            'lastname' => 'required',
            'email'=>'required|email|' , 
            'password'=>'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/' , 
            'phonenum'=>'required' , 
            'confirmpassword'=>'required_with:password|same:password|min:6',
            'username'=>'required',
            
            'priceofhour'=>'required',

            'gov'=>'required',
            'country'=>'required',
            'street'=>'required',
            'district'=>'required',
            'houseno'=>'required',
            'flatno'=>'required'
        
        ]);
        $count =Teacher::where('email', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك   الايميل موجود من قبل  ");

        }
        $type= new Teacher();
        $type->fristname=$request['fristname'];
        $type->lastname=$request['lastname'];
        $type->email=$request['email'];
        $type->password=$request['password'];
        $type->phonenum=$request['phonenum'];
       
        $type->confirmpassword=$request['confirmpassword'];
        $type->username=$request['username'];
     
        $type->priceofhour=$request['priceofhour'];

        $type->gov=$request['gov'];
        $type->country=$request['country'];
        $type->street=$request['street'];
        $type->district=$request['district'];
        $type->houseno=$request['houseno'];
        $type->flatno=$request['flatno'];

        $type->save();

        return redirect('/teacher/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Teacher::all();
        return view ("backend.teacher.showteacher",compact('allTypes'));


    }
    public function gettype($id){

        $user = Teacher::find($id);
        return view ("backend.teacher.editTeacher",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Teacher::find($id);
        $type->fristname=$request['fristname'];
        $type->lastname=$request['lastname'];
        $type->email=$request['email'];
        $type->password=$request['password'];
        $type->phonenum=$request['phonenum'];
       
        $type->confirmpassword=$request['confirmpassword'];
        $type->username=$request['username'];
        
        $type->priceofhour=$request['priceofhour'];
        $type->gov=$request['gov'];
        $type->country=$request['country'];
        $type->street=$request['street'];
        $type->district=$request['district'];
        $type->houseno=$request['houseno'];
        $type->flatno=$request['flatno'];
        $type->save();
        return redirect('/teacher/allTypes');
    }

    public function deletetype($id){


        $user = Teacher::find($id)->delete();
        return back();

    }
}
