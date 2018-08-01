@extends('backend.layout.master')



@section('content')




<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="title">عرض مراحل الدراسية</div> 
                            </div>
                            <div class="card-body">


                              @include('alerts')
                             
                              <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                           
                            <div class="table-responsive">
                                <table id="myTable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>السنه الدراسية</th>
                                            <th> الحدث</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($allTypes as $type)
                                        <tr>
                                            <td>{{$type->name}}</td>
                                          <td>  <form action="{{url('studyType/delete/' . $type->typeofstudeyid)}}">

                                                {{csrf_field()}}
                                                <input type="hidden" value="DELETE">

                                                <input type="submit" class="btn btn-danger btn-rounded" value="حذف" />
                                            </form>
                                            </td>
                                            <td>

                                            <a href="{{url('studyType/edit/' . $type->typeofstudeyid)}}" class="btn btn-danger btn-rounded">
                                                تعديل
                                            </a>


                                            </td>
                                        </tr>



                                    @endforeach




                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
              



                            </div>
                        </div>
                    </div>

                </div>
            </div>
</div>
@endsection


