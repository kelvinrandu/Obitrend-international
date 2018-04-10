<?php

namespace App\Http\Controllers;
use  Auth;
use App\Announcement;
use App\Notification;
use App\Comment;
use App\Tribute;
use Illuminate\Http\Request;
use App\Notifications\requestReceived;
use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Http\Response;
 use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use InterImage;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use App\User;
use App;
use PDF;





class AnnouncementController extends Controller
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


//fetches make request view
  public function index()
  {
      $requests = Notification::all();
      return view('client.make-announcements',array('requests' => $requests ));
  }

  //fetches  all approved requests
    public function announcements()
    {
         $announcements = DB::table('announcements')->where('is_featured',1)->get();
        //return view('client.view-announcements');
         return view('client.view-announcements',array('request' => $announcements ));
    }

// model make request data from form
  public function create(request $request)
  {

        $user_id = Auth::user()->id;

    //checks for file upload(id picture)
    $this->validate($request,[
   'description' => 'max:255',
   'image_path' => 'required|image',
   'file_path' => 'required|mimes:pdf'
]);
      if ($request->hasFile('image_path')&&$request->hasFile('image_thumb')&&$request->hasFile('file'))
      {

           $path = $request->image_path->store('public/id');
           $file = $request->image_thumb->store('public/upload');
           $download = $request->file->store('public/downloads');


      //creates announcements


           Announcement::create(array(
               'content'=>Input::get('content'),
               'user_id'=>Auth::user()->id,
               'type_of_announcement'=>Input::get('fullname'),
               'image_thumb'=>$file,
               'image_path'=>$path,
               'description'=>Input::get('description'),
               'country'=>Input::get('country'),
               'file_path'=>$download,
               'location'=>Input::get('location'),
               'payment'=>Input::get('card_name'),
                'days'=>Input::get('days'),
               'is_featured'=>0,
               'status'=>0,
               'title'=>Input::get('address')

             ));
             //if successful redirect to dashboard

               $user = User::find($user_id);
               $user->notify(new requestReceived() );
         return redirect()->route('client.index')->with('message','request received successfully');

      }elseif($request->hasFile('image_path')&&$request->hasFile('image_thumb')) {


             $path = $request->image_path->store('public/id');
             $file = $request->image_thumb->store('public/upload');

        //creates announcements

             Announcement::create(array(
                 'content'=>Input::get('content'),
                 'user_id'=>Auth::user()->id,
                 'type_of_announcement'=>Input::get('fullname'),
                 'image_thumb'=>$file,
                 'image_path'=>$path,
                 'description'=>Input::get('description'),
                 'country'=>Input::get('country'),
                 // 'file_path'=>$download,
                 'location'=>Input::get('location'),
                 'payment'=>Input::get('card_name'),
                  'days'=>Input::get('days'),
                 'is_featured'=>0,
                 'status'=>0,
                 'title'=>Input::get('address')

               ));
               //if successful redirect to dashboard

                  $user = User::find($user_id);
                  $user->notify(new requestReceived() );

         return redirect()->route('client.index')->with('message','request received successfully');
      }
      else{

          return redirect()->back()->with('message','please upload a picture of your id');

      }

        return redirect()->route('client.index')->with('message','request received successfully');
  }

//creates tributes
  public function create_comment(request $request )
  {
     $id = Input::get('announcement_id');
      //creates tribute
     Tribute::create(array(
               'announcement_id'=>$id,
               'user_id'=>Auth::user()->id,
               'comment'=>Input::get('comment')

             ));
             //if successful redirect to dashboard
    return redirect()->back()->with('message','Tribute posted successfully');

  }

  //creates comments
  public function create_comments(request $request )
  {
     $id = Input::get('announcement_id');
      //creates tribute
     Comment::create(array(
               'announcement_id'=>$id,
               'user_id'=>Auth::user()->id,
               'comment'=>Input::get('comment')

             ));
             //if successful redirect to dashboard
    return redirect()->back()->with('message','comment posted successfully');

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

  // update function
    public function update(request $request , $id)
    {
        $announcement = Announcement::find($id);
        $announcement->description =$request->input('description');
        $announcement->location =$request->input('location');
        //$announcement->content =$request->input('content');
        $announcement->save();
        return "successful update #".$announcement->id;

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
      public function download(){
        // $pdfContent = Storage::get($filePath);
        $file = Storage::get('public/downloads/lego.pdf');

       // for pdf, it will be 'application/pdf'
       $type       = Storage::mimeType('public/downloads/lego.pdf');
       // $fileName   = Storage::name('public/downloads/info.pdf');
       $fileName   = 'eulogy.pdf';

       return Response::make($file, 200, [
         'Content-Type'        => $type,
         'Content-Disposition' => 'inline; filename="'.$fileName.'"'
       ]);

        }
}
