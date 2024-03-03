<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;
use App\Models\Generation;
use App\Models\Gender;
use App\Models\Affiliation;
use App\Http\Controllers\Controller;
use App\Models\Music;

class BlogController extends Controller
{
    function index(Request $request){
        $affilitions = Affiliation::pluck('affiliation_name','id');
        $search = $request->search;

        if($search != ''){
        $blogs = Members::join('generation', 'members.generation_id', '=', 'generation.id')
        ->where('members_name', 'like', "%$search%")
        ->orWhere('generation.generation_name', 'like', "%$search%")
        ->orderBy('members.id')
        ->get();
        }else{
            $blogs = Members::orderBy('id')->get();

        }
        return view('views', compact('blogs','affilitions'));
    }
    
    function detail($ch){
        $blog=Members::where('ch','=',$ch)->first();
        $generations = Generation::pluck('generation_name','id');
        $affilitions = Affiliation::pluck('affiliation_name','id');
        $genders = Gender::pluck('gender_name','id');
        $musics = Music::where('ch','=',$ch)->get(); 
        return view('detail',compact('blog','generations','affilitions','genders','musics'));
    }

  
}
