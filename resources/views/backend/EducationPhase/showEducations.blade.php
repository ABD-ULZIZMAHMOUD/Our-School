

@extends('backend.layout.master')

@section('header')

    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" />

@endsection

@section('content')




    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="title">عرض مراحل التعليم بالمواد الدراسيه</div>
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
                                                <th>مراحل التعليم </th>
                                                <th>مراحل التعليم </th>
                                                <th>مراحل التعليم </th>
                                                <th>مراحل التعليم </th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($educations as $type)
                                                <tr>

                                                    <td>{{App\Typeeducation::find( $type->type_education)->name }}</td>
                                                    <td>{{App\Typeofstudey::find( $type->typeof_studey)->name }}</td>
                                                    <td>{{App\Educationyear::find( $type->education_year)->year }}</td>
                                                    <td>{{App\Study::find( $type->study)->name }}</td>
                                                    <td>  <form action="{{url('Education/delete/' .$type->educationid)}}">

                                                            {{csrf_field()}}
                                                            <input type="hidden" value="DELETE">

                                                            <input type="submit" class="btn btn-danger btn-rounded" value="حذف" />
                                                        </form>
                                                    </td>
                                                    <td>

                                                        <a href="{{url('Education/edit/'.$type->educationid)}}" class="btn btn-danger btn-rounded">
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


@section('footer')
    <script src="{{asset('backend/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>

    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <!-- end - This is for export functionality only -->


    <!--Style Switcher -->

    <script src="{{asset('backend/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>

@endsection