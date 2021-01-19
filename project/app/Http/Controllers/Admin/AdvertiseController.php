<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Advertise;
use App\Http\Controllers\Controller;

class AdvertiseController extends Controller
{
    // public function index(){
    // 	$advs= Advertise::all();
    // 	return view('advertise.index', compact('advs'));

    // }

    // public function create(){
    	
    // 	return view('advertise.create');
        
    // }

    // public function store(Request $request){

    //     $request->validate([ 
    //         'title' => 'required',
    //         'details' => 'required',
    //         'picture' => 'required|image|mimes:jpg,png',
    //     ]);
        
        
    //     $input = $request->all();
    //     if($request->file('picture')) 
    //     {   
    //         $file = $request->picture;
    //         $name = time().$file->getClientOriginalName();
    //         $file->move('assets/images/service/',$name);
    //         $input['picture'] = $name;
    //     } 

    //     Advertise::create($input);
    // 	return redirect()->route('advertise.index');

    // }

    public function edit(){

       
        $advs = Advertise::first();
    	return view('advertise.edit',compact('advs'));

    }

    public function update(Request $request){
            $request->validate([ 
            'title' => 'required',
            'details' => 'required',
            'picture' => 'image|mimes:jpg,png',
        ]);

        $adv = Advertise::first();
        $input = $request->all();
        if($request->file('picture')) 
            {   
                $file = $request->picture;
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/service/',$name);
                $input['picture'] = $name;
                
            } 
        $adv->update($input);
     
        return redirect()->route('advertise.edit');
       

    }

    // public function delete($id){
    //     $data = Faq::find($id);
    //     $data->delete();
    // 	return redirect()->route('faq.index');

    // }
}
