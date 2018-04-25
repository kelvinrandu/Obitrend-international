<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
 // use Illuminate\Http\Response;
 use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use InterImage;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use App\User;
use App;
use PDF;




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

}
