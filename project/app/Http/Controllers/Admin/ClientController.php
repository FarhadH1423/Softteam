<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; 

class ClientController extends Controller
{
    public function index(){
    	$clients= Client::all();
    	return view('client.index', compact('clients'));

    }

    public function create(){
    	
    	return view('client.create');
        
    }

    public function store(Request $request){
        
        $request->validate([ 
            'name' => 'required|unique:clients',
            'designation' => 'required',
            'comment' => 'required',
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
        
        Client::create($input);
    	return redirect()->route('client.index');
    }
    public function edit($id){

        $clients = Client::find($id);
    	return view('client.edit',compact('clients'));

    }

    public function update(Request $request,$id){
        $client = Client::find($id);
            $request->validate([ 
            'name' => 'required|unique:clients,name,' . $id,
            'designation' => 'required',
            'comment' => 'required',
            'picture' => 'image|mimes:jpg,png',
        ]);

        
        $input = $request->all();
        $input['picture'] = $client->picture;
        if($request->file('picture')) 
            {            
                $file = $request->picture;
                if($client->picture != null)
                {        
                    if (file_exists('assets/images/service/'.$client->picture)) {
                        unlink('assets/images/service/'.$client->picture);
                    }    
                }    
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/service/',$name);
                $input['picture'] = $name;
                
            } 
        $client->update($input);
     
        return redirect()->route('client.index');
       

    }

    public function delete($id){
        $data = Client::find($id);
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
    	return redirect()->route('client.index');

    }

   
}
