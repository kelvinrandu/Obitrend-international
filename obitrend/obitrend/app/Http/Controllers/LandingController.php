<?php

namespace App\Http\Controllers;
use App\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
 // use Illuminate\Http\Response;
 use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
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

//    /* test download*/
//   public function download(){
//
//     $announcement = Announcement::find($id);
//       if($announcement){
//
//     $path =  Announcement::with('user')->where('id',$id)->value('file_path');
//     $file = Storage::get($path);
//
//    // for pdf, it will be 'application/pdf'
//    $type       = Storage::mimeType($path);
//     $fileName   = Storage::name('public/downloads/info.pdf');
//    $fileName   = 'eulogy.pdf';
//
//    return Response::make($file, 200, [
//
//      'Content-Type'        => $type,
//      'Content-Disposition' => 'inline; filename="'.$fileName.'"'
//    ]);
//
//     }
//     //if unsuccesful
//    return redirect()->back()->with('message','download not found');
// }
}
