<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Illuminate\Support\Facades\Redirect;
use App\Educationyear;
use App\Study;
use App\Typeeducation;
use App\Typeofstudey;
use App\Education;
use App\Taeducation;
use App\University;
use App\Faculty;
use App\Term;
use App\Subject;
use App\Eduniversity;
use App\Saeducation;
use App\Yearuniversity;
use App\Hour;
use App\Day;



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
            'flatno'=>'required',
            'gender'=>'required',
            'types' => 'required',
            'typeStudy'=> 'required',
            'years'=> 'required',
            'study'=> 'required',

            'university'=>'required' , 
            'faculty'=>'required' ,
            'term'=>'required',
            'subject'=>'required' ,
            'yearuniversity'=>'required',
            'hourfrom'=>'required' ,
            'hourto'=>'required',
            'dayname'=>'required',


        
        ]);
        $count =Teacher::where('email', $request->name)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"تلك   الايميل موجود من قبل  ");

        }

        $education_id =Education:: where('type_education', $request->types)->where('typeof_studey',$request->typeStudy)
        ->where('education_year',$request->years)->where('study',$request->study)->find('educationid') ; 


        $eduniversity_id =Eduniversity:: where('universityid', $request->university)->where('facultyid',$request->faculty)
        ->where('termid',$request->term)->where('subjectid',$request->subject)->where('yearuniversityid',$request->yearunivesity)->find('id') ; 

  

        $type= new Teacher();
        $type->fristname=$request['fristname'];
        $type->lastname=$request['lastname'];
        $type->email=$request['email'];
        $type->password=$request['password'];
        $type->phonenum=$request['phonenum'];
       
        $type->confirmpassword=$request['confirmpassword'];
        $type->username=$request['username'];
     
       // $type->priceofhour=$request['priceofhour'];

        $type->gov=$request['gov'];
        $type->country=$request['country'];
        $type->street=$request['street'];
        $type->district=$request['district'];
        $type->houseno=$request['houseno'];
        $type->flatno=$request['flatno'];
        $type->gender=$request->gender;
        $type->group=$request->group;

        $type->save();
        $teid= $type->teacherid;


        //

        $type2= new Education();
        $type2->type_education= $request->types;
        $type2->typeof_studey=$request->typeStudy;
        $type2->education_year=$request->years;
        $type2->study=$request->study;

        $type2->save();


        $eduid= $type2->educationid;

        $tedu= new  Taeducation ();


        if ($education_id !=null)
        {

            $tedu->price=$request['priceofhour'];
            $tedu->educationid=$education_id;
            $tedu->teacherid=$teid;

            $tedu->save();



        }
        else 

        {
            $tedu->educationid=$eduid;
            $tedu->teacherid=$teid;
            $tedu->price=$request['priceofhour'];
            $tedu->save();

        }


        //eduniversity
        $type3= new Eduniversity();
        $type3->universityid= $request->university;
        $type3->facultyid=$request->faculty;
        $type3->termid=$request->term;
        $type3->subjectid=$request->subject;
        $type3->yearuniversityid=$request->yearuniversity ; 

        $type3->save();


        $eduni= $type3->id;

        $sadu= new  Saeducation  ();

        if ($eduniversity_id !=null)
    {
        $sadu->price=$request['priceofhour'];
        $sadu->educationid=$eduniversity_id;
        $sadu->teacherid=$teid;

        $sadu->save();

    }
    else 
    {
        $sadu->educationid=$eduni;
        $sadu->teacherid=$teid;
        $sadu->price=$request['priceofhour'];
        $sadu->save();

    }

    // Hour 


    $hour= new Hour();
    $hour->hourfrom= $request->hourfrom;
    $hour->hourto=$request->hourto;
    

    $hour->save();


    $hourid= $hour->id;



    //Day
    $day=new Day(); 
    

    
    if ($education_id !=null)
    {

        if ($request->status=="on")
        $day->status=1 ; 
        else 
        $day->status=0 ;

        $day->hourid=$hourid ; 
        $day->taeducationid=$education_id;
        $day->dayname=$request->dayname ; 

        $day->save();

    }
    else 

    {

        if ($request->status=="on")
        $day->status=1 ; 
        else 
        $day->status=0 ;
        
        $day->hourid=$hourid ; 
        $day->taeducationid=$eduid;
        $day->dayname=$request->dayname ; 

        $day->save();

      

    }



        return redirect('/teacher/allTypes');


    }
    public function  getalltypes()
    {
        
//مدرسى
        $years = Educationyear::all();
        $types=Typeeducation::all();
        $typeStudy= Typeofstudey::all();
        $study=Study::all();


        //جامعى
        $university= University::all() ; 
        $faculty= Faculty::all() ; 
        $subject=Subject::all() ; 
        $term=Term::all();
        $yearuniversity=Yearuniversity::all();





        return view ("backend.teacher.addteacher",compact('years','yearuniversity','types','typeStudy','study','university','faculty','term','subject'));


    }
    public function getallteacher(){
        
    }

    // edit
    public function gettype($id){

        $user = Teacher::find($id);


        //***********************TEACHER**************************
                 ///Taeducation 
                
if ($user->group=="مدرسى")
{
                 $ta=Taeducation::where('teacherid',$id)->get() ;
                 $day=Day::where('taeducationid',$ta->id)->get();
                 $hour=Hour::where('id',$day->hourid)->get();
}
else 
{


$su= Saeducation::where('teacherid',$id)->get() ;
$edu= Eduniversity::where('id',$su->educationid	)-get() ;
  



    $ta=Taeducation::where('teacherid',$id)->get() ;
    $day=Day::where('taeducationid',$ta->id)->get();
    $hour=Hour::where('id',$day->hourid)->get();

}




        return view ("backend.teacher.editTeacher",compact('user'));


    }
    public function edittype(Request $request, $id)
    {



        $education_id =Education:: where('type_education', $request->types)->where('typeof_studey',$request->typeStudy)
        ->where('education_year',$request->years)->where('study',$request->study)->find('educationid') ; 


        $eduniversity_id =Eduniversity:: where('universityid', $request->university)->where('facultyid',$request->faculty)
        ->where('termid',$request->term)->where('subjectid',$request->subject)->where('yearuniversityid',$request->yearunivesity)->find('id') ; 



        $type =Teacher::find($id);
        $taeducation=Taeducation::find($id);
     
        $type2 =Education::find($type->educationid);
       // $tedu =Taeducation::find($id);
       $sadu=Saeducation::find($id);
       //$hour=Hour::find($id);











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
        $type->gender=$request->gender;
        $type->group=$request->group ; 


        /// 
    
       
        $type->save();
        $teid= $type->teacherid;


        //

        $type2= new Education();
        $type2->type_education= $request->types;
        $type2->typeof_studey=$request->typeStudy;
        $type2->education_year=$request->years;
        $type2->study=$request->study;

        $type2->save();


        $eduid= $type2->educationid;

        $tedu= new  Taeducation ();


        if ($education_id !=null)
        {

            $tedu->price=$request['priceofhour'];
            $tedu->educationid=$education_id;
            $tedu->teacherid=$teid;

            $tedu->save();



        }
        else 

        {
            $tedu->educationid=$eduid;
            $tedu->teacherid=$teid;
            $tedu->price=$request['priceofhour'];
            $tedu->save();

        }


        //eduniversity
        $type3= new Eduniversity();
        $type3->universityid= $request->university;
        $type3->facultyid=$request->faculty;
        $type3->termid=$request->term;
        $type3->subjectid=$request->subject;
        $type3->yearuniversityid=$request->yearuniversity ; 

        $type3->save();


        $eduni= $type3->id;

        $sadu= new  Saeducation  ();

        if ($eduniversity_id !=null)
    {
        $sadu->price=$request['priceofhour'];
        $sadu->educationid=$eduniversity_id;
        $sadu->teacherid=$teid;

        $sadu->save();

    }
    else 
    {
        $sadu->educationid=$eduni;
        $sadu->teacherid=$teid;
        $sadu->price=$request['priceofhour'];
        $sadu->save();

    }

    // Hour 


    $hour= new Hour();
    $hour->hourfrom= $request->hourfrom;
    $hour->hourto=$request->hourto;
    

    $hour->save();


    $hourid= $hour->id;



    //Day
    $day=new Day(); 
    

    
    if ($education_id !=null)
    {

        if ($request->status=="on")
        $day->status=1 ; 
        else 
        $day->status=0 ;

        $day->hourid=$hourid ; 
        $day->taeducationid=$education_id;
        $day->dayname=$request->dayname ; 

        $day->save();

    }
    else 

    {

        if ($request->status=="on")
        $day->status=1 ; 
        else 
        $day->status=0 ;
        
        $day->hourid=$hourid ; 
        $day->taeducationid=$eduid;
        $day->dayname=$request->dayname ; 

        $day->save();
    }
        return redirect('/teacher/allTypes');
    }

    public function deletetype($id){


        $user = Teacher::find($id)->delete();
        return back();
        

    }
}
