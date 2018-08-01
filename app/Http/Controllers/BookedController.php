<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookedController extends Controller
{
    public function addBook(Request $request){

        $this->validate($request, [

            'types' => 'required',
            'typeStudy'=> 'required',
            'years'=> 'required',
            'study'=> 'required'
        ]);
        //type_education	typeof_studey	education_year	study
        $count =Education::where('type_education', $request->types)->where('typeof_studey',$request->typeStudy)
            ->where('education_year',$request->years)->where('study',$request->study)->count();

        if ($count!=0){
            return Redirect::back()->with('WrongPassword',"هذه المرحله بالماده موجوده من قبل  ");

        }
        $type= new Education();
        $type->type_education= $request->types;
        $type->typeof_studey=$request->typeStudy;
        $type->education_year=$request->years;
        $type->study=$request->study;
        $type->save();

        return redirect('/Education/allTypes');


    }
    public function  getAllBook(){



        $years = Educationyear::all();
        $types=Typeeducation::all();
        $typeStudy= Typeofstudey::all();
        $study=Study::all();
        return view ("backend.EducationPhase.adddataeducation",compact('types','typeStudy','years','study'));


    }
    public function  getAll(){



        $educations=Education::all();

        return view ("backend.EducationPhase.showEducations", compact('educations' ));


    }
    public function getBook($id){

        $years = Educationyear::all();
        $types=Typeeducation::all();
        $typeStudy= Typeofstudey::all();
        $study=Study::all();


        $user = Education::find($id);
        // print_r($user);
        return view ("backend.EducationPhase.editEducations",compact('user','types','typeStudy','years','study'));


    }
    public function editBook(Request $request, $id){



        $this->validate($request, [

            'types' => 'required',
            'typeStudy'=> 'required',
            'years'=> 'required',
            'study'=> 'required'
        ]);

        /*  $count =Education::where('type_education', $request->types)->where('typeof_studey',$request->typeStudy)
              ->where('education_year',$request->years)->where('study',$request->study)->count();

          if ($count!=0){
              return Redirect::back()->with('WrongPassword',"هذه المرحله بالماده موجوده من قبل  ");

          }*/
        $type =Education::find($id);
        $type->type_education= $request->types;
        $type->typeof_studey=$request->typeStudy;
        $type->education_year=$request->years;
        $type->study=$request->study;
        $type->save();

        return redirect('/Education/allTypes');
    }
    public function deleteBook($id){


        $user = Education::find($id)->delete();
        return back();

    }
}
