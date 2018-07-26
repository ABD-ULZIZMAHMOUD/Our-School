@extends('backend.layout.master')

@section('footer')

    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" />

@endsection

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
                                                    <td>  <form action="{{url('educationType/delete/' .$type->typeeducationid)}}">

                                                            {{csrf_field()}}
                                                            <input type="hidden" value="DELETE">

                                                            <input type="submit" class="btn btn-danger btn-rounded" value="حذف" />
                                                        </form>
                                                    </td>
                                                    <td>

                                                        <a href="{{url('educationType/edit/' .$type->typeeducationid)}}" class="btn btn-danger btn-rounded">
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

            <script>
                $(document).ready(function() {
                    $('#myTable').DataTable();
                    $(document).ready(function() {
                        var table = $('#example').DataTable({
                            "columnDefs": [{
                                "visible": false,
                                "targets": 2
                            }],
                            "order": [
                                [2, 'asc']
                            ],
                            "displayLength": 25,
                            "drawCallback": function(settings) {
                                var api = this.api();
                                var rows = api.rows({
                                    page: 'current'
                                }).nodes();
                                var last = null;
                                api.column(2, {
                                    page: 'current'
                                }).data().each(function(group, i) {
                                    if (last !== group) {
                                        $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                        last = group;
                                    }
                                });
                            }
                        });
                        // Order by the grouping
                        $('#example tbody').on('click', 'tr.group', function() {
                            var currentOrder = table.order()[0];
                            if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                                table.order([2, 'desc']).draw();
                            } else {
                                table.order([2, 'asc']).draw();
                            }
                        });
                    });
                });
                $('#example23').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            </script>
            <!--Style Switcher -->

            <script src="{{asset('backend/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
@endsection