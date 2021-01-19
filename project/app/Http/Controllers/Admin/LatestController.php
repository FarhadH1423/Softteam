<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Models\Latest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage; 


class LatestController extends Controller
{
    public function index(){
    	$latests= Latest::all();
    	return view('latest.index', compact('latests'));
    }

    public function create(){
    	
    	return view('latest.create');
        
    }

    public function store(Request $request){
        
        $request->validate([ 
            'title' => 'required|unique:latests',
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
        
        Latest::create($input);
    	return redirect()->route('latest.index');
    }
    public function edit($id){

        $latests = Latest::find($id);
    	return view('latest.edit',compact('latests'));

    }

    public function update(Request $request,$id){
        $latest = Latest::find($id);
            $request->validate([ 
            'title' => 'required|unique:latests,title,' . $id,
            'details' => 'required',
            
            'picture' => 'image|mimes:jpg,png',
        ]);

        
        $input = $request->all();
        $input['picture'] = $latest->picture; 
        if($request->file('picture')) 
            {   
                $file = $request->picture;
                if($latest->picture != null)
                {
                    
                    if (file_exists('assets/images/service/'.$latest->picture)) {
                        unlink('assets/images/service/'.$latest->picture);
                    }
                }  
                $name = time().$file->getClientOriginalName();
                $file->move('assets/images/service/',$name);
                $input['picture'] = $name;
                
            } 
        $latest->update($input);
     
        return redirect()->route('latest.index');
       

    }

    public function delete($id){
        $data = Latest::find($id);
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
    	return redirect()->route('latest.index');
    
    }

    public function check(Request $request){
    
       $data = $request->input('check');
       $input = Latest::find($data);
       $new['checks'] = $input->checks;
      
       if($new['checks'] == 1){
           $chk =0;
       } else{
        $chk = 1;
    }
    $new['checks'] = $chk;
    $input->update($new);
    return redirect()->route('latest.index');


    }

   
}
