


@extends('backend.layout.master')

@section('content')



<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="title">اضافه  طالب</div> 
                            </div>
                            <div class="card-body">


                              @include('alerts')
                              <form method="post" action={{url("/student/addType")}}>
                                  {{csrf_field()}}
                                  <div class="form-group row">
                                    <label for="frisrtname" class="col-2 col-form-label">  اسم الاول</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="اسم الاول"  name="frisrtname" id="frisrtname" class="frisrtname">
                                    </div>

                                     <label for="lastname" class="col-2 col-form-label">  اسم الاخير</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="اسم الاخير"  name="lastname" id="lastname" class="lastname">
                                    </div>

                                    <label for="phonenum" class="col-2 col-form-label">   رقم التليفون</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder=" رقم التليفون"  name="phonenum" id="phonenum" class="phonenum">
                                    </div>





<label for="country" class="col-2 col-form-label">    البلد</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  البلد"  name="country" id="country" class="country">
                                    </div>


  <label for="gov" class="col-2 col-form-label">    المحافظة</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder=" المحافظة "  name="gov" id="gov" class="gov">
                                    </div>



  <label for="district" class="col-2 col-form-label">    الحى</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder=" الحى "  name="district" id="district" class="district">
                                    </div>




  <label for="street" class="col-2 col-form-label">    الشارع</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder=" الشارع"  name="street" id="street" class="street">
                                    </div>





  <label for="houseno" class="col-2 col-form-label">   رقم المنزل</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder=" رقم المنزل"  name="houseno" id="houseno" class="houseno">
                                    </div>



<label for="flatno" class="col-2 col-form-label">   رقم الشقة</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder=" رقم الشقة"  name="flatno" id="flatno" class="flatno">
                                    </div>




                                    <label for="emial" class="col-2 col-form-label">   الايميل</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="الايميل" name="email" id="email" class="email">
                                    </div>

                                     <label for="username" class="col-2 col-form-label">   اسم المستخدم</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="اسم المستخدم" name="username" id="username" class="username">
                                    </div>

                                    <label for="password" class="col-2 col-form-label">  الرقم السرى</label>
                                    <div class="col-10">
                                        <input class="form-control" type="password" placeholder="الرقم السرى"  name="password" id="password" class="password">
                                    </div>

                                     <label for="confirmpassword" class="col-2 col-form-label">   تأكيد الرقم السرى</label>
                                    <div class="col-10">
                                        <input class="form-control" type="password" placeholder="تاكيد الرقم السرى"  name="confirmpassword" id="confirmpassword" class="confirmpassword">
                                    </div>

                                </div>



                    
                              <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">حفظ </button>
                                  <a href="{{url('student/allTypes')}}" class="btn btn-danger btn-rounded">
                                      الغاء
                                  </a>


                                  
                                  
                                  
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
@endsection
