<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FrontController extends Controller
{    
    function index(){
        $advertises = DB::table('advertises')->select('title','details','picture')->first();
        $aboutus = DB::table('aboutus')->select('title','details','picture','btnurl','btntext')->first();
        $services = DB::table('services')->orderBy('id','desc')->get();
        $serves = $services->take(8);
        $serves->all();
        $faqs = DB::table('faqs')->select('title','details')->get();
        $clients = DB::table('clients')->select('name','designation','picture','comment')->get();
        // $latests = DB::table('latests')->select('title','details','btnname','btnurl','picture')->get();
        $latests = DB::table('latests')->orderBy('id','desc')->get();
        $latests = $latests->take(1);
        $latests->all();

        return view('front.index', compact('aboutus','advertises','serves','faqs','clients','latests'));  
    }
    
    function contact(){
        $contactps = DB::table('contactps')->first();
        return view('front.contact',compact('contactps'));
    }
}
