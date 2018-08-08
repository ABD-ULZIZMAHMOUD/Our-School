<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend/plugins/images/favicon.png')}}">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->


        <link href="{{asset('backend/plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css')}}" rel="stylesheet" />
        <link href="{{asset('backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet" />
        <link href="{{asset('backend/eliteadmin/css/animate.css')}}" rel="stylesheet" />

            <link href="{{asset('backend/eliteadmin/css/style.css')}}" rel="stylesheet" />

              <link href="{{asset('backend/eliteadmin/css/colors/blue.cs')}}" rel="stylesheet" />

    <link href={{asset('backend/drop_down_search.css')}}/>
    <link href="{{asset('backend/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('backend/plugins/bower_components/custom-select/custom-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('backend/plugins/bower_components/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/bower_components/multiselect/css/multi-select.css')}}" rel="stylesheet" />
    <link href="{{asset('backend/plugins/bower_components/switchery/dist/switchery.min.css')}}" rel="stylesheet" />

        
   
    <!-- Menu CSS -->
    
    <!-- Animation CSS -->
 
    <!-- Custom CSS -->
  
    <!-- color CSS you can use different color css from css/colors folder -->
    <!-- We have chosen the skin-blue (blue.css) for this starter
          page. However, you can choose any other skin from folder css / colors .
-->
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->


<style>
        @font-face {
            font-family: 'Sky';
            src: url({{ url('backend/sky.ttf')}});
        }

        body {
            font-family: 'Sky';
        }
    </style>

@yield('header')

</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <!-- Logo -->
                <div class="top-left-part">
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b><img src="{{URL::asset('backend/plugins/images/eliteadmin-logo.png')}}" alt="home" /></b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs"><img src="{{URL::asset('backend/plugins/images/eliteadmin-text.png')}}" alt="home" /></span> </a>
                </div>
                <!-- /Logo -->
                <!-- This is for mobile view search and menu icon -->
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                   
                   
                </ul>
                <!-- This is the message dropdown -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-envelope"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                  
                                        <div class="user-img"> <img src="{{URL::asset('backend/plugins/images/users/pawandeep.jpg')}}" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="{{URL::asset('backend/plugins/images/users/sonu.jpg')}}" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="{{URL::asset('backend/plugins/images/users/arijit.jpg')}}" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                    </a>
                                    <a href="#">
                                        <div class="user-img"> <img src="{{URL::asset('backend/plugins/images/users/pawandeep.jpg')}}" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><i class="icon-note"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
          </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 2</strong> <span class="pull-right text-muted">20% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%"> <span class="sr-only">20% Complete</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 3</strong> <span class="pull-right text-muted">60% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"> <span class="sr-only">60% Complete (warning)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p> <strong>Task 4</strong> <span class="pull-right text-muted">80% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"> <span class="sr-only">80% Complete (danger)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="{{URL::asset('backend/plugins/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Steave</b> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            
                            <li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- .Megamenu -->
                   
                        
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search..."> <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    <li class="user-pro">
                        <a href="#" class="waves-effect"><img src="{{URL::asset('backend/plugins/images/users/varun.jpg')}}" alt="user-img" class="img-circle"> <span class="hide-menu"> Steve Gection<span class="fa arrow"></span></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-email"></i> Inbox</a></li>
                            <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                            <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-small-cap m-t-10">--- Main Menu</li>
                    <li> <a href="index.html" class="waves-effect"><i class="linea-icon linea-basic fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span></span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href="index.html">Demographical</a> </li>
                            <li> <a href="index2.html">Minimalistic</a> </li>
                            <li> <a href="index3.html">Analitical</a> </li>
                            <li> <a href="index4.html">Simpler</a> </li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> مراحل التعليم <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href={{url("/educationphase")}}>اضافه مرحلة تعليمية</a> </li>
                            <li> <a href={{url("educationType/allTypes")}}>مراحل التعليم </a> </li>
                            <li> <a href={{url("/studyphase")}}>اضافه نوع الدراسة</a> </li>
                            <li> <a href={{url("studyType/allTypes")}}>انواع الدراسه </a> </li>
                            <li> <a href={{url("/year")}}>اضافه مرحله دراسيه </a> </li>
                            <li> <a href={{url("year/allTypes")}}>مراحل الدراسه</a> </li>
                            <li> <a href={{url("study")}}>اضافه ماده دراسيه  </a> </li>
                            <li> <a href={{url("study/allTypes")}}>المواد الدراسيه</a> </li>
                            <li> <a href={{url("Education/getAllEducation")}}>اضافه ماده دراسيه لمرحله تعليم  </a> </li>
                            <li> <a href={{url("Education/allTypes")}}> المواد الدراسيه لمراحل التعليم</a> </li>
                        </ul>
                    </li>


                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger">  الجامعات <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href={{url("/university")}}>  أضافه جامعة</a> </li>
                            <li> <a href={{url("/university/allTypes")}}>  الجامعات</a> </li>
                            <li> <a href={{url("/faculty")}}> أضافه كلية  </a> </li>
                            <li> <a href={{url("/faculty/allTypes")}}> الكليات  </a> </li>
                            <li> <a href={{url("/term")}}>   اضافه فصل دراسى</a> </li>
                            <li> <a href={{url("/term/allTypes")}}>    عرض الفصول الدراسية</a> </li>
                            <li> <a href={{url("/subject")}}>اضافه ماده جامعية </a> </li>
                            <li> <a href={{url("/subject/allTypes")}}>عرض المواد الجامعية</a> </li>

                        </ul>
                    </li>





                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger">  الطلاب <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">
                            <li> <a href={{url("/student")}}>  أضافه طالب</a> </li>

                            <li> <a href={{url("/student/allTypes")}}>   عرض الطلاب</a> </li>





                        </ul>
                    </li>




                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger">  الحجزات <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">

                            <li> <a href={{url("/slot")}}>   اضافه حجز </a> </li>
                            <li> <a href={{url("/slot/allTypes")}}>   عرض الحجزات </a> </li>




                        </ul>
                    </li>





                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger">  المدرسين <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">



                            <li> <a href={{url("/teacher")}}>  أضافه مدرس</a> </li>

                            <li> <a href={{url("/teacher/allTypes")}}>   عرض المدرسين</a> </li>




                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger"> اولياء الامور <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">



                            <li> <a href={{url("/parent")}}>  أضافه ولي امر </a> </li>

                            <li> <a href={{url("/parent/allTypes")}}>   اولياء امور</a> </li>




                        </ul>
                    </li>

                    <li> <a href="javascript:void(0);" class="waves-effect"><i class="linea-icon linea-basic fa-fw text-danger" data-icon="7"></i> <span class="hide-menu text-danger">الحوجزات الممتده <span class="fa arrow"></span> </span></a>
                        <ul class="nav nav-second-level">

                            <li> <a href={{url("book/getAllBook")}}>اضافه حجز ممتد  </a> </li>
                            <li> <a href={{url("book/allTypes")}}>الحوجزات الممتده</a> </li>
                        </ul>
                    </li>




                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
        
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">@yield('title') </h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12"> <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Page</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">@yield('title')</li>
                        </ol>
                    </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                   <!-- .right-sidebar -->

                 <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"> 


                     
                   @yield('content')
                   </div>



            </div>
        </div>
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->

    <script src="{{asset('backend/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>


      <script src="{{asset('backend/eliteadmin/bootstrap/dist/js/tether.min.js')}}"></script>

       <script src="{{asset('backend/eliteadmin/bootstrap/dist/js/bootstrap.min.js')}}"></script>

 <script src="{{asset('backend/plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js')}}"></script>



  
 
  <script src="{{asset('backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    

    <script src="{{asset('backend/eliteadmin/js/jquery.slimscroll.js')}}"></script> 


       <script src="{{asset('backend/eliteadmin/js/waves.js')}}"></script>    
       

        <script src="{{asset('backend/eliteadmin/js/custom.min.js')}}"></script>    




 <script src="{{asset('backend/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>



      <script src="{{asset('backend/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>



@yield('footer')
    
</body>

</html>
