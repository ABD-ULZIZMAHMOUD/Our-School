<!--------------- This Code For Any Success Message --------------->
@if(session('Notfound'))
    <div class="alert alert-danger alert-dismissible text-center" role="alert">
<!--
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="text-align: left">
              <span aria-hidden="true">&times;</span>
        </button>
-->
        <i class="fa fa-exclamation-triangle"></i>
        {{session('Notfound')}}
    </div>
@endif
<!--------------- This Code For Any Success Message --------------->

<!--------------- This Code For Any Danger Message --------------->
@if(session('WrongPassword'))
    <div class="alert alert-danger alert-dismissible text-center" role="alert">
<!--
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>
-->
        <i class="fa fa-exclamation-triangle"></i> {{session('WrongPassword')}}
    </div>
@endif
<!--------------- This Code For Any Danger Message --------------->

<!--------------- This Code For Any Info Message --------------->
@if(session('info-msg'))
    <div class="alert alert-info alert-dismissible text-center" role="alert">
<!--
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>
-->
        <i class="fa fa-check-circle"></i>
            {{session('info-msg')}}
    </div>
@endif
<!--------------- This Code For Any Info Message --------------->




<!--------------- This Code For Any Errors Message --------------->
@if(count($errors) > 0)
    <div class="alert alert-danger alert-dismissible text-center" role="alert">
<!--
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
        </button>
-->
        <i class="fa fa-exclamation-triangle"></i> Errors
        <ul>
            @foreach($errors->all() as $error)
                <li>  - {{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<!--------------- This Code For Any Errors Message --------------->