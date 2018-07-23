<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('backend/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('backend/assets/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> @yield('title') </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->

    <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />

    <link href="{{asset('backend/assets/css/now-ui-dashboard.css')}}?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{asset('backend/assets/demo/demo.css')}}" rel="stylesheet" />

    <link href="{{asset('backend/assets/css/main.css')}}" rel="stylesheet" />

</head>
<div class="" dir="ltr">
<li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="#">Logout</a></li>
                                </ul>
                            </div>
                        </li>

</div>

<body class="" dir="rtl">
    <div class="wrapper ">
        <div class="sidebar" data-color="blue">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text logo-mini">
                    CT
                </a>
                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                    Creative Tim
                </a>
            </div>
            <div class="sidebar-wrapper">

                <ul class="nav">
                    <li class="active">
                        <a href="">
                            <i class="now-ui-icons design_app"></i>
                            <h>الرئيسيه</h>
                        </a>
                    </li>
                    <li>
                        <a href="backend/examples/icons.html">
                            <i class="now-ui-icons education_atom"></i>
                            <p>الطلاب</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('backend/examples/map.html')}}">
                            <i class="now-ui-icons location_map-big"></i>
                            <p>المدرسين</p>
                        </a>
                    </li>
                    <li>
                        <a href="http://localhost/OurSchool/public/address">
                            <i class="now-ui-icons ui-1_bell-53"></i>
                            <p>العنواين</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('backend/examples/user.html')}}">
                            <i class="now-ui-icons users_single-02"></i>
                            <p>المواد الدراسيه</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('backend/examples/tables.html')}}">
                            <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>المراحل التعليميه</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{asset('backend/examples/typography.html')}}">
                            <i class="now-ui-icons text_caps-small"></i>
                            <p>الحسابات</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="{{asset('backend/examples/upgrade.html')}}">
                            <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">

              <div class="panel-header panel-header-sm">

              </div>
</section>
@yield('content')

</section>



        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="{{asset('backend/assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('backend/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="{{asset('backend/assets/js/plugins/chartjs.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('backend/assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('backend/assets/js/now-ui-dashboard.js')}}?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="{{asset('backend/assets/demo/demo.js')}}"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js')}}
        demo.initDashboardPageCharts();
    });
</script>

</html>
