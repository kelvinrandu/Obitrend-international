<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verifyEmail;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
           'password' => 'required|string|min:6',
            'gender' => 'required|boolean',
            'my_country' => 'required',
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
  Session::flash('status','Registered! but verify your email to activate your acccount');
          // $fr = "TANZANIA" ;
        if($data['gender'])
      {
        $avatar = 'public/defaults/avatars/male.png';
      }
      else
      {
        $avatar = 'public/defaults/avatars/female.png';
      }

        $user =  User::create([
            'first_name' => $data['first_name'],
            'other_names' => $data['other_names'],
            'email' => $data['email'],
            'phone_number' => $data['phone'],
            'password' => bcrypt($data['password']),
            'access_level' => 0,
            'gender' => $data['gender'],
            'my_country' => $data['my_country'],
            'slug' => str_slug($data['first_name']),
            'account_status' => 1,
            'avatar' => $avatar,
            'verifyToken' => Str::random(40),
            'status' => 0,

        ]);

       Profile::create(['user_id' => $user->id]);
       $thisUser = User::findOrFail($user->id);
       $this->sendEmail($thisUser);

        return $user;
    }
    //send email
    public function sendEmail($thisUser)
    {
       Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));

    }
    //verify email function
      public function verifyEmailFirst()
      {
           return view('email.verifyEmailFirst');

      }
      //verify email function
      public function sendEmailDone($email,$verifyToken)
      {
          Session::flash('status','Account verified...you may login in');
         $user = User::where(['email'=>$email,'verifyToken'=>$verifyToken])->first();
         if($user){
            User::where(['email'=>$email,'verifyToken'=>$verifyToken])->update(['status'=>'1','verifyToken'=>NULL ]);
              return redirect(route('login'));

         }else{
           return 'User not found';
         }
      }
}
