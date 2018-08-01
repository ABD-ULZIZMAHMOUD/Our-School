


@extends('backend.layout.master')

@section('content')


    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="title">تحديث</div>
                    </div>
                    <div class="card-body">


                        @include('alerts')
                        <form method="post" action="{{url('teacher/editteacher/'.$user->teacherid)}}">
                            {{csrf_field()}}
                            <input type="hidden" value="PUT">
                            <div class="form-group row">
                                <label for="fristname" class="col-2 col-form-label">  اسم الاول</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->fristname}}"  name="fristname" id="fristname" class="fristname">


                                </div>

                                <label for="lastname" class="col-2 col-form-label">  اسم الاخير</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->lastname}}"  name="lastname" id="lastname" class="lastname">


                                </div>


 <label for="phonenum" class="col-2 col-form-label">   رقم التليفون</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->phonenum}}"  name="phonenum" id="phonenum" class="phonenum">


                                </div>
                                <label for="country" class="col-2 col-form-label">    الدولة</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->country}}"  name="country" id="country" class="country">


                                </div>


  <label for="gov" class="col-2 col-form-label">    المحافظة</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->gov}}"  name="gov" id="gov" class="gov">


                                </div>

                                 <label for="district" class="col-2 col-form-label">    المنطقة</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->district}}"  name="district" id="district" class="district">


                                </div>

                                
                                <label for="street" class="col-2 col-form-label">    الشارع</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->street}}"  name="street" id="street" class="street">


                                </div>


                                 
                                 <label for="houseno" class="col-2 col-form-label">    رقم المنزل </label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->houseno}}"  name="houseno" id="houseno" class="houseno">


                                </div>

                                 <label for="flatno" class="col-2 col-form-label">    رقم الشقة </label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->flatno}}"  name="flatno" id="flatno" class="flatno">


                                </div>




<label for="priceofhour" class="col-2 col-form-label">    تكلفة/ ساعة</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->priceofhour}}"  name="priceofhour" id="priceofhour" class="priceofhour">


                                </div>







                                 <label for="email" class="col-2 col-form-label">   الايميل</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->email}}"  name="email" id="email" class="email">


                                </div>



           <label for="username" class="col-2 col-form-label">    اسم المستخدم</label>
                                <div class="col-10">

                                    <input class="form-control" type="username" value="{{$user->username}}"  name="username" id="username" class="username">


                                </div>


    <label for="password" class="col-2 col-form-label">   الرقم السرى</label>
                                <div class="col-10">

                                    <input class="form-control" type="password" value="{{$user->password}}"  name="password" id="password" class="password">


                                </div>



 <label for="confirmpassword" class="col-2 col-form-label">    تأكيد الرقم السرى  </label>
                                <div class="col-10">

                                    <input class="form-control" type="password" value="{{$user->confirmpassword}}"  name="confirmpassword" id="confirmpassword" class="confirmpassword">


                                </div>






   

                        




                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">حفظ </button>
                            {{--<button type="submit" class="btn btn-inverse waves-effect waves-light">الغاء</button>--}}






                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
