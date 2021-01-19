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

class DashboardController extends Controller
{   
    public function __construct(){
        $this->middleware('auth:employe');
}

    public function index(){
        return view('employe.dashboard');
    }
}
