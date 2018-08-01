@extends('backend.layout.master')




@section('content')


    @include('alerts')
    <form method="post" action={{url("/book/addType")}}>
        {{csrf_field()}}

        <div class="card-body">
            <div class="row">





                <div class="col-sm-6">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">الطلاب </h3>

                        <select class="form-control select2" required name='student' >


                            @foreach($students as $student)
                                <option value={{$student->studentid}} >{{$student->frisrtname.$student->lastname}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>
                <div class="col-sm-6">

                    <div class="white-box">
                        <h3 class="box-title m-b-0">المدرسين</h3>

                        <select class="form-control select2" name='typeStudy' required>


                            @foreach($teachers as $teacher)
                                <option  value={{$teacher->teacherid}}>{{$teacher->fristname." ".$teacher->lastname}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>

            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">


                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">تاريخ البدا </label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>

                </div>
                <div class="col-sm-6">


                    <div class="form-group row">
                        <label for="example-date-input" class="col-2 col-form-label">تاريخ الانتهاء</label>
                        <div class="col-10">
                            <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-sm-4">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">الايام </h3>

                        <select class="form-control select2" required name='day' >



                                <option value="السبت" >السبت </option>
                                <option value="الاحد" >الاحد </option>
                                <option value="الاثنين" >الاثنين </option>
                                <option value="الثلاثاء" >الثلاثاء </option>
                                <option value="الاربعاء" >الاربعاء </option>
                                <option value="الخميس" >الخميس </option>
                                <option value="الجمعه" >الجمعه </option>





                        </select>

                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">من</label>
                        <div class="col-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group row">
                        <label for="example-time-input" class="col-2 col-form-label">الي</label>
                        <div class="col-10">
                            <input class="form-control" type="time" value="13:45:00" id="example-time-input">
                        </div>
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


