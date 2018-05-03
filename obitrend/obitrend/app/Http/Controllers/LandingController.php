<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Tribute;
use App\Comment;
use Illuminate\Support\Facades\Storage;
 // use Illuminate\Http\Response;
 use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use App\User;
use App;
use PDF;
use App\Notification;




class LandingController extends Controller
{

      /**
       * Show the application dashboard.
       *
       * @return \Illuminate\Http\Response
       */


  public function index()
  {
      return view('about-us');
  }
  public function pricing()
  {
      return view('pricing');
  }
  public function welcome()
  {
      return view('welcome');
  }
  public function get_each_announcements($id)
  {
    //gets each announcement
      $request =  Announcement::with('user')->where('id',$id)->get();
      $tribute =  Tribute::with('user')->where('announcement_id',$id)->get();
      $comment =  Comment::with('user')->where('announcement_id',$id)->get();

     $requests = Notification::all();

//return $time->diffForHumans();
 return view('client.view-each-announcements',['requests' => $requests, 'request' => $request ,'tribute' => $tribute  ,'comment' =>$comment ]);

  }
  /* Fetch the artwork using the id */
        public function upload($id, Request $request){

        $image_path = 'public/upload/'.$id;

        $image = Storage::get($image_path);

        /* Return the file */
         return Image::make($image)->resize(240, 200)->response();

    }

      /* Fetch the image using the id */
            public function avatar($id, Request $request){


          $image_path = 'public/defaults/avatars/'.$id;

            $image = Storage::get($image_path);

            /* Return the file */
             return Image::make($image)->resize(240, 180)->response();

        }
}
