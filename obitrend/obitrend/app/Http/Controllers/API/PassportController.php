<?php

namespace App\Http\Controllers\API;
use App\Announcement;
use Illuminate\Support\Facades\Input;
use App\Tribute;
use App\Comment;
use App\Notification;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use App\Notifications\requestReceived;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
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
  //this function gets all announcements
  public function getDetails(){
    $user = Auth::user();
    if($user){

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
  }else{
    //if not succesfull then return error
      $error = "not found";
    return response()->json(['error'=>$error ], 401);
    }
  }

  //this function gets each announcement and their necessary comments
  public function eachAnnouncement($id){
    //get each announcement by id
    $each = DB::table('announcements')->where('is_featured',1)
    ->where('id',$id)
    ->get();

//if the announcement is death announcement then fetch tributes
    if($each[0]->type_of_announcement =='Deathannouncement'){

      $tributes = DB::table('tributes')->where('announcement_id',$id)
          ->get();

          return response()->json(['success'=>$each, 'tributes'=>  $tributes], $this->successStatus);
//else if it is not then fetch comments
    }else{

          $comments = DB::table('comments')->where('announcement_id',$id)
          ->get();
          return response()->json(['success'=>$each, 'comments'=>  $comments ], $this->successStatus);

    }
    //if not succesfull then return error
      $error = "not found";
    return response()->json(['error'=>$error ], 401);

    }

//create announcement
    public function createAnnouncement(Request $request){

          $user_id = Auth::user()->id;
          $success = "success";
          $error = "error";
          $message = "request received successfully";

           //checks for file upload(id picture)
          $this->validate($request,[
         'description' => 'max:255',
         'image_path' => 'required|image',
      ]);

      if ($validator->fails()){
          return response()->json(['error'=>$validator->errors()], 401);
      }
            if ($request->hasFile('image_path')&&$request->hasFile('image_thumb')&&$request->hasFile('file'))
            {

                 $path = $request->image_path->store('public/id');
                 $file = $request->image_thumb->store('public/upload');
                 $download = $request->file->store('public/downloads');


            //creates announcements


                 Announcement::create(array(

                     'user_id'=>Auth::user()->id,
                     'type_of_announcement'=>Input::get('type_of_announcement'),//type of announcement
                     'image_thumb'=>$file,   //image of post
                     'image_path'=>$path,    //picture of id
                     'description'=>Input::get('description'),  // description of announcement
                     'country'=>Input::get('country'),
                     'file_path'=>$download, // path to uploaded files
                     'location'=>Input::get('location'),// location of post/death announcement
                     'payment'=>Input::get('payment'), //payment token
                      'days'=>Input::get('days'),// days client wants to show his/her announcement
                     'is_featured'=>0,//default
                     'status'=>0, //default
                     'title'=>Input::get('title') //title of announcement

                   ));
                   //if successful redirect to dashboard

                     $user = User::find($user_id);
                     $user->notify(new requestReceived());


   return response()->json(['success'=>$success, 'message'=>$message ], $this->successStatus);

            }elseif ($request->hasFile('image_path')&&$request->hasFile('image_thumb')) {


                 $path = $request->image_path->store('public/id');
                $file = $request->image_thumb->store('public/upload');
                  // $download = $request->file->store('public/downloads');

              //creates announcements

                   Announcement::create(array(
                       'user_id'=>Auth::user()->id,
                       'type_of_announcement'=>Input::get('type_of_announcement'),
                       'image_thumb'=>$file,
                       'image_path'=>$path,
                       'description'=>Input::get('description'),
                       'country'=>Input::get('country'),
                       // 'file_path'=>$download,
                       'location'=>Input::get('location'),
                       'payment'=>Input::get('payment'),
                        'days'=>Input::get('days'),
                       'is_featured'=>0,
                       'status'=>0,
                       'title'=>Input::get('title')

                     ));
                     //if successful redirect to dashboard

                        $user = User::find($user_id);
                        $user->notify(new requestReceived() );

                        return response()->json(['success'=>$success, 'message'=>$message ], $this->successStatus);
            }

              return response()->json(['success'=>$success , 'message'=>$message ], $this->successStatus);

    }

//create comment
  public function createComment(Request $request){

    $id = Input::get('announcement_id');
    $success = "success";
    $error = "error";
    $message = "comment posted successfully";


  if($id){
     //creates comments
    Comment::create(array(
              'announcement_id'=>$id,
              'user_id'=>Auth::user()->id,
              'comment'=>Input::get('comment')

            ));

               //if succesful
               return response()->json(['success'=>$success,'message'=>$message ], $this->successStatus);

              }

           //if unsuccesful
            return response()->json(['error'=>$error ], 401);

        }



  //create tributes
  public function createTributes(Request $request){

    $id = Input::get('announcement_id');
    $success = "success";
    $error = "error";
    $message = "tribute posted successfully";

    if($id){

      //creates tributes
     Tribute::create(array(
               'announcement_id'=>$id,
               'user_id'=>Auth::user()->id,
               'comment'=>Input::get('comment')

             ));
               return response()->json(['success'=>$success,'message'=>$message], $this->successStatus);

          }
          return response()->json(['error'=>$error ], 401);

    }

}
