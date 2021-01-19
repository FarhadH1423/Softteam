<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    // public function index(){
        
    //     $aboutus= About::all();
        
    // 	return view('about.index', compact('aboutus'));

    // }

    // public function create(){
    	
    // 	return view('about.create'); 
        
    // }

    // public function store(Request $request){

    //     $request->validate([ 
    //         'title' => 'required',
    //         'details' => 'required',
    //         'picture' => 'required|image|mimes:jpg,png',
    //         'btntext' => 'required',
    //         'btnurl' => 'required',
    //     ]);
        
        
    //     $input = $request->all();
    //     if($request->file('picture')) 
    //     {   
    //         $file = $request->picture;
    //         $name = time().$file->getClientOriginalName();
    //         $file->move('assets/images/service/',$name);
    //         $input['picture'] = $name;
    //     } 

    //     About::create($input);
    // 	return redirect()->route('about.index');

    // }

    public function edit(){
        $aboutus = About::first();
    	return view('about.edit',compact('aboutus'));
        
    }
  
    public function update(Request $request){
            $request->validate([ 
            'title' => 'required',
            'details' => 'required',
            'picture' => 'image|mimes:jpg,png',
            'btntext' => 'required',
            'btnurl' => 'required',
        ]);
        $about = About::first();
        $input = $request->all();
        if($request->file('picture')) 
            {   
                $file = $request->picture;
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/service/',$name);
                $input['picture'] = $name;
            }          
        $about->update($input);
        return redirect()->route('about.edit');
       

    }

    // public function delete($id){
    //     $data = Faq::find($id);
    //     $data->delete();
    // 	return redirect()->route('faq.index');

    // }
    
}
