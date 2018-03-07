<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Session;




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
