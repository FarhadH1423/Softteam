<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class GalleryController extends Controller
{
    public function index(){
        $gallerys = Gallery::all();
        return view('gallery.index', compact('gallerys'));
    }

    public function create(){
        return view('gallery.create');
    }

    public function store(Request $request){
        $input = $request->all();
        if($request->picture){
            $file = $request->picture;
               foreach ($file as $key => $fil) {
                    $name = rand().".".$fil->getClientOriginalExtension();
                    $fil->move('asstes/images/gallery',$name);
                    $input['picture'] = $name;
                    Gallery::create($input);
                }
        }
        return redirect()->route('gallery.index');
    }

    public function edit($id){
        $gallerys = Gallery::find($id);
        return view('gallery.edit',compact('gallerys'));
    }

    public function update(Request $request, $id){
        $gallerys = Gallery::find($id);
        $input = $request->all();
        $input['picture'] = $gallerys->picture;
        
        if($request->picture){ 
            $file = $request->picture;
            if(file_exists('asstes/images/gallery/'. $gallerys->picture)){
                unlink('asstes/images/gallery/'. $gallerys->picture);
            }
            $name = rand().".".$file->getClientOriginalExtension();
            $file->move('asstes/images/gallery',$name);
            $input['picture'] = $name; 
        }

        $gallerys -> update($input);
        return Redirect()->route('gallery.index');
    }

    public function delete($id){
        $data = Gallery::find($id);
        if(file_exists('asstes/images/gallery/'. $data->picture)){
            unlink('asstes/images/gallery/'. $data->picture);
        }
        $data->delete();
    	return redirect()->route('gallery.index');
    }

}


