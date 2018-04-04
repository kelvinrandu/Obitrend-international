<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use App\Announcement;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Notification;
use App\Notifications\RequestLive;
use Carbon;
//use Illuminate\Support\Str;

class SuperAdminController extends Controller
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
      if(Auth::user()->access_level != 2){

        return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
      }
      //fetches all users

        $users = User::all();
        $requests = Announcement::all();

        return view('SuperAdmin.index',
        array('users' => $users),
        array('requests' =>$requests)
      );


    }
    //admin dashboard
    public function get_all_requests()
    {
      if(Auth::user()->access_level != 2){

        return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
      }
      //fetches all user requests
        $users = count(User::all());
        $announcements = count(Announcement::all());
        $approved = count(Announcement::with('user')->where('is_featured',1)->get());
        $read =  Announcement::with('user')->where('status',1)->get();
        $today = count(Announcement::whereDate('created_at', '>=', \Carbon::today()->toDateString())
               ->get());
        $request  =  Announcement::with('user')->where('status',0)->get();

        return view('admin.view-requests',['requests' => $request, 'read' => $read , 'accepted' => $approved  , 'announcements' =>  $announcements ,'users' => $users ,'today' => $today]);

    }
//demote admin
  public function demote($id)
  {
    if(Auth::user()->access_level != 2){

      return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
    }

    //demote admin function
   $user = User::find($id);

    if($user){
     $user->access_level =0;
     $user->save();

    return redirect()->back()->with('message','admin demoted');

      }

  return redirect()->back()->with('message','admin not demoted');

   }
   //promote user to admin
   public function promote($id)
   {
     if(Auth::user()->access_level != 2){

       return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
     }

     //demote admin function
    $user = User::find($id);

     if($user){
      $user->access_level =1;
      $user->save();

     return redirect()->back()->with('message','user promoted to admin successfully');

       }

   return redirect()->back()->with('message','user not promoted');

    }
}
