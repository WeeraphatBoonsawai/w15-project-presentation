<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generation;

class GenerationController extends Controller
{
    public function index(Request $request){
        $search = $request->search;

        if($search != ''){
        $generations = Generation::where('generation_name', 'like', "%$search%")->paginate(5);
        }else{
        $generations = Generation::orderBy('id')->paginate(5);
        }
        return view('generation.index', compact('generations'));
    }

    public function create(){
        return view('generation.create');
    }

    public function store(Request $request){
        $request->validate([
            'generation_name' => 'required',
            'generation_img' => 'required',
        ]);

        $input = $request->all();
        
        if($request->hasfile('generation_img'));
    {
    $file = $request->file('generation_img');
    $extention = $file->getClientOriginalExtension(); 
    $filename = time().'.'. $extention; 
    $file->move('images\gen', $filename); 
    $input['generation_img'] = $filename; 
    }

    $generation = Generation::create($input);

        return redirect()->route('generation.index')->with('success','Generation has been added');
    }

    public function show(Generation $generation){
        return view('generation.show',compact('generation'));
    }

    public function edit(Generation $generation){
        return view('generation.edit',compact('generation'));
    }

    public function update(Request $request,Generation $generation){
        $request->validate([
            'generation_name' => 'required',
            'generation_img' => 'required',
        ]);

        if($request->hasfile('generation_img')) {    
            $file = $request->file('generation_img');
            $extention = $file->getClientOriginalExtension(); 
            $filename = time().'.'. $extention; 
            $file->move('images\gen', $filename); 
            $generation->generation_img = $filename; 
            }

            $generation->update();

        $generation->fill($request->post())->save();

        return redirect()->route('generation.index')->with('success','Generation has been updated');
    }

    public function destroy(Generation $generation){
        $generation->delete();
        return redirect()->route('generation.index')->with('success','Generation has been deleted');
    }
}
