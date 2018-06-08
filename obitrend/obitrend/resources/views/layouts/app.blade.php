<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
          <!-- Facebook metatags -->


          <!-- end here -->
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="{{asset('layout_assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('layout_assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
          <link href="{{asset('layout_assets/pages/css/blog.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('layout_assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
          <link href="{{asset('layout_assets/global/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('layout_assets/layouts/layout2/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('layout_assets/layouts/layout2/css/themes/blue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('layout_assets/layouts/layout2/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>

        <!-- hide element on dropdown select -->
                <!-- start here -->
        <!-- <style type="text/css">
    .box{
        color: #fff;
        padding: 20px;
        display: none;
        margin-top: 20px;
         width: 100%;
    }
    .death{ background: #ff0000; }
    .missing{ background: #228B22; }
    .public{ background: #0000ff; }
    .Deathannouncement{  width: 100%; }
    .Missingperson{ background: #0000ff; }
    .PublicNotice{ background: #0000ff; }
    .Anniversaries{ background: #0000ff; }
</style> -->

      <!-- end here -->

        <!-- Payment view -->
         <!-- start here -->
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script>
         var textbox = document.getElementById('amount');
         var fileselect = document.getElementById('uploadData');

//       pesapal controller function
         function fileSelect()
         {
             var x =  document.getElementById('uploadData').value;
             var y =  document.getElementById('type').value;
             var z =  0;
             if ( y == 'Deathannouncement') {
               var fileName = x*7 ;
               var desc = "Death Announcement" ;
               // var fileName = x.match(/[^\/\\]+$/);

               document.getElementById('amount').value = fileName;
               document.getElementById('desc').value = desc;

             }
             else if ( y == 'Missingperson') {
               var fileName = x*3 ;
               var desc = "Missing people" ;
               // var fileName = x.match(/[^\/\\]+$/);

               document.getElementById('amount').value = fileName;
               document.getElementById('desc').value = desc;

             }else if ( y == 'PublicNotice') {
               var fileName = x*13 ;
               var desc = "Public Notice " ;
               // var fileName = x.match(/[^\/\\]+$/);

               document.getElementById('amount').value = fileName;
               document.getElementById('desc').value = desc;

             }else if ( y == 'Missingchild') {
               var fileName = x*2 ;
               var desc = "MissingChild Announcement" ;
               // var fileName = x.match(/[^\/\\]+$/);

               document.getElementById('amount').value = fileName;
               document.getElementById('desc').value = desc;

             }else {

                var fileName = y*13;
                var desc = "Anniversary Announcement" ;
              document.getElementById('amount').value = fileName;
              document.getElementById('desc').value = desc;
             }
              //
              // if(y=='Deathannouncement'){
              //   var fileName = x*1 ;
              //   // var fileName = x.match(/[^\/\\]+$/);
              //
              //   document.getElementById('fiil').value = fileName;
              //
              // }else if (y=='Missingperson')) {
              //   var fileName = x*2 ;
              //   // var fileName = x.match(/[^\/\\]+$/);
              //
              //   document.getElementById('fiil').value = fileName;
              //
              // }else if (y=='PublicNotice')) {
              //   var fileName = x*3 ;
              //   // var fileName = x.match(/[^\/\\]+$/);
              //
              //   document.getElementById('fiil').value = fileName;
              //
              // }else {
              //   var fileName = x*4 ;
              //   // var fileName = x.match(/[^\/\\]+$/);
              //
              //   document.getElementById('fiil').value = fileName;
              //
              // }



         }


         </script>
         <!-- end here -->
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
    <div id="app">


        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{asset('layout_assets/layouts/layout2/img/logo-default.png')}}" alt="logo" class="logo-default" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE ACTIONS -->
                <!-- DOC: Remove "hide" class to enable the page header actions -->


                <div class="page-actions">
                    <div class="btn-group">
                      <a  href="{{ route('client.make') }}" class="btn blue-chambray btn-outline btn-sm">
                              <i class="fa fa-plus"></i>
                              <span class="hidden-xs"> New </span>
                          </a>

                    </div>
                </div>

                <!-- END PAGE ACTIONS -->
                <!-- BEGIN PAGE TOP -->
                <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <!-- <form class="search-form search-form-expanded" action="page_general_search_3.html" method="GET">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." name="query">
                            <span class="input-group-btn">
                                <a href="javascript:;" class="btn submit">
                                    <i class="icon-magnifier"></i>
                                </a>
                            </span>
                        </div>
                    </form> -->
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    @if(Auth::check())
                        @if(Auth::user()->access_level == 1)


                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte -->
                            <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                            <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                            <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <i class="icon-bell"></i>
                                    <span class="badge badge-default"><?php echo count($requests); ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="external">
                                        <h3>
                                            <span class="bold"><?php echo count($requests); ?> pending</span> notifications</h3>
                                        <a href="{{ route('admin.view.requests') }}">view all</a>
                                    </li>
                                    <li>
                                        <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                            <li>
                                                <a href="javascript:;">

                                                    <span class="details">
                                                        <!-- <span class="label label-sm label-icon label-success">


                                                        </span> -->
                                                      </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            @else

                                                <div class="top-menu">
                                                    <ul class="nav navbar-nav pull-right">
                                                        <!-- BEGIN NOTIFICATION DROPDOWN -->
                                                        <!-- DOC: Apply "dropdown-dark" class below "dropdown-extended" to change the dropdown styte -->
                                                        <!-- DOC: Apply "dropdown-hoverable" class after below "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
                                                        <!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
                                                        <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
                                                          @if(count($requests)==0)
                                                          <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                              <i class="icon-bell"></i>
                                                              <span class="badge badge-default"></span>
                                                          </a>
                                                              @else
                                                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                                                <i class="icon-bell"></i>
                                                                <span class="badge badge-default"><?php echo count($requests); ?></span>
                                                            </a>
                                                                  @endif
                                                            <ul class="dropdown-menu">
                                                                <li class="external">
                                                                    <h3>
                                                                        <span class="bold"><?php echo count($requests); ?> pending</span> notifications</h3>
                                                                    <a href="#">view all</a>
                                                                </li>
                                                                <li>
                                                                    <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
                                                                        <li>
                                                                            <a href="javascript:;">

                                                                                <span class="details">
                                                                                    <!-- <span class="label label-sm label-icon label-success">


                                                                                    </span> -->
                                                                                  </span>
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
  @endif
                        @endif
                            <!-- END NOTIFICATION DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="../assets/layouts/layout2/img/avatar3_small.jpg" />
                                    @if(Auth::check())
                                        <span class="username username-hide-on-mobile"> {{Auth::user()->first_name}}{{Auth::user()->other_names}} </span>
                                    @endif
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{{ route('profile.edit') }}">
                                            <i class="icon-user"></i> My Profile </a>
                                    </li>
                                    <!-- <li>
                                        <a href="#">
                                            <i class="icon-calendar"></i> Settings </a>
                                    </li> -->

                                    @if(Auth::check())
                                        @if(Auth::user()->access_level == 1)
                                            <li>
                                                <a href="{{route('admin.index')}}">
                                                    <i class="icon-user"></i> Admin Dashboard
                                                </a>
                                            </li>
                                        @endif
                                    @endif

                                    <li class="divider"> </li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="icon-key"></i> Log Out </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                            </form>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                            <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <!-- <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i>
                            </li> -->
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix"></div>
        <!-- <div class="page-container">

          </div> -->
          <div class="page-container">
              <!-- BEGIN SIDEBAR -->
              <div class="page-sidebar-wrapper">
                  <!-- END SIDEBAR -->
                  <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                  <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                  <div class="page-sidebar navbar-collapse collapse">
                      <!-- BEGIN SIDEBAR MENU -->
                      <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu page-sidebar-menu-closed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start ">
                            <a href="{{ route('home') }}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Home</span>
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="nav-item  ">
                            <a href="{{ url('/announcements/make')}}" class="nav-link nav-toggle">
                                <i class="fa fa-pencil"></i>
                                <span class="title">Make request</span>
                                <span class="arrow"></span>
                            </a>

                        </li>
                        <li class="nav-item  ">
                            <a href="{{ url('/view/announcements')}}" class="nav-link nav-toggle">
                                <i class="fa fa-eye"></i>
                                <span class="title">View announcements</span>
                                <span class="arrow"></span>
                            </a>

                        </li>

                      @if(Auth::check())
                          @if(Auth::user()->access_level == 1)
                          <li class="nav-item  ">
                              <a href="{{route('admin.index')}}" class="nav-link nav-toggle">
                                  <i class="fa fa-gavel"></i>
                                  <span class="title">Admin dashboard</span>
                                  <span class="arrow"></span>
                              </a>

                          </li>
                          @endif
                      @endif

                  @if(Auth::check())
                      @if(Auth::user()->access_level == 2)
                      <li class="nav-item  ">
                          <a href="{{route('super.admin.index')}}" class="nav-link nav-toggle">
                              <i class="fa fa-gavel"></i>
                              <span class="title">Admin dashboard</span>
                              <span class="arrow"></span>
                          </a>

                      </li>
                      @endif
                  @endif
                      </ul>
                      <!-- END SIDEBAR MENU -->
                  </div>
                  <!-- END SIDEBAR -->
              </div>
            @yield('content')
        </div>



    </div>

    <!-- Scripts -->
    <!-- facebook share script -->
    <div id="fb-root"></div>
    <script>
(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=facebook_app_id";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

function fb_share(dynamic_link,dynamic_title) {
    var app_id = '228449891236901';
    var pageURL="https://www.facebook.com/dialog/feed?app_id=" + app_id + "&link=" + dynamic_link;
    var w = 600;
    var h = 400;
    var left = (screen.width / 2) - (w / 2);
    var top = (screen.height / 2) - (h / 2);
    window.open(pageURL, dynamic_title, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=no, width=' + 800 + ', height=' + 650 + ', top=' + top + ', left=' + left)
    return false;
}
</script>


    <!-- ends here -->

            <!-- BEGIN CORE PLUGINS -->
            <script src="{{asset('layout_assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

            <script type="text/javascript">
            $(document).ready(function(){
                $("select").change(function(){
                    $(this).find("option:selected").each(function(){
                        var optionValue = $(this).attr("value");
                        if(optionValue){
                            $(".box").not("." + optionValue).hide();
                            $("." + optionValue).show();

                        } else{
                            $(".box").hide();
                        }
                    });
                }).change();
            });
            </script>
            <script src="{{asset('layout_assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{asset('layout_assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('layout_assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('layout_assets/pages/scripts/form-wizard.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/pages/scripts/profile.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{asset('layout_assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('layout_assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>

</body>
</html>
