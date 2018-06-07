<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}"  prefix="og: http://ogp.me/ns#" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
          <!-- Facebook metatags -->
  <meta property="og:url"           content=" http://obitrend.com/announcements/show/{{  $request[0]->id }}" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="{{  $request[0]->title }}" />
	<meta property="og:description"   content="{{  $request[0]->description}}" />
	<meta property="og:image"         content="{{ asset('layout_assets/layouts/layout2/img/logo-default.png')}}" />

          <!-- end here -->
          <!-- Twitter metatags -->
  <meta name="twitter:card"           content="summary_large_image" />
  <meta name="twitter:site"          content="@randu_kelvin" />
  <meta name="twitter:creator"       content="@randu_kelvin" />
  <meta name="twitter:title"   content="{{  $request[0]->title }}" />
  <meta name="twitter:description"     content="{{  $request[0]->description}}" />
  <meta name="twitter:image"         content="{{ asset('layout_assets/layouts/layout2/img/logo-default.png')}}" />

          <!-- end here -->
          <!-- LinkedIn metatags -->
          <meta property="og:title" content="{{  $request[0]->title }}" />
          <meta property="og:description" content="{{  $request[0]->description }}  />
          <meta property="og:url"           content=" http://obitrend.com/announcements/show/{{  $request[0]->id }}" />
          <meta property="og:image" content="{{ asset('layout_assets/layouts/layout2/img/logo-default.png')}}" />

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

</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">
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
                                <span class="title">View announcementss</span>
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

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->

            @if(Session::has('message'))
                <div class="alert alert-success"><em> {!! session('message') !!}</em></div>
            @endif
            <!-- END THEME PANEL -->
            <h1 class="page-title"> Announcement
                <!-- <small>blog post samples</small> -->
            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('client.index') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Announcement</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Share
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                          <!-- <ul class="dropdown-menu pull-right"> -->
                              <li>
                                <?php $url= url("/announcements/show/".$request[0]->id);  ?>

                                <a href="javascript:void(0);" onclick="fb_share('{{ $url }}', '{{ $request[0]->id }}')" class="social-share__facebook" title="share on facebook">  <i class="fa fa-facebook"></i>facebook</a>
                              <!-- <a href="javascript:void(0);" onclick="fb_share()" class="fbBtm">  </i>facebook </a>` -->
                              </li>
                              <li>
                                <script type="IN/Share" data-url="{{ $url }}" data-counter="top">  <i class="fa fa-linkedin"></i></script>



                              </li>
                              <li>
                                  <a href="https://twitter.com/intent/tweet?url={{ $url }}&text={{ $request[0]->title }}">
                                      <i class="fa fa-twitter"></i> Tweet</a>
                              </li>
                              @if(($request[0]->type_of_announcement)=="Deathannouncement")
                              <li class="divider"> </li>

                              <li>



                                     <a href="{{ route('announcement.download',$request[0]->id) }} "target="_blank" >download</a>
                              </li>
                               @endif

                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <div class="blog-page blog-content-2">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="blog-single-content bordered blog-container">
                            <div class="blog-single-head">
                                <h1 class="blog-single-head-title">{{ $request[0]->title }}</h1>
                                <div class="blog-single-head-date">
                                    <i class="icon-calendar font-blue"></i>
                                    <a href="javascript:;">{{ $request[0]->created_at->format('d/m/Y') }}</a>
                                </div>
                            </div>
                            <div class="blog-single-img">

                                <img width="70%" src="{{Storage::url($request[0]->image_thumb)}}" /></div>


                            <div class="blog-single-desc">
                                <p>{{ $request[0]->description }}</p>
                                @if(($request[0]->type_of_announcement)=="Deathannouncement")
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1"> Paybill: {{$request[0]->payment}} </a>
                                        </h4>
                                    </div>

                                </div>
                                 @endif


                            </div>
                            <div class="blog-single-foot pull-right">

                                <ul class="blog-post-tags">
                                    <li class="uppercase">
                                        <a href="javascript:;">{{ $request[0]->location }}</a>
                                    </li>

                                </ul>
                            </div>


                        </div>
                    </div>
  @if(($request[0]->type_of_announcement)=="Deathannouncement")
              <div class="col-lg-5">
                <!-- <div class="col-md-6"> -->
                    <!-- BEGIN PORTLET -->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption caption-md">
                                <i class="icon-bar-chart theme-font hide"></i>
                                <span class="caption-subject font-blue-madison bold uppercase">Tributes</span>
                                <!-- <span class="caption-helper">45 pending</span> -->
                            </div>

                        </div>


                        <div class="portlet-body">
                            <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                <div class="general-item-list">
                                  @if(count($tribute)==0)
                                  <div class="note note-success"><h3>No tributes</h3>  </div>

                                     @else
                                     <?php
 														for ($i = 0; $i < count($tribute); ++$i) { ?>


                              <div class="item">
                                  <div class="item-head">
                                      <div class="item-details">
                                        @if(Storage::disk('local')->has($tribute[$i]->user->avatar))
                                   <img class="item-pic" src="{{Storage::url( $tribute[$i]->user->avatar)}}">
                                        @else
                                          <img width="100%"src="{{$tribute[$i]->user->avatar}}" />
                                        @endif

                                          <!-- <img class="item-pic" src="{{asset('layout_assets/pages/media/users/avatar12.png')}}"> -->
                                          <a href="" class="item-name primary-link">{{ $tribute[$i]->user->first_name}}  {{ $tribute[$i]->user->other_names}}</a>
                                          <?php $time=$tribute[$i]->created_at->diffForHumans(); ?>
                                          <span class="item-label"><?php echo $time ; ?></span>
                                      </div>
                                      <span class="item-status">
                                          <!-- <span class="badge badge-empty badge-success"></span> </span> -->
                                  </div>
                                  <div class="item-body">{{ $tribute[$i]->comment}} </div>
                              </div>


                                       <?php }?>

                                   @endif

                                </div>
                            </div>
<form  action="{{ route('create.comment')}}" method="POST">
    {{ csrf_field() }}

                            <div class="form-group form-md-line-input form-md-floating-label has-success">

<input type="text" class="form-control" name="comment" id="form_control_1">
<label for="form_control_1">  Tribute goes here</label>
</div>

 <input type="hidden" name="announcement_id" value="{{$request[0]->id}}">
 <button class="btn green-haze" type="submit">post tribute</button>
   </form>



                        </div>

                    </div>

                </div>
                @else
                <div class="col-lg-5">
                  <!-- <div class="col-md-6"> -->
                      <!-- BEGIN PORTLET -->
                      <div class="portlet light ">
                          <div class="portlet-title">
                              <div class="caption caption-md">
                                  <i class="icon-bar-chart theme-font hide"></i>
                                  <span class="caption-subject font-blue-madison bold uppercase">Comment</span>
                                  <!-- <span class="caption-helper">45 pending</span> -->
                              </div>
                              <!-- <div class="inputs">
                                  <div class="portlet-input input-inline input-small ">
                                      <div class="input-icon right">
                                          <i class="icon-magnifier"></i>
                                          <input type="text" class="form-control form-control-solid" placeholder="search..."> </div>
                                  </div>
                              </div> -->
                          </div>


                          <div class="portlet-body">
                              <div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="0" data-handle-color="#D7DCE2">
                                  <div class="general-item-list">
                                    @if(count($comment)==0)
                                    <div class="note note-success"><h3>No comments</h3>  </div>

                                       @else
                                       <?php
                              for ($i = 0; $i < count($comment); ++$i) { ?>


                                <div class="item">
                                    <div class="item-head">
                                        <div class="item-details">
                                          @if(Storage::disk('local')->has($comment[$i]->user->avatar))
                                      <img class="item-pic" src="{{Storage::url( $comment[$i]->user->avatar)}}">
                                          @else
                                            <img width="100%"src="{{$comment[$i]->user->avatar}}" />
                                          @endif


                                            <a href="" class="item-name primary-link">{{$comment[$i]->user->first_name}} {{$comment[$i]->user->other_names}}</a>
                                                  <?php $time=$comment[$i]->created_at->diffForHumans(); ?>
                                            <span class="item-label"><?php echo $time ; ?></span>
                                        </div>
                                        <span class="item-status">
                                            <!-- <span class="badge badge-empty badge-success"></span> </span> -->
                                    </div>
                                    <div class="item-body">{{$comment[$i]->comment}}</div>
                                </div>




                                         <?php }?>



                                     @endif

                                  </div>
                              </div>
  <form  action="{{ route('create.comments')}}" method="POST">
      {{ csrf_field() }}

                              <div class="form-group form-md-line-input form-md-floating-label has-success">

  <input type="text" class="form-control" name="comment" id="form_control_1">
  <label for="form_control_1">comment goes here</label>
  </div>

   <input type="hidden" name="announcement_id" value="{{$request[0]->id}}">
   <button class="btn green-haze" type="submit">post comment</button>
     </form>



                          </div>

                      </div>

                  </div>


                   @endif
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->

</div>
</div>



</div>

<!-- Scripts -->
<!-- facebook share script -->
<div id="fb-root"></div>






<!-- ends here -->

    <!-- BEGIN CORE PLUGINS -->
    <script src="{{asset('layout_assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
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
    <script>
    function fb_share(dynamic_link,dynamic_title) {
      var app_id = '228449891236901';
      // var  dynamic_title = 'msando';
      // var dynamic_link= 'http://obitrend.com/announcements/show/2';fb_share()
      var pageURL="https://www.facebook.com/dialog/feed?app_id=" + app_id + "&link=" + dynamic_link;
      var w = 600;
      var h = 400;
      var left = (screen.width / 2) - (w / 2);
      var top = (screen.height / 2) - (h / 2);
      window.open(pageURL, dynamic_title, 'toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=no, resizable=no, copyhistory=no, width=' + 800 + ', height=' + 650 + ', top=' + top + ', left=' + left)
      return false;

    }


    </script>
    <script src="http://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>

    <!-- BEGIN THEME GLOBAL SCRIPTS -->
    <script src="{{asset('layout_assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
      <!-- <script src="{{asset('layout_assets/global/scripts/facebook.js')}}" type="text/javascript"></script> -->
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
