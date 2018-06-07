@extends('layouts.app')

@section('content')
<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->

        <!-- END THEME PANEL -->

        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{ route('client.index') }}">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>View  moreannouncements</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"> View
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                        <!-- <li>
                            <a href="#">
                                <i class="icon-bell"></i> Action</a>
                        </li> -->
                        <li>
                            <a href="{{ route('client.country.view') }}">
                                <i class="icon-user"></i>My country</a>
                        </li>
                        <li>
                            <a href="{{ url('/view/announcements')}}">
                                <i class="icon-users"></i>All </a>
                        </li>
                        <li class="divider"> </li>
                        <!-- <li>
                            <a href="#">
                                <i class="icon-bag"></i> Separated link</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE HEADER-->

        <div class="row">

<p>hsdfhjhb</p>

    <!-- BEGIN Portlet PORTLET-->
    <div class="col-lg-12 col-md-12 col-sm-12 ">
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>announcements </div>
                <ul class="nav nav-tabs">
                  <li>
                      <a href="#portlet_tab4" data-toggle="tab"> Anniversaries </a>
                  </li>
                    <li>
                        <a href="#portlet_tab3" data-toggle="tab"> Public Notice</a>
                    </li>
                     <li>
                        <a href="#portlet_tab2" data-toggle="tab"> Missing persons </a>
                    </li>
                    <li class="active">
                        <a href="#portlet_tab1" data-toggle="tab"> Death announcements</a>
                    </li>
                </ul>
            </div>
            <div class="portlet-body">
              <!-- <img width="70%" src="{{ Storage::url('upload/about.PNG')}}"  > -->
                <div class="scroller" style="height:400px" data-rail-visible="1" data-rail-color="yellow" data-handle-color="#a1b2bd">
                <div class="tab-content">
                    <div class="tab-pane active" id="portlet_tab1">

                      <div class="note note-success"><h3>No Death announcements</h3>  </div>


                    </div>
                    <div class="tab-pane" id="portlet_tab2">

                    </div>
                    <div class="tab-pane" id="portlet_tab3">

                    </div>
                    <div class="tab-pane" id="portlet_tab4">

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
        

    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->

</div>

@endsection
