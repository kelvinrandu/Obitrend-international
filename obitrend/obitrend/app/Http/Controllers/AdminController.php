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

class AdminController extends Controller
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
      if(Auth::user()->access_level != 1){

        return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
      }
      //fetches all users

        $users = User::all();
        $requests = Announcement::all();

        return view('admin.index',
        array('users' => $users),
        array('requests' =>$requests)
      );


    }
    public function get_all_requests()
    {
      if(Auth::user()->access_level != 1){

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

    //function that gets each request
    public function get_request($id)
    {
      if(Auth::user()->access_level != 1){

        return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
      }

        $request =  Announcement::with('user')->where('id',$id)->get();
        // $request = DB::table('announcements')->with('user')->where('id',$id)
        // ->get();
        return view('admin.approve-requests',

         array('requests' =>$request)
         );
        // return $request;


    }

    public function block($id)
    {
      if(Auth::user()->access_level != 1){

        return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
      }

      //blocks user

       $user = User::find($id);
      if($user){
       $user->status =0;
       $user->save();

         return Redirect::to('/admin')->with('message','User blocked successfully');


        }

        return Redirect::to_route('/admin')->with('message','User blocking unsuccessful');

     }


    public function decline_request($id)
    {
      if(Auth::user()->access_level != 1){

        return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
      }
      // make request as read
    $announcement = Announcement::find($id);
      if($announcement){
        $announcement->status =1;
        $announcement->is_featured = 0;
        $announcement->save();
        //notify user //activate after creating notification
        // $me = DB::table('announcements')->where('id',$id)
        // $user = User::find($me);
        // $user->notify(new requestLive());

        return Redirect::to('/admin')->with('message','request declined successfully');

        }

       return Redirect::to('/admin')->with('message','request declined was unsuccessfull');

    }

    public function approve_request($id)
    {
      if(Auth::user()->access_level != 1){

        return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
      }
      //approves user requests
      $announcement = Announcement::find($id);
      if($announcement){
        $announcement->is_featured = 1;
        $announcement->status = 1;
        $announcement->is_featured_dirty =  \Carbon\Carbon::now();

        $announcement->save();
        //find the user who made the request
        $me = DB::table('announcements')->where('id',$id)
        ->value('user_id');
        //notify the user by mail
        $user = User::find($me);
        $user->notify(new requestLive());

        return Redirect::to('/admin')->with('message','request approved successfully');
      }

        return Redirect::to('/admin')->with('message','request approved was unsuccessfull');

    }
    //edit announcement function
    public function updateRequest( Request $request)
    {
      if(Auth::user()->access_level != 1){

        return redirect()->back()->withErrors(['message' =>'Access denied!!!']);
      }
      //     /* edit function comes here */
        $response1 =  $request->all();
        $id=$response1['id'];
        $title=$response1['title'];
        $description=$response1['description'];
      $input1=$request->except('_token','id');

    //if no edit data is passed
      if( $title == NULL && $description == NULL ){


       return redirect()->back()->with('message','announcement not edited...please try again');

      }
       /* edit function comes here */
            $input=array_filter($input1);
            $announcement = Announcement::find($id);
            if($announcement){

                    foreach ($input as $key => $value) {
                    $announcement->update([
                        $key => $value,
                       ]);
                       }
                /* edit function ends here */
           return redirect()->back()->with('message','announcement edited successfully');


    }
}
}
