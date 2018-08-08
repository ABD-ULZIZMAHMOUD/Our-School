@extends('backend.layout.master')
@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script  >
 $(function () {
    $('.group').hide();
    $('#مدرسى').show();
    $('#selectMe').change(function () {
      $('.group').hide();
      $('#'+$(this).val()).show();
    });
 });

</script>


<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="title">اضافه  مدرس</div> 
                            </div>
                            <div class="card-body">

                              @include('alerts')
                              <form method="post" action={{url("/teacher/addType")}}>
                                  {{csrf_field()}}
                                  <div class="form-group row">
                                    <label for="fristname" class="col-2 col-form-label">  اسم الاول</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="اسم الاول"  name="fristname" id="fristname" class="fristname">
                                    </div>

                                     <label for="lastname" class="col-2 col-form-label">  اسم الاخير</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="اسم الاخير"  name="lastname" id="lastname" class="lastname">
                                    </div>

                                    <label for="phonenum" class="col-2 col-form-label">   رقم التليفون</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder=" رقم التليفون"  name="phonenum" id="phonenum" class="phonenum">
                                    </div>






                                    <label for="hourfrom" class="col-2 col-form-label">من</label>
                                    <div class="col-10">
                                    <input class="form-control" type="time" value="13:45:00" id="hourfrom" name="hourfrom">
                                    </div>

                                    <label for="hourto" class="col-2 col-form-label">الى</label>
                                    <div class="col-10">
                                    <input class="form-control" type="time" value="13:45:00" id="hourto" name="hourto">
                                    </div>





  <label for="gender" class="col-1 col-form-label">    أيام الاسبوع</label>

                        <select class="form-control select2" required name='dayname' >



<option value="السبت" >السبت </option>
<option value="الاحد" >الاحد </option>
<option value="الاثنين" >الاثنين </option>
<option value="الثلاثاء" >الثلاثاء </option>
<option value="الاربعاء" >الاربعاء </option>
<option value="الخميس" >الخميس </option>
<option value="الجمعه" >الجمعه </option>





</select>

               
                    
                    
               <label for="gender" class="col-1 col-form-label">    النوع</label>
            
                        <select class="form-control select2" required name='gender' >

                                <option value="ذكر">ذكر</option>
                                <option value="أنثى">أنثى</option>

                        </select>
                        

        <label for="group" class="col-1 col-form-label" name='group'>    الفئة</label>
                        <select id="selectMe" class="form-control"   required   name='group' >


                           
                                <option value="مدرسى">مدرسى</option>
                                <option value="جامعى">جامعى</option>

                        </select>


<div class="col-md-12">
<div id="مدرسى" class="group">
<form method="post" action={{url("/Education/addType")}}>
        {{csrf_field()}}

        <div class="card-body">
    <div class="row">


                <div class="col-sm-3">
                    <div class="white-box">
                        <p class="box-title m-b-0">مرحله التعليم </p>

                        <select class="form-control select2" required name='types' >


                            @foreach($types as $type)
                                <option value={{$type->typeeducationid}} >{{$type->name}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>
                <div class="col-sm-3">

                    <div class="white-box">
                        <p class="box-title m-b-0">نوع التعليم</p>

                        <select class="form-control select2" name='typeStudy' required>


                            @foreach($typeStudy as $type)
                                <option  value={{$type->typeofstudeyid}}>{{$type->name}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="white-box">
                        <p class="box-title m-b-0">السنه الدراسيه</p>



                        <select class="form-control select2" name='years' required>


                            @if(count($years) > 0)
                                @foreach($years as $type)
                                    <option  value={{$type->educationid}}>{{$type->year}}</option>

                                @endforeach
                            @else
                                <option value="">لا يوجد نتائج</option>
                            @endif


                        </select>

                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="white-box">
                        <p class="box-title m-b-0">الماده الدراسيه</p>

                        <select class="form-control select2" name='study' required>


                            @foreach($study as $type)
                                <option  value={{$type->studyid}}>{{$type->name}}</option>

                            @endforeach




                        </select>

                    </div>
                </div>

        </div>
    </div>
    
</div>
<div id="جامعى" class="group" dir="rtl">
<div class="col-sm-4">
                    <div class="white-box">
                        <p class="box-title m-b-0"> الجامعات </p>

                        <select class="form-control select2" required name='university' >


                            @foreach($university as $type)
                                <option value={{$type->id}} >{{$type->name}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>




<div class="col-sm-4">
                    <div class="white-box">
                        <p class="box-title m-b-0"> الكليات </p>

                        <select class="form-control select2" required name='faculty' >


                            @foreach($faculty as $type)
                                <option value={{$type->id}} >{{$type->name}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>



<div class="col-sm-4">
                    <div class="white-box">
                        <p class="box-title m-b-0"> الفصول الدراسية </p>

                        <select class="form-control select2" required name='term' >


                            @foreach($term as $type)
                                <option value={{$type->id}} >{{$type->name}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>




<div class="col-sm-4">
                    <div class="white-box">
                        <p class="box-title m-b-0"> المواد الدراسية </p>

                        <select class="form-control select2" required name='subject' >
                            @foreach($subject as $type)
                                <option value={{$type->id}} >{{$type->name}}</option>

                            @endforeach
                        </select>

                    </div>
</div>

                    <div class="col-sm-4">
                    <div class="white-box">
                        <p class="box-title m-b-0"> السنين الجامعية </p>

                        <select class="form-control select2" required name='yearuniversity' >


                            @foreach($yearuniversity as $type)
                                <option value={{$type->id}} >{{$type->name}}</option>

                            @endforeach



                        </select>

                    </div>
                </div>



                </div>





</div>
</div>




<label for="country" class="col-2 col-form-label">    الدولة</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  الدولة"  name="country" id="country" class="country">
                                    </div>


<label for="gov" class="col-2 col-form-label">    المحافظة</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  المحافظة"  name="gov" id="gov" class="gov">
                                    </div>



<label for="district" class="col-2 col-form-label">    الحى</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  الحى"  name="district" id="district" class="district">
                                    </div>



<label for="street" class="col-2 col-form-label">    الشارع</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  الشارع"  name="street" id="street" class="street">
                                    </div>



<label for="houseno" class="col-2 col-form-label">    رقم المنزل</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  رقم المنزل"  name="houseno" id="houseno" class="houseno">
                                    </div>


<label for="flatno" class="col-2 col-form-label">    رقم الشقة</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="   رقم الشقة"  name="flatno" id="flatno" class="flatno">
                                    </div>


<label for="priceofhour" class="col-2 col-form-label">    تكلفة / ساعة</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  تكلفة/ ساعة"  name="priceofhour" id="priceofhour" class="priceofhour">
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




                                    <div class="checkbox checkbox-info">
                                        <input id="checkbox1" checked type="checkbox" class="fxhdr"  name="status">
                                        <label for="checkbox1" > تفعيل </label>
                                    </div>


                        </div>



                    
                              <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">حفظ </button>
                                  <a href="{{url('teacher/allTypes')}}" class="btn btn-danger btn-rounded">
                                      الغاء
                                  </a>


                                  
                                  
                                  
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
@endsection
