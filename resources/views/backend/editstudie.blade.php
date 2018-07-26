


@extends('backend.layout.master')

@section('content')


    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="title">اضافه مراحل الدراسية</div>
                    </div>
                    <div class="card-body">


                        @include('alerts')
                        <form method="post" action="{{url('/study/editstudy/'.$user->studyid)}}">
                            {{csrf_field()}}
                            <input type="hidden" value="PUT">
                            <div class="form-group row">
                                <label for="example-text-input" class="col-2 col-form-label">اسم الماده الدراسيه</label>
                                <div class="col-10">

                                    <input class="form-control" type="text" value="{{$user->name}}"  name="name" id="name" class="name">
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
