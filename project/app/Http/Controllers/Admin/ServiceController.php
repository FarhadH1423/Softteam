<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; 


class ServiceController extends Controller
{
    public function index(){
    	$services= Service::all();
    	return view('service.index', compact('services'));

    }

    public function create(){
    	
    	return view('service.create');
        
    }

    public function store(Request $request){
        
        $request->validate([ 
            'title' => 'required',
            'details' => 'required',
            'picture*' => 'required|mimes:jpg,png',
        ]);
        
        
        $input = $request->all();
        if($request->file('picture')) 
        {   $images= array(); 
            $file = $request->picture; 
            foreach ($file as $key  => $fil) { 
            $name = time().$fil->getClientOriginalName(); 
            $fil->move('assets/images/service/',$name);
            $images[$key] = $name;
            $img = implode(",",$images);
            $input['picture'] = $img;
            }
            
        } 
        
        Service::create($input);
    	return redirect()->route('service.index');
    }
    public function edit($id){
        $services = Service::find($id);
    	return view('service.edit',compact('services'));
    }

    public function update(Request $request,$id){
            $request->validate([ 
            'title' => 'required',
            'details' => 'required',
            'picture' => 'image|mimes:jpg,png',
        ]);

        $service = Service::find($id);
        $input = $request->all();
        $input['picture'] = $service->picture;
        if($request->file('picture')) 
            {   
                $file = $request->picture;
                if($service->picture != null)
                {
                    
                    if (file_exists('assets/images/service/'.$service->picture)) {
                        unlink('assets/images/service/'.$service->picture);
                    }
                }  
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/service/',$name);
                $input['picture'] = $name;
                
            } 
        $service->update($input);
     
        return redirect()->route('service.index');
       

    }

    public function delete($id){
        $data = Service::find($id);
        if($data->picture == null){
            $data->delete();
            //--- Redirect Section     
            $msg = __('Data Deleted Successfully.');
            return response()->json($msg);      
            //--- Redirect Section Ends     
        }
        //If Photo Exist
        if($data->picture != null)
        { 
            if (file_exists('assets/images/service/'.$data->picture)) {
                unlink('assets/images/service/'.$data->picture);
            }
        }  
        $data->delete();
    	return redirect()->route('service.index');

    }

   
}
