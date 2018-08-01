@extends('backend.layout.master')




@section('content')


    @include('alerts')
    <form method="post" action={{url("/Education/editEducation".$user->educationid)}}>
        {{csrf_field()}}



        <div class="card-body">


<div class="row">
                <div class="col-sm-3">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">مرحله التعليم </h3>

                        <select class="form-control select2" required name='types' >


                            @foreach($types as $type)
                                <option value={{$type->typeeducationid}} @if($type->typeeducationid==$user->type_education) selected @endif>{{$type->name}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>

                <div class="col-sm-3">

                    <div class="white-box">
                        <h3 class="box-title m-b-0">نوع التعليم</h3>

                        <select class="form-control select2" name='typeStudy' required>


                            @foreach($typeStudy as $type)
                                <option  value={{$type->typeofstudeyid}}@if($type->typeofstudeyid==$user->typeof_studey) selected @endif>{{$type->name}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">السنه الدراسيه</h3>



                        <select class="form-control select2" name='years' required>


                            @if(count($years) > 0)
                                @foreach($years as $type)
                                    <option  value={{$type->educationid}}@if($type->educationid==$user->education_year) selected @endif>{{$type->year}}</option>

                                @endforeach
                            @else
                                <option value="">لا يوجد نتائج</option>
                            @endif


                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">الماده الدراسيه</h3>

                        <select class="form-control select2" name='study' required>


                            @foreach($study as $type)
                                <option  value={{$type->studyid}} @if($type->studyid==$user->study) selected @endif>{{$type->name}}</option>

                            @endforeach




                        </select>

                    </div>
                </div>


        </div>

    </div>
        <div class="card-body">

        <div class="row">




                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">حفظ </button>
                <a href="{{url('/Education/allTypes')}}" class="btn btn-danger btn-rounded">
                    الغاء
                </a>


            </div>

        </div>







    </form>
@endsection


