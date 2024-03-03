<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generation;
use App\Models\Members;
use App\Models\Gender;
use App\Models\Affiliation;
use App\Http\Controllers\Controller;
use App\Models\Music;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{
    public function index(){
        $Memberss = Members::with('affiliation') -> get();
        $Memberss = Members::paginate(6);


        $generations = Generation::all();
        $generations = Generation::paginate(7);

        $musics = Music::all();
        $musics = Music::paginate(10);

        $product_type_count = DB::table('generation')
         ->join('members','generation.id','=','members.generation_id')
         ->select(DB::raw('count(*) as generation_count,generation.generation_name'))
         ->groupBy(DB::raw('generation.generation_name'))
         ->pluck('generation_count','generation_name');
         $labels = $product_type_count->keys();
         $data = $product_type_count->values();

        return view('adminhome',compact('Memberss','labels','data','generations','musics'));
    }

}
