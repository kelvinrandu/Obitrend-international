@extends('layouts.app')

@section('content')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <!-- BEGIN THEME PANEL -->

            <!-- END THEME PANEL -->

    @if(Session::has('message'))
        <div class="alert alert-success"><em> {!! session('message') !!}</em></div>
    @endif


            <!-- END PAGE HEADER-->

						    <div class="row">
						        <div class="col-md-12  w-25 p-3 ">
						            <!-- BEGIN PROFILE SIDEBAR -->
						            <div class="profile-sidebar1 view">
						                <!-- PORTLET MAIN -->
						                <div class="portlet lights profile-sidebar-portlet ">
						                <!-- SIDEBAR USERPIC -->
						                  <div class="people profile-head">


                                  <div class="profile-userpic">
                                    @if(Storage::disk('local')->has($user->avatar))
                                      <img  class="img-rounded" src="{{ Storage::url($user->avatar)}}" />
                                    @else
                                      <img width="100%"src="{{$user->avatar}}" />
                                    @endif


                                     </div>

						                    <div class="profile-usertitle">
						                        <div class="profile-usertitle-name">{{$user->first_name}} {{$user->other_names}}</div>
						                        <!-- <div class="profile-usertitle-job"> biograpyy</div> -->


						                    </div>
						                  </div>
						                </div>
						            <!-- END SIDEBAR USER TITLE -->
						            </div>
						            <!-- END PORTLET MAIN -->
						        </div>
						    </div>

						<div class="row">
						    <div class="col-md-12 ly">
						        <div class="panel panel-default" style="border-radius: 1px !important">
						            <div class="panel-heading">
						                <p style="font-size: 16px; font-weight: 400; margin:0; text-transform: none">Good {{$time}}, {{$user->first_name}} {{$user->other_names}}. What would you like to do?<span class="pull-right time">{{$tempus}}</span></p>
						            </div>
						            <div class="panel-body home" style="padding:30px 0">
						                <div class="col-md-6 odin" style="border-right: 1px dotted #000; padding:0 35px">
						                    <div class="row">
						                        <div class="col-md-4">
						                            <a class=" btn title green btn-outline "  style="background-color: #f47b00!important;border-color: #f47b00; width: 147px" href="{{ url('/announcements/make')}}" > Make&nbsp;<i class="fa fa-pencil"></i></a>
						                        </div>
						                        <div class="col-md-8">
						                            <p class="title">
						                                <span class="titles">Make your announcement and send it for review by the admin before it is published on the site .</span>
						                            </p>
						                        </div>
						                    </div><br><br>
						                    <div class="row">
						                        <div class="col-md-4">
						                            <a class=" btn title green btn-outline " style="background-color: #339f8a!important;border-color: #339f8a; width: 147px" href="{{ url('/profile/edit/profile')}}"> Update&nbsp;<i class="fa fa-group"></i></a>
						                        </div>
						                        <div class="col-md-8">
						                            <p class="title">
						                                <span class="titles">Add , delete or update your profile </span>
						                            </p>
						                        </div>
						                    </div>

						                </div>
						                <div class="col-md-6 thor" style=" padding:0 35px">

						                    <div class="row">
						                        <div class="col-md-4">
						                            <a class=" btn title green btn-outline "  style="background-color: #a82425!important;border-color: #a82425; width: 147px" href="{{ url('/view/announcements')}}">view&nbsp; <i class="fa fa-eye"></i></a>
						                        </div>
						                        <div class="col-md-8">
						                            <p class="title">
						                                <span class="titles">Get to view  all the announcements published on the site and comment</span>
						                            </p>
						                        </div>
						                    </div>
                                  @if(Auth::user()->access_level == 1)
						                    <br><br>
						                    <div class="row">
						                        <div class="col-md-4">
						                            <a class=" btn title green btn-outline "  style="background-color: 	#0b699c!important;border-color: #0b699c; width: 147px" href="{{route('admin.index')}}"> Admin &nbsp;<i class="fa fa-gavel"></i></a>
						                        </div>
						                        <div class="col-md-8">
						                            <p class="title">
						                                <span class="titles">Switch to admin dashboard and view,approve or reject requests</span>
						                            </p>
						                        </div>
						                    </div>
						                      @endif
                                  @if(Auth::user()->access_level == 2)
                                <br><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class=" btn title green btn-outline "  style="background-color: 	#0b699c!important;border-color: #0b699c; width: 147px" href="{{route('super.admin.index')}}"> Admin &nbsp;<i class="fa fa-gavel"></i></a>
                                    </div>
                                    <div class="col-md-8">
                                        <p class="title">
                                            <span class="titles">Switch to administrator dashboard and manage admin</span>
                                        </p>
                                    </div>
                                </div>
                                  @endif
						                </div>


						            </div>
						        </div>

						    </div>
						</div>
						    <div class="foot" style="display: none;">
						        <p>2018 Copyright, OBITREND INTERNATIONAL</p>
						    </div>
						</div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->
    <div class="foot" style="display: none;">
        <p>2018 Copyright, OBITREND INTERNATIONAL</p>
    </div>

@endsection
