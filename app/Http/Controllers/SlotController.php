<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slot;
use Illuminate\Support\Facades\Redirect;


class SlotController extends Controller
{
    public function addtype(Request $request){

        $this->validate($request, [

            
            'slottimestart' => 'required',
            'slottimeebd'=>'required' , 
            'duration'=>'required' , 
            'taevaluation'=>'required' , 
            'studevaluation'=>'required' , 
        
        ]);
    
        $type= new Slot();
        
        $type->slottimestart=$request['slottimestart'];
        $type->slottimeebd=$request['slottimeebd'];
        $type->duration=$request['duration'];
        $type->taevaluation=$request['taevaluation'];
        $type->studevaluation=$request['studevaluation'];
        $type->ispaid=$request['ispaid'];
        
        $type->price=$request['price'];
        $type->taactvitedstart=$request['taactvitedstart'];

        $type->taactivatedend=$request['taactivatedend'];
        $type->studactivatedstatr=$request['studactivatedstatr'];
        $type->studactivededend=$request['studactivededend'];
if ($request['taactvitedstart']=="on")
{$type->taactvitedstart=1 ;}
else 
{ $type->taactvitedstart=0 ; }


if($request['taactivatedend']=="on")
{$type->taactivatedend=1 ; }
else { $type->taactivatedend=0 ;  }
if ($request['studactivatedstatr']=="on")
{
    $type->studactivatedstatr=1 ; 
}
else {
    $type->studactivatedstatr=0 ; 
}
if($request['studactivededend']=="on") 
{
    $type->studactivededend=1;
}
else {
    $type->studactivededend=0;

}
if ($request['ispaid']=="on")
{

$type->ispaid=1 ; 
}
else {
    $type->ispaid=0 ; 

}

        $type->save();

        return redirect('/slot/allTypes');


    }
    public function  getalltypes(){



        $allTypes = Slot::all();

        foreach($allTypes as $type)
        {
        if ($type->taactvitedstart==0)
        {
            $type->taactvitedstart=" غائب" ;
        }
        else 
        {
            $type->taactvitedstart=" حضر" ;
        }
        

        if ($type->taactivatedend==0)
        {
            $type->taactivatedend=" غائب" ;
        }
        else 
        {
            $type->taactivatedend=" حضر" ;
        }


        if ($type->studactivatedstatr==0)
        {
            $type->studactivatedstatr=" غائب" ;
        }
        else 
        {
            $type->studactivatedstatr=" حضر" ;
        }



        if ($type->studactivededend==0)
        {
            $type->studactivededend=" غائب" ;
        }
        else 
        {
            $type->studactivededend=" حضر" ;
        }


        if ($type->ispaid==0)
        {
            $type->ispaid=" لم يتم السداد" ;
        }
        else 
        {
            $type->ispaid=" تم السداد" ;
        }


    }
        return view ("backend.slot.showslot",compact('allTypes'));


    }
    public function gettype($id){

        $user = Slot::find($id);

        return view ("backend.slot.editslot",compact('user'));


    }
    public function edittype(Request $request, $id){


        $type =Slot::find($id);
       
       

       
        $type->slottimestart=$request['slottimestart'];
        $type->slottimeebd=$request['slottimeebd'];
        $type->duration=$request['duration'];
        $type->taevaluation=$request['taevaluation'];
        $type->studevaluation=$request['studevaluation'];
        $type->ispaid=$request['ispaid'];
        
        $type->price=$request['price'];
        $type->taactvitedstart=$request['taactvitedstart'];

        $type->taactivatedend=$request['taactivatedend'];
        $type->studactivatedstatr=$request['studactivatedstatr'];
        $type->studactivededend=$request['studactivededend'];
        if ($request['taactvitedstart']=="on")
{$type->taactvitedstart=1 ;}
else 
{ $type->taactvitedstart=0 ; }


if($request['taactivatedend']=="on")
{$type->taactivatedend=1 ; }
else { $type->taactivatedend=0 ;  }
if ($request['studactivatedstatr']=="on")
{
    $type->studactivatedstatr=1 ; 
}
else {
    $type->studactivatedstatr=0 ; 
}
if($request['studactivededend']=="on") 
{
    $type->studactivededend=1;
}
else {
    $type->studactivededend=0;

}
if ($request['ispaid']=="on")
{

$type->ispaid=1 ; 
}
else {
    $type->ispaid=0 ; 

}


        $type->save();
        return redirect('/slot/allTypes');
    }

    public function deletetype($id){


        $user = Slot::find($id)->delete();
        return back();

    }
}
