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
                              <a href="javascript:void(0);" onclick="fb_share('{{ $url }}', '{{ $request[0]->title }}')" class="fbBtm">  <i class="fa fa-linkedin"></i>facebook </a>`

                              </li>
                              <li>
                                  <a href="javascript:;">
                                      <i class="fa fa-linkedin"></i> Linkedin </a>
                              </li>
                              <li>
                                  <a href="javascript:;">
                                      <i class="fa fa-twitter"></i> Twitter</a>
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


                            </div>
                            <div class="blog-single-foot pull-right">
                                <!-- <h3 class="blog-single-head-title pull-right">{{ $request[0]->title }}</h3> -->
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
@endsection
