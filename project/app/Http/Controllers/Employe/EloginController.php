<?php

namespace App\Http\Controllers\Employe;


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

class EloginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:employe',['except' => ['logout']]);
    }
    

    public function showLoginForm(){
        return view('employe.login');
    }



    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

         if(Auth::guard('employe')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('employe.dashboard');
        }
        return back()->with('message','Doesnt Match');
    }




    public function logout(){
        Auth::guard('employe')->logout();
        return redirect('/');
    }
}
