<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use  Auth;
use App\Announcement;
use App\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

              //fetches  all approved requests based on type
          $announcements = DB::table('announcements')->where('is_featured',1)
          ->where('type_of_announcement','Deathannouncement')
          ->get();
          $missing = DB::table('announcements')->where('is_featured',1)
          ->where('type_of_announcement','Missingperson')
          ->get();
          $public = DB::table('announcements')->where('is_featured',1)
          ->where('type_of_announcement','PublicNotice')
          ->get();
          $Anniversaries = DB::table('announcements')->where('is_featured',1)
          ->where('type_of_announcement','Anniversaries')
          ->get();


          $Anniversaries =  array('anniversaries' => $Anniversaries);
          $announcements = array('announcements' => $announcements );
          $missing = array('missing' => $missing);
          $public =  array('public' => $public);

          //merge all requests
          $all = array_merge($public,$Anniversaries,$announcements,$missing);

          //get all notifications.dummy
          $requests = Notification::all();
          //  $file = Storage::disk('public')->get($filename);

             return view('client.view',
             array('all' => $all ),

             array('requests' =>$requests)

           );


    }

        public function my_country()
        {

             $user = Auth::user()->id;
             $me = DB::table('users')->where('id',$user)
             ->get();
             $country = $me[0]->my_country;

                  //fetches  all approved requests based on type
              $announcements = DB::table('announcements')->where('is_featured',1)
              ->where('type_of_announcement','Deathannouncement')->where('country',$country)
              ->get();
              $missing = DB::table('announcements')->where('is_featured',1)
              ->where('type_of_announcement','Missingperson')->where('country',$country)
              ->get();
              $public = DB::table('announcements')->where('is_featured',1)
              ->where('type_of_announcement','PublicNotice')->where('country',$country)
              ->get();
              $Anniversaries = DB::table('announcements')->where('is_featured',1)
              ->where('type_of_announcement','Anniversaries')->where('country',$country)
              ->get();


              $Anniversaries =  array('anniversaries' => $Anniversaries);
              $announcements = array('announcements' => $announcements );
              $missing = array('missing' => $missing);
              $public =  array('public' => $public);

              //merge all requests
              $all = array_merge($public,$Anniversaries,$announcements,$missing);

              //get all notifications.dummy
              $requests = Notification::all();
              //  $file = Storage::disk('public')->get($filename);

                 return view('client.view-announcements',
                 array('all' => $all ),

                 array('requests' =>$requests)

               );

        }

    public function home()
    {
            $requests = Notification::all();
            $user = Auth::user()->id;
            $me = DB::table('users')->where('id',$user)
            ->get();
            $date = Carbon::now('Africa/Nairobi')->format('d:m:y');
            $tempus = Carbon::now('Africa/Nairobi')->format('H:i:s');
            $current = Carbon::now('Africa/Nairobi')->format('H');
            if (($current<12) && ($current>=00)){
              $time = 'morning';
            }
            elseif (($current>=12) && ($current<16)){
              $time = 'afternoon';
            }
            else
              $time = 'evening';

            return view('home',[  'user' => Auth::user() , 'requests' =>   $requests , 'time' => $time, 'date' => $date, 'tempus' => $tempus, 'current' => $current ]);
    }



}
