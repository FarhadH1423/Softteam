<?php

namespace App\Http\Controllers\Admin;
use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    Public function index(){
        $faqs = Faq::all();
        return view('faq.index',compact('faqs'));
    }

    public function create(){
        return view('faq.create');
    }

    public function store(Request $request){
       
        $request->validate([ 
            'title' => 'required|string',
            'details' => 'required|string',
        ]);

        $input = $request->all();
        Faq::create($input);
        return redirect()->route('faq.index');
    }

    public function edit($id){
        $faqs = Faq::find($id);
    	return view('faq.edit',compact('faqs'));
    }

    public function update(Request $request,$id){
        $request->validate([ 
        'title' => 'required|string',
        'details' => 'required|string',
    ]);

    $faqs = Faq::find($id);
    $input = $request->all();
    $faqs->update($input);
 
    return redirect()->route('faq.index');
   

}

 public function delete($id){
        $data = Faq::find($id);
        $data->delete();
    	return redirect()->route('faq.index');

    }
}
