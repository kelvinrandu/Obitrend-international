<?php

namespace App\Http\Controllers\API;
use App\Announcement;
use Illuminate\Support\Facades\Input;
use App\Tribute;
use App\Comment;
use App\Profile;
use App\Notification;
use Auth;
use App\User;
use App\Http\Controllers\Controller;
use App\Notifications\requestReceived;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
use InterImage;
use PDF;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;
use Session;




class PassportController extends Controller
{
  public $successStatus = 200;

//login controller
  public function login(){
    if(Auth::attempt(['email'=>request('email'),'password'=>request('password')])){
      $user = Auth::user();
      $success['token']= $user->createToken('MyApp')->
      accessToken;
        $success['user']= $user;
      return response()->json(['success'=>$success],$this
      ->successStatus);
    }else{
      return response()->json(['error'=>'Unauthorised'], 401);

      }
  }
//register controller
  public function register(Request $request){
    $validator = Validator::make($request->all(), [
      'first_name' => 'required|string|max:255',
      'other_names' => 'required|string|max:255',
      'email' => 'required|string|email|max:255|unique:users',
      'password' => 'required|string|min:6',
      'gender' => 'required|boolean',
      'my_country' => 'required',

    ]);

    if ($validator->fails()){
        return response()->json(['error'=>$validator->errors()], 401);
    }

    $input = $request->all();
    if($input['gender'])
  {
    $avatar = 'public/defaults/avatars/male.png';
  }
  else
  {
    $avatar = 'public/defaults/avatars/female.png';
  }
    $input['password'] = bcrypt($input['password']);
    $input['account_status'] = 1;
    $input['access_level'] = 0;
    $input['avatar'] = $avatar;
    $input['slug'] = str_slug($input['first_name']);
    $input['verifyToken']  = Str::random(40);
    $input['status']  = 0 ;

    $user = User::create($input);
    $success['token'] = $user->createToken('MyApp')->
      accessToken;
      $success['first_name'] = $user->first_name;
      $success['message'] = 'Registered!  but verify your email to activate your acccount';
      $success['user']= $user;

      //create a record of the user in the profile table
      Profile::create(['user_id' => $user->id]);

      //after successful registration find the id of the new user and parse it to sendmail function
      $thisUser = User::findOrFail($user->id);
      $this->sendEmail($thisUser);

        return response()->json(['success'=> $success], $this->successStatus);

  }
//this function sends email  newly registered user
  public function sendEmail($thisUser)
  {
     Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));

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
  //this function gets my country announcements
  public function getDetailsCountry($id){

   $user = User::find($id);
    if($user){

      $myCountry= DB::table('users')->where('id',1)
      ->value('my_country');

      //fetches  all approved requests based on type
  $announcements = DB::table('announcements')->where('is_featured',1)
  ->where('type_of_announcement','Deathannouncement')
  ->where('country',$myCountry)
  ->get();
  $missing = DB::table('announcements')->where('is_featured',1)
  ->where('type_of_announcement','Missingperson')
  ->where('country',$myCountry)
  ->get();
  $public = DB::table('announcements')->where('is_featured',1)
  ->where('type_of_announcement','PublicNotice')
  ->where('country',$myCountry)
  ->get();
  $Anniversaries = DB::table('announcements')->where('is_featured',1)
  ->where('type_of_announcement','Anniversaries')
  ->where('country',$myCountry)
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

      $tributes = Tribute::with('user')->where('announcement_id',$id)
          ->get();

          return response()->json(['success'=>$each, 'tributes'=>  $tributes], $this->successStatus);
//else if it is not then fetch comments
    }else{

          $comments = Comment::with('user')->where('announcement_id',$id)
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
      $validator = Validator::make($request->all(), [
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

    /* Fetch the artwork using the id */

          public function upload($id, Request $request){

          $image_path = 'public/upload/'.$id;

          $image = Storage::get($image_path);

          /* Return the file */
           return Image::make($image)->resize(240, 200)->response();

      }

      /* Fetch the artwork using the id */
            public function id($id, Request $request){

            $image_path = 'public/id/'.$id;
            //$image_path = 'public/defaults/avatars/'.$id;

            $image = Storage::get($image_path);

            /* Return the file */
             return Image::make($image)->response();

        }

        /* Fetch the image using the id */
              public function avatar($id, Request $request){


            $image_path = 'public/defaults/avatars/'.$id;

              $image = Storage::get($image_path);

              /* Return the file */
               return Image::make($image)->resize(240, 180)->response();

          }


  /* test download*/
  public function download($id){
    $error = "download unsuccesful";

    $announcement = Announcement::find($id);
      if($announcement){

    $path =  Announcement::with('user')->where('id',$id)->value('file_path');
    $file = Storage::get($path);

   // for pdf, it will be 'application/pdf'
   $type       = Storage::mimeType($path);
   // $fileName   = Storage::name('public/downloads/info.pdf');
   $fileName   = 'eulogy.pdf';

   return Response::make($file, 200, [

     'Content-Type'        => $type,
     'Content-Disposition' => 'inline; filename="'.$fileName.'"'
   ]);

    }
                  //if unsuccesful
    return response()->json(['error'=>$error ], 401);
  }

  //change avatar
  public function update(Request $request)  {
    $success = "success";
    $error = "error";
    $message = "avatar updated succesfully";

            if($request->hasFile('avatar'))
                {
                  Auth::user()->update([
                  'avatar' => $request->avatar->store('public/defaults/avatars'),
                  ]);


                  return response()->json(['success'=>$success,'message'=>$message], $this->successStatus);

                    }else{

                  return response()->json(['error'=>$error ], 401);

                    }
        }

  //Death announcement
    public function deathannouncement(){

    }
  //Public announcements
    public function public(){

    }
//Missing persons
  public function missing(){

  }
  //anniversaries
    public function anniversaries(){

    }

}
