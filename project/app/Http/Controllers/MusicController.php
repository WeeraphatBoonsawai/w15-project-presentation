<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Members;

class MusicController extends Controller
{
    public function index(Request $request){
        $search = $request->search;

        if($search != ''){
        $musics = Music::where('music_name', 'like', "%$search%")
        ->orWhere('ch', 'like', "%$search%")->paginate(5);
        }else{
        $musics = Music::orderBy('id')->paginate(5);
        }
        return view('music.index', compact('musics'));
    }

    public function create(){
        return view('music.create');
    }

    public function store(Request $request){
        $request->validate([
            'music_name' => 'required',
            'music_img' => 'required',
            'music_link' => 'required',
            'ch' => 'required',
        ]);
        Music::create($request->post());

        return redirect()->route('music.index')->with('success','Music has been added');
    }

    public function show(Music $music){
        return view('music.show',compact('music'));
    }

    public function edit(Music $music){
        return view('music.edit',compact('music'));
    }

    public function update(Request $request,Music $music){
        $request->validate([
            'music_name' => 'required',
            'music_img' => 'required',
            'music_link' => 'required',
            'ch' => 'required',
        ]);
        $music->fill($request->post())->save();

        return redirect()->route('music.index')->with('success','Music has been updated');
    }

    public function destroy(Music $music){
        $music->delete();
        return redirect()->route('music.index')->with('success','Music has been deleted');
    }
}
