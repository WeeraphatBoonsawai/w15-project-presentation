<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Members;

class MusicBlogController extends Controller
{
    public function index(Request $request){
        $search = $request->search;

        if($search != ''){
        $blogs = Music::where('music_name', 'like', "%$search%")
        ->orWhere('ch', 'like', "%$search%")->paginate(5);
        }else{
        $blogs = Music::orderBy('id')->get();
        }
        return view('blogmusic', compact('blogs'));
    }

    
}
