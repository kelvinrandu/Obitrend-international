@extends('layouts.app')

@section('content')

    <!-- END SIDEBAR -->
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
            <h1 class="page-title">Approve request

            </h1>
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                              @if(Storage::disk('local')->has($requests[0]->user->avatar))
                            <img src="{{Storage::url( $requests[0]->user->avatar)}}"   class="img-responsive" alt=""> </div>
                              @else
                                <img width="100%"src="{{$requests[0]->user->avatar}}" />
                              @endif

                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->

                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> {{$requests[0]->user->first_name}} {{$requests[0]->user->other_names}}</div>
                                <div class="profile-usertitle-job">  {{$requests[0]->phone }} </div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            @if(($requests[0]->status==1)&&($requests[0]->is_featured==1))



                            <div class="profile-userbuttons">
                              <a  href="{{ route('admin.view.requests') }}" class="btn btn-circle green btn-sm"><span class="hidden-xs">Back</span>  </a>

                              <a  href="{{ route('admin.decline.request',$requests[0]->id) }}" class="btn btn-circle red btn-sm"><span class="hidden-xs"> DECLINE </span>  </a>

                                <!-- <button type="button" class="btn btn-circle green btn-sm">Approve</button> -->
                                <!-- <button type="button" class="btn btn-circle red btn-sm">Decline</button> -->
                            </div>
                              @elseif(($requests[0]->status==1)&&($requests[0]->is_featured==0))
                              <div class="profile-userbuttons">
                                <a  href="{{ route('admin.approve.request',$requests[0]->id) }}" class="btn btn-circle green btn-sm"><span class="hidden-xs"> APPROVE</span>  </a>

                                <a  href="{{ route('admin.view.requests') }}" class="btn btn-circle green btn-sm"><span class="hidden-xs"> back </span>  </a>

                                  <!-- <button type="button" class="btn btn-circle green btn-sm">Approve</button> -->
                                  <!-- <button type="button" class="btn btn-circle red btn-sm">Decline</button> -->
                              </div>
                            @else
                            <div class="profile-userbuttons">
                              <a  href="{{ route('admin.approve.request',$requests[0]->id) }}" class="btn btn-circle green btn-sm"><span class="hidden-xs"> Approve </span>  </a>

                              <a  href="{{ route('admin.decline.request',$requests[0]->id) }}" class="btn btn-circle red btn-sm"><span class="hidden-xs"> Decline </span>  </a>
                               </div>
                        @endif
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">

                            </div>
                            <!-- END MENU -->
                        </div>

                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Request</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Request</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">Id scan</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Payment</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- GENERAL QUESTION TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <div id="accordion1" class="panel-group">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">

                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1"> Title: {{$requests[0]->title}} </a>

                                                            </h4>
                                                        </div>
                                                        <div id="accordion1_1" class="panel-collapse collapse in">
                                                            <form action="{{ route('update.request') }} " method = "post" role="form">
                                                                {{csrf_field()}}
                                                          <div contenteditable="true">


                                                            <div class="panel-body">{{$requests[0]->description}} </div>
                                                             <input  type="hidden" name="id" value="{{$requests[0]->id}}" class="form-control"  />

                                                                <input  type="text" name="title"  placeholder="{{$requests[0]->title}}" class="form-control"  />

                                                                    <textarea class="form-control" rows="3" name="description" placeholder="{{$requests[0]->description}}"></textarea>
                                                            <div class="margin-top-10">
                                                              <button type="submit" class="btn green">Save</button>
                                                                <a href="javascript:;" class="btn default"> Cancel </a>
                                                            </div>
                                                            </form>
                                                        </div>
                                                          </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- END GENERAL QUESTION TAB -->
                                            <!-- MEMBERSHIP TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <div id="accordion2" class="panel-group">
                                                  <div class="blog-single-img">


                                                      <img width="70%" src="{{Storage::url($requests[0]->image_path)}}" /></div>

                                                    <div class="panel panel-default">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END MEMBERSHIP TAB -->
                                            <!-- TERMS OF USE TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <div id="accordion3" class="panel-group">
                                                    <div class="panel panel-danger">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title">
                                                                <a class="accordion-toggle accordion-toggle-styled" data-toggle="collapse" data-parent="#accordion3" href="#accordion3_1"> code: {{$requests[0]->payment}} </a>
                                                            </h4>
                                                        </div>

                                                    </div>
                                                      <!-- ANNOUNCEMENT BANNER -->
                                                    <div class="blog-single-img">


                                                        <img width="70%" src="{{Storage::url($requests[0]->image_thumb)}}" /></div>
                                                             <!-- END HERE -->
                                                </div>
                                            </div>
                                            <!-- END TERMS OF USE TAB -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
    <!-- BEGIN QUICK SIDEBAR -->

    <!-- END QUICK SIDEBAR -->
</div>
<!-- END CONTAINER -->
@endsection
