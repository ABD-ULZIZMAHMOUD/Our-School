


@extends('backend.layout.master')

@section('content')



<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="title">اضافه  سنة جامعيه </div> 
                            </div>
                            <div class="card-body">


                              @include('alerts')
                              <form method="post" action={{url("/yearuniversity/addType")}}>
                                  {{csrf_field()}}
                                  <div class="form-group row">
                                    <label for="name" class="col-2 col-form-label">   اسم السنه الجامعيه</label>
                                    <div class="col-10">
                                        <input class="form-control" type="text" placeholder="اسم السنة الجامعية"  name="name" id="name" class="name">
                                    </div>
                                </div>



                    
                              <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">حفظ </button>
                                  <a href="{{url('yearuniversity/allTypes')}}" class="btn btn-danger btn-rounded">
                                      الغاء
                                  </a>


                                  
                                  
                                  
                                    
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div> 
@endsection
