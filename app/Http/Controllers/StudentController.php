<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            'frisrtname' => 'required',
            'lastname' => 'required',
            'email'=>'required|email|' , 
            'password'=>'required|min:6|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/' , 
            'phonenum'=>'required' , 
            'gov'=>'required' , 
            'district'=>'required' , 
            'street'=>'required' , 
            'houseno'=>'required' , 
            'flatno'=>'required', 
            'confirmpassword'=>'required_with:password|same:password|min:6',
            'username'=>'required',
           'country'=>'required'



        ]);
        $count =Student::where('email', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك   الايميل موجود من قبل  ");

        }
        $type= new Student();
        $type->frisrtname=$request['frisrtname'];
        $type->lastname=$request['lastname'];
        $type->email=$request['email'];
        $type->password=$request['password'];
        $type->phonenum=$request['phonenum'];
        $type->gov=$request['gov'];
        $type->district=$request['district'];
        $type->street=$request['street'];
        $type->houseno=$request['houseno'];
        $type->flatno=$request['flatno'];
        $type->country=$request['country'];
        $type->confirmpassword=$request['confirmpassword'];
        $type->username=$request['username'];
        $type->save();

        return redirect('/student/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Student::all();
        return view ("backend.student.showstudent",compact('allTypes'));


    }
    public function gettype($id){

        $user = Student::find($id);
        return view ("backend.student.editstudent",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Student::find($id);
        $type->frisrtname=$request['frisrtname'];
        $type->lastname=$request['lastname'];
        $type->email=$request['email'];
        $type->password=$request['password'];
        $type->phonenum=$request['phonenum'];
        $type->gov=$request['gov'] ; 
        $type->district=$request['district'];
        $type->street=$request['street']; 
        $type->houseno=$request['houseno'];
        $type->flatno=$request['flatno'];
        $type->country=$request['country'];
        $type->confirmpassword=$request['confirmpassword'];
        $type->username=$request['username'];
        $type->save();
        return redirect('/student/allTypes');
    }

    public function deletetype($id){


        $user = Student::find($id)->delete();
        return back();

    }
}
