


@extends('backend.layout.master')

@section('content')



<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="title">اضافه مراحل التعليمية</div> 
                            </div>
                            <div class="card-body">


                              @include('alerts')
                              <form method="post" action="http://localhost/OurSchool/public/xxxxx">
                                  {{csrf_field()}}
                                  <div class="form-group row">
                                    <label for="example-text-input" class="col-2 col-form-label">اسم المرحلة التعليميه</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" value="اسم المرحلة التعليميه" id="name" class="name">
                                    </div>
                                </div>



                    
                              <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">حفظ </button>
                                     <button type="submit" class="btn btn-inverse waves-effect waves-light">الغاء</button>


                                  
                                  
                                  
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
@endsection
