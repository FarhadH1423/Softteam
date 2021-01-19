<?php

namespace App\Http\Controllers\Admin;


use App\Models\Generalsetting;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Classes\GeniusMailer;

use Validator;
use Session;
use DB;
use App;



class LoginController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
      // $this->language = DB::table('admin_languages')->where('is_default','=',1)->first();
      // App::setlocale($this->language->name);
    }

    public function showLoginForm()
    {
      return view('admin.login');
    }


    public function login(Request $request)
    {

        
        
        //--- Validation Section
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            
        ]);
        
        //--- Validation Section Ends
            
      // Attempt to log the user in
      if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
        // if successful, then redirect to their intended location
        // return response()->json(route('admin.dashboard'));
        // return redirect(route('admin.dashboard'));

        return redirect()->route('admin.dashboard');
      }

      // if unsuccessful, then redirect back to the login with the form data
     return back()->with('message','Doesnt match');    
    }
    
    // public function showForgotForm()
    // {
    //   return view('admin.forgot');
    // }

    // public function forgot(Request $request)
    // {
    //   $gs = Generalsetting::findOrFail(1);
    //   $input =  $request->all();
    //   if (Admin::where('email', '=', $request->email)->count() > 0) {
    //   // user found
    //   $admin = Admin::where('email', '=', $request->email)->firstOrFail();
    //   $autopass = str_random(8);
    //   $input['password'] = bcrypt($autopass);
    //   $admin->update($input);
    //   $subject = "Reset Password Request";
    //   $msg = "Your New Password is : ".$autopass;
    //   if($gs->is_smtp == 1)
    //   {
    //       $data = [
    //               'to' => $request->email,
    //               'subject' => $subject,
    //               'body' => $msg,
    //       ];

    //       $mailer = new GeniusMailer();
    //       $mailer->sendCustomMail($data);                
    //   }
    //   else
    //   {
    //       $headers = "From: ".$gs->from_name."<".$gs->from_email.">";
    //       mail($request->email,$subject,$msg,$headers);            
    //   }
    //   return response()->json(__('Your Password Reseted Successfully. Please Check your email for new Password.'));
    //   }
    //   else{
    //   // user not found
    //   return response()->json(array('errors' => [ 0 => __('No Account Found With This Email.') ]));    
    //   }  
    // }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
