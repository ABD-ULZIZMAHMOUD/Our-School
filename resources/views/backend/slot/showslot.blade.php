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
                        <div class="title">عرض  الحجزات</div>
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
                                                <th> تاريخ الحجز</th>
                                                <th>  وقت البدأ</th>
                                                <th>   وقت الانتهاء</th>
                                                <th>    عدد الساعات</th>
                                                <th>    تقييم المدرس</th>
                                                <th>    تقييم الطالب</th>
                                                <th>    المبلغ الكلى</th>
                                                <th>    حضور المدرس</th>
                                                <th>    مغادرة المدرس</th>
                                                <th>    حضور الطالب</th>
                                                <th>   مغادرة الطالب </th>
                                                <th>    حاله الدفع</th>
                                             

                                                <th> الحدث</th>

                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($allTypes as $type)
                                                <tr>
                                                    <td>{{$type->slotdate}}</td>
                                                    <td>{{$type->slottimestart}}</td>
                                                    <td>{{$type->slottimeebd}}</td>
                                                    <td>{{$type->duration}}</td>
                                                    <td>{{$type->taevaluation}}</td>
                                                    <td>{{$type->studevaluation}}</td>
                                                    <td>{{$type->price}}</td>
                                                 <td>{{$type->taactvitedstart}}</td>
                                                   
                                                    <td>{{$type->taactivatedend}}</td>
                                                    <td>{{$type->studactivatedstatr}}</td>
                                                    <td>{{$type->studactivededend}}</td>
                                                    <td>{{$type->ispaid}}</td>
                                                    
                                                    <td>  <form action="{{url('slot/delete/'.$type->slotid)}}">

                                                            {{csrf_field()}}
                                                            <input type="hidden" value="DELETE">

                                                            <input type="submit" class="btn btn-danger btn-rounded" value="حذف" />
                                                        </form>.
                                                    </td>
                                                    <td>

                                                        <a href="{{url('slot/edit/'.$type->slotid)}}" class="btn btn-danger btn-rounded">
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