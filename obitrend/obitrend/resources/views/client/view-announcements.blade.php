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
                        <span>View announcements</span>
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
 <!-- <div class="col2">
            <div id="js-filters-juicy-projects" class="cbp-l-filters-button">
                                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item btn dark btn-outline uppercase"> All
                                            <div class="cbp-filter-counter"></div>
                                        </div>
                                        <div data-filter=".identity" class="cbp-filter-item btn dark btn-outline uppercase"> Identity
                                            <div class="cbp-filter-counter"></div>
                                        </div>
                                        <div data-filter=".web-design" class="cbp-filter-item btn dark btn-outline uppercase"> Web Design
                                            <div class="cbp-filter-counter"></div>
                                        </div>
                                        <div data-filter=".graphic" class="cbp-filter-item btn dark btn-outline uppercase"> Graphic
                                            <div class="cbp-filter-counter"></div>
                                        </div>
                                        <div data-filter=".logos" class="cbp-filter-item btn dark btn-outline uppercase"> Logo
                                            <div class="cbp-filter-counter"></div>
                                        </div> -->


            <div class="row">

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
                                  @if(count($all['announcements'])==0)
                                  <div class="note note-success"><h3>No Death announcements</h3>  </div>
                                     @else
                                  @foreach ($all['announcements'] as $row)
                                    <div class ="col-lg-12">
                                  <div class ="col-lg-2 col-md-2 col-sm-2">
                                      <img width="70%" src="{{Storage::url($row->image_thumb)}}" /></div>
                                    {{$row->title}}<br/>
                                    <p> {{$row->description}} </p>
                                        <div class="actions pull-right">
                                            <a href="{{ route('client.each.announcement',$row->id) }}" class="btn blue btn-sm">
                                                <i class="fa fa-eye"></i> View </a>

                                        </div><br/>
                                        <hr/>
                                        </div>
                                    @endforeach

                                       @endif

                                </div>
                                <div class="tab-pane" id="portlet_tab2">
                              @if(count($all['missing'])==0)
                                      <div class="note note-success"><h3>No missing persons </h3>  </div>
                                      @else
                                    @foreach ($all['missing'] as $row)
                                  <div class ="col-lg-2 col-md-2 col-sm-2">

                                    <img width="70%" src=" {{Storage::url($row->image_thumb)}}"  >
                                       </div>

                                    {{$row->title}}<br/>
                                    <p> {{$row->description}} </p>
                                        <div class="actions pull-right">

                                            <div class="btn-group">  <a href="{{ route('client.each.announcement',$row->id) }}" class="btn blue btn-sm">
                                                  <i class="fa fa-eye"></i> View </a>


                                            </div>
                                        </div><br/>
                                        <hr/>
                                    @endforeach

                                   @endif
                                </div>
                                <div class="tab-pane" id="portlet_tab3">
                                  @if(count($all['public'])==0)
                                  <div class="note note-success"><h3>No public announcements</h3>  </div>
                                     @else
                                  @foreach ($all['public'] as $row)
                                    <div class ="col-lg-12">
                                  <div class ="col-lg-2 col-md-2 col-sm-2">
                                      <img width="70%" src="{{Storage::url($row->image_thumb)}}" /></div>
                                    {{$row->title}}<br/>
                                    <p> {{$row->description}} </p>
                                        <div class="actions pull-right">
                                            <a href="{{ route('client.each.announcement',$row->id) }}" class="btn blue btn-sm">
                                                <i class="fa fa-eye"></i> View </a>

                                        </div><br/>
                                        <hr/>
                                        </div>
                                    @endforeach

                                       @endif

                                </div>
                                <div class="tab-pane" id="portlet_tab4">
                              @if(count($all['anniversaries'])==0)
                                    <div class="note note-success"><h3>No anniversaries</h3>  </div>

                                     @else


                                      @foreach ($all['anniversaries'] as $row)
                                  <div class ="col-lg-2 col-md-2 col-sm-2">
                                    <!-- <img width="70%" src="{{ URL::asset('layout_assets/img/clients/male.png')}}"  > -->
                                       <!-- <img width="70%" src="{{ $row->image_path}}"  > -->
                                        <img width="70%" src="{{ $row->image_thumb}}"  >
                                       </div>


                                    {{$row->title}}<br/>
                                    <p>{{$row->description}} </p>
                                        <div class="actions pull-right">

                                            <div class="btn-group">

                                              <a href="{{ route('client.each.announcement',$row->id) }}" class="btn blue btn-sm">
                                                  <i class="fa fa-eye"></i> View </a>

                                            </div>
                                        </div><br/>
                                        <hr/>
                                    @endforeach
                                     @endif

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
