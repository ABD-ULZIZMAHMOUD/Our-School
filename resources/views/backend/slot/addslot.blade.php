


@extends('backend.layout.master')

@section('content')



<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="title">  اضافه حجز</div> 
                            </div>
                            <div class="card-body">


                              @include('alerts')
                              <form method="post" action={{url("/slot/addType")}}>
                                  {{csrf_field()}}
                                  <div class="form-group row">
                                    <label for="slottimestart" class="col-2 col-form-label">   وقت البدأ</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="وقت البدأ"  name="slottimestart" id="slottimestart" class="slottimestart">
                                    </div>


                                    <label for="slottimeebd" class="col-2 col-form-label">   وقت الانتهاء</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="وقت الانتهاء"  name="slottimeebd" id="slottimeebd" class="slottimeebd">
                                    </div>




                                    <label for="duration" class="col-2 col-form-label"> عدد الساعات   </label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder=" عدد الساعات"  name="duration" id="duration" class="duration">
                                    </div>


                                    <label for="taevaluation" class="col-2 col-form-label">  تقييم المدرس   </label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  تقييم المدرس"  name="taevaluation" id="taevaluation" class="taevaluation">
                                    </div>

                                  

                    <label for="studevaluation" class="col-2 col-form-label">  تقييم الطالب   </label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="  تقييم المدرس"  name="studevaluation" id="studevaluation" class="studevaluation">
                                    </div>

<label for="price" class="col-2 col-form-label">  المبلغ الكلى   </label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="المبلغ الكلى "   name="price" id="price" class="price">
                                    </div>




               


     



<div class="">
                                       
                                    حضور المدرس    <input type="checkbox"  class="js-switch" data-color="#f96262" class="js-switch" data-color="#13dafe" id="taactvitedstart" name="taactvitedstart" />
                                    </div>
                                    


<div class="switchery-demo m-b-30">
                                       
                                       مغادرة  المدرس    <input type="checkbox" class="js-switch" data-color="#f96262" class="js-switch" data-color="#13dafe" id="taactivatedend" name="taactivatedend" />
                                           </div><br>
                                           <div class="switchery-demo m-b-30">


حضور الطالب<input type="checkbox"  class="js-switch" data-color="#ffca4a" class ="studactivatedstatr" id="studactivatedstatr" name="studactivatedstatr" />
                                        </div>


 <div class="switchery-demo m-b-30">


 مغادرة الطالب<input type="checkbox" class="js-switch" data-color="#ffca4a" class ="studactivededend" id="studactivededend" name="studactivededend" />
                                        </div>









                                </div>


                        



                    
                              <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">حفظ </button>
                                  <a href="{{url('slot/allTypes')}}" class="btn btn-danger btn-rounded">
                                      الغاء
                                  </a>


                                  
                                  
                                  
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
@endsection
