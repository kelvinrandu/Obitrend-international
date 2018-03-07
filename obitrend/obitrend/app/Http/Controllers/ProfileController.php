<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use App\Announcement;
use App\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Str;

class ProfileController extends Controller
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
      $requests = Notification::all();
    return view('client.user-setting',[ 'user' => Auth::user(),'requests' => $requests]);

    }


          /*updates the profile*/
    public function update(Request $request)
      {
        $input=array_filter($request->all());
        $input2= array_slice($input,1);

            foreach ($input2 as $key => $value) {
         Auth::user()->update([
                 $key => $value,
                ]);
              }

           return redirect()->back()->with('message','profile updated successfully');

            }
      //change avatar
      public function avatar(Request $request)
        {
            if($request->hasFile('avatar'))
              {
                  Auth::user()->update([
                      'avatar' => $request->avatar->store('public/defaults/avatars'),
                  ]);


                  return redirect()->back()->with('message','profile picture updated successfully');
              }else{

                  return redirect()->back()->with('message','profile picture failed to update');
              }
          }
}
