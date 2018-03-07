<?php

namespace App\Http\Controllers\API;
use App\Announcement;
use App\Notification;
use  Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;




class PassportController extends Controller
{
  public $successStatus = 200;



  public function login(){
    if(Auth::attempt(['email'=>request('email'),'password'=>request('password')])){
      $user = Auth::user();
      $success['token']= $user->createToken('MyApp')->
      accessToken;
      return response()->json(['success'=>$success],$this
      ->successStatus);
    }else{
      return response()->json(['error'=>'Unauthorised'], 401);

      }
  }

  public function register(Request $request){
    $validator = Validator::make($request->all(), [
      'first_name' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
     'password' => 'required|string|min:6',
      'gender' => 'required|boolean',
      'my_country' => 'required',

    ]);

    if ($validator->fails()){
        return response()->json(['error'=>$validator->errors()], 401);
    }
    $input = $request->all();
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input);
    $success['token'] = $user->createToken('MyApp')->
      accessToken;
      $success['first_name'] = $user->first_name;
        return response()->json(['success'=> $success], $this->successStatus);

  }
  public function getDetails(){
    $user = Auth::user();
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

      return response()->json(['success'=> $user, 'data'=>$all], $this->successStatus);

  }
}
