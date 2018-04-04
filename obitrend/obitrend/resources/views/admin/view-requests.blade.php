@extends('layouts.app')

@section('content')
<!-- BEGIN CONTAINER -->

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->

            <!-- END THEME PANEL -->
            <h1 class="page-title"> Admin Dashboard

            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('admin.index') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <span>Requests</span>
                    </li>
                </ul>
                <div class="page-toolbar">
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> Actions
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="#">
                                    <i class="icon-bell"></i> Action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-shield"></i> Another action</a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-user"></i> Something else here</a>
                            </li>
                            <li class="divider"> </li>
                            <li>
                                <a href="#">
                                    <i class="icon-bag"></i> Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN DASHBOARD STATS 1-->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                        <div class="visual">
                            <i class="fa fa-comments"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="1349">{{$users}}</span>
                            </div>
                            <div class="desc"> users </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 red" href="#">
                        <div class="visual">
                            <i class="fa fa-bar-chart-o"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="12,5">{{$announcements}}</span></div>
                            <div class="desc"> Requests </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green" href="#">
                        <div class="visual">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="549">{{ $accepted }}</span>
                            </div>
                            <div class="desc"> Approved </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 purple" href="#">
                        <div class="visual">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="details">
                            <div class="number">
                                <span data-counter="counterup" data-value="89">{{$today}}</span></div>
                            <div class="desc"> Announcements today </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- END DASHBOARD STATS 1-->


            <div class="row">
                <div class="col-lg-12 col-xs-12 col-sm-12">
                    <div class="portlet light ">
                        <div class="portlet-title tabbable-line">
                            <div class="caption">
                                <i class="icon-bubbles font-dark hide"></i>
                                <span class="caption-subject font-dark bold uppercase">Requests</span>
                            </div>
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                                </li>
                                <li>
                                    <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                                </li>
                            </ul>
                        </div>
                        <div class="portlet-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="portlet_comments_1">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                      @if(count($requests)==0)
                                      <div class="note note-success"><h3>No pending requests </h3>  </div>

                                         @else

                                       @foreach ($requests as $row)
                                        <div class="mt-comment">
                                          <!-- <div class="note note-success"><h3>No pending requests </h3>  </div> -->
                                            <div class="mt-comment-img">
                                                 <!-- <img src="{{asset('layout_assets/pages/media/users/avatar1.jpg')}}" /> -->
                                                   <img width="100%"src="{{Storage::url( $row->user->avatar)}}" />

                                              </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                <span class="mt-comment-author">{{$row->user->first_name}} {{$row->user->other_names}} </span>
                                                    <span class="mt-comment-date">{{$row->created_at}} </span>
                                                </div>
                                                <div class="mt-comment-text">{{$row->title}} <br/>{{$row->description}} </div>
                                                <div class="mt-comment-details">
                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="{{ route('admin.get.request',$row->id) }}">View</a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('admin.approve.request',$row->id) }}">Approve</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                          @endforeach
                                           @endif

                                    </div>
                                    <!-- END: Comments -->
                                </div>
                                <div class="tab-pane" id="portlet_comments_2">
                                    <!-- BEGIN: Comments -->
                                    <div class="mt-comments">
                                     @if(count($read)==0)
                                          <div class="note note-success"><h3>No sorted requests </h3>  </div>
                                         @else
                                      @foreach ($read as $row)
                                        <div class="mt-comment">
                                            <div class="mt-comment-img">
                                                <img width="100%"src="{{asset('layout_assets/pages/media/users/avatar12.png')}}" />
                                                <!-- <img width="70%"src="{{asset('layout_assets/pages/media/users/avatar1.jpg')}}" /> -->
                                                <!-- <img width="70%" src="{{$row->file_path}}"  > -->
                                              </div>
                                            <div class="mt-comment-body">
                                                <div class="mt-comment-info">
                                                     <span class="mt-comment-author">{{$row->user->first_name}} {{$row->user->other_names}}</span>
                                                    <span class="mt-comment-date">{{$row->created_at}} </span>
                                                </div>
                                                <div class="mt-comment-text">{{$row->title}} <br/>{{$row->description}} </div>
                                                <div class="mt-comment-details">
                                                  @if($row->is_featured==1)
                                                  <span class="mt-comment-status mt-comment-status-approved">Approved</span>

                                                      @else
                                                  <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                  @endif


                                                    <ul class="mt-comment-actions">
                                                        <li>
                                                            <a href="{{ route('admin.get.request',$row->id) }}">View</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>@endforeach
                                        @endif

                                    </div>
                                    <!-- END: Comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <!-- END CONTENT BODY -->
    </div>

</div>
<!-- END CONTAINER -->
@endsection
