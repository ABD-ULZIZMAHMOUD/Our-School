


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
                        <form method="post" action="{{url('slot/editslot/'.$user->slotid)}}">
                            {{csrf_field()}}
                            <input type="hidden" value="PUT">
                            <div class="form-group row">
                                <label for="slottimestart" class="col-2 col-form-label">   وقت البدأ</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->slottimestart}}"  name="slottimestart" id="slottimestart" class="slottimestart">


                                </div>


                                 <label for="slottimeebd" class="col-2 col-form-label">    وقت الانتهاء</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->slottimeebd}}"  name="slottimeebd" id="slottimeebd" class="slottimeebd">


                                </div>



          <label for="duration" class="col-2 col-form-label">    عدد الساعات</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->duration}}"  name="duration" id="duration" class="duration">


                                </div>


                                 <label for="taevaluation" class="col-2 col-form-label">     تقييم المدرس</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->taevaluation}}"  name="taevaluation" id="taevaluation" class="taevaluation">


                                </div>


                                
                                <label for="studevaluation" class="col-2 col-form-label">     تقييم المدرس</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->studevaluation}}"  name="studevaluation" id="studevaluation" class="studevaluation">


                                </div>




 <label for="price" class="col-2 col-form-label">      المبلغ الكلى</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->price}}"  name="price" id="price" class="price">


                                </div>




  <div class="">
                                       
                                       حضور المدرس    <input type="checkbox" @if($user->taactvitedstart == 1) checked @endif  class="js-switch" data-color="#f96262" class="js-switch" data-color="#13dafe" id="taactvitedstart" name="taactvitedstart" />
                                       </div>
                                    

    


                              <div class="">
                                       
                                        مغادرة المدرس    <input type="checkbox"  @if($user->taactivatedend == 1) checked @endif  class="js-switch" data-color="#f96262" class="js-switch" data-color="#13dafe" id="taactivatedend" name="taactivatedend" />
                                       </div>




                                    <div class="">
                                   
                                        حضور الطالب     <input type="checkbox"   value="{{$user->studactivatedstatr}}"  @if($user->studactivatedstatr==1) checked @endif   class="js-switch" data-color="#f96262" class="js-switch" data-color="#13dafe" id="studactivatedstatr" name="studactivatedstatr" />
                                      </div>





                                    <div class="">
                                       
                                       مغادرة الطالب     <input type="checkbox"  value="{{$user->studactivededend}}"  @if($user->studactivededend==1) checked @endif  class="js-switch" data-color="#f96262" class="js-switch" data-color="#13dafe" id="studactivededend" name="studactivededend"  />
                                     </div>



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
