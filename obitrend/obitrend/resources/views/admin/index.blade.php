@extends('layouts.app')

@section('content')

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
            <h1 class="page-title"> User Management

            </h1>
            <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ route('home') }}">Home</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Users</a>
                        <i class="fa fa-angle-right"></i>
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

            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light ">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject bold uppercase"> Users</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided" data-toggle="buttons">
                                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                                        <input type="radio" name="options" class="toggle" id="option1">Actions</label>
                                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                                        <input type="radio" name="options" class="toggle" id="option2">Settings</label>
                                </div>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <div class="table-toolbar">
                                <div class="row">
                                    <div class="col-md-4">
                                      <form class="search-form search-form-expanded" action="page_general_search_3.html" method="GET">
                                          <div class="input-group">
                                              <input type="text" class="form-control" placeholder="Search..." name="query">
                                              <span class="input-group-btn">
                                                  <a href="javascript:;" class="btn submit">
                                                      <i class="icon-magnifier"></i>
                                                  </a>
                                              </span>
                                          </div>
                                      </form>
                                        <!-- <div class="btn-group">
                                            <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn-group pull-right">
                                            <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-print"></i> Print </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <thead>
                                    <tr>

                                        <th>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                <span></span>
                                            </label>
                                        </th>
                                        <th> Username </th>
                                        <th> Email </th>
                                        <th> Status </th>
                                        <th> Joined </th>
                                        <th> Block </th>
                                    </tr>
                                </thead>
                                <tbody>  @foreach ($users as $row)

                                    <tr class="odd gradeX">
                                        <td>
                                            <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                <input type="checkbox" class="checkboxes" value="1" />
                                                <span></span>
                                            </label>
                                        </td>
                                        <td>   {{$row->first_name}}   {{$row->other_names}} </td>
                                        <td>
                                            {{$row->email}}
                                        </td>
                                        <td>

                                          @if($row->account_status==1)
                                          <span class="label label-sm label-success"> Active </span>

                                              @else
                                           <span class="label label-sm label-danger"> Blocked </span>
                                          @endif








                                        </td>
                                        <td class="center"> {{$row->created_at}} </td>
                                        <td>

                                          <a  href="{{ route('admin.block.user',$row->id) }}" class="btn blue-chambray btn-outline btn-sm">
                              <i class="fa fa-trash"></i>
                              <span class="hidden-xs"> block </span>
                          </a>
                                            <!-- <div class="btn-group">
                                                <button hidden="{{$row->id}}" action ="{{ route('admin.get.request',$row->id) }}" class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Block

                                                </button>

                                            </div> -->
                                        </td>
                                    </tr>@endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>

        </div>
        <!-- END CONTENT BODY -->
    </div>

</div>
@endsection
