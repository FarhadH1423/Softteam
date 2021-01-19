<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contactp;
use Illuminate\Http\Request;

class ContactpController extends Controller
{
     public function index(){
    	return view('contactp.index'); 
    }

    public function create(){
        $crets = Contactp::first();
    	return view('contactp.create',compact('crets')); 
    }

    public function store(Request $request){ 

        // $request->validate([ 
        //     'name' => 'required',
        //     'email' => 'required',
        //     'picture' => 'required|image|mimes:jpg,png',
           
        // ]);

        $names = [];
        $emails = [];
        $images = [];

        foreach ($request->name as $key => $name) {
            $names[$key] = $name;
            $emails[] = $request->email[$key];

            if(array_key_exists($key,$request->picture)){
                $image_name = time().$request->picture[$key]->getClientOriginalName();
                $request->picture[$key]->move('assets/images/service/',$image_name); 
                $images[$key] = $image_name;  
            }else{
                $images[$key] = 'null';
            }
        }

        
        $data = Contactp::insert([
            'name' => implode(",",$names), 
            'email' =>implode(",",$emails), 
            'picture' =>implode(",",$images),
            'url' => $request->url,
            'details' => $request->details,
            'mobile' => $request->mobile,
            'mail' => $request->mail
        ]);

     
        
        
        // if($request->file('picture'))   
        // {   $images= array();   
        //     $file = $request->picture;  
        //     foreach ($file as $key  => $fil) {  
        //     $name = time().$fil->getClientOriginalName();
        //     $fil->move('assets/images/service/',$name); 
        //     $images[$key] = $name;  
        //     $img = implode(",",$images);   
        //     $input['picture'] = $img; 
        //     }
            
        // }
    
        
      
            return redirect()->route('contactp.index');
        

    	

    }
}
