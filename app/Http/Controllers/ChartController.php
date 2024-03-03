<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generation;
use App\Models\Members;
use App\Models\Gender;
use App\Models\Affiliation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{

    public function index(){
        $product_type_count = DB::table('generation')
         ->join('members','generation.id','=','members.generation_id')
         ->select(DB::raw('count(*) as generation_count,generation.generation_name'))
         ->groupBy(DB::raw('generation.generation_name'))
         ->pluck('generation_count','generation_name');
         $labels = $product_type_count->keys();
         $data = $product_type_count->values();

         $affiliation_count = DB::table('affiliation')
         ->join('members','affiliation.id','=','members.affiliation_id')
         ->select(DB::raw('count(*) as affiliation_count,affiliation.affiliation_name'))
         ->groupBy(DB::raw('affiliation.affiliation_name'))
         ->pluck('affiliation_count','affiliation_name');
         $labels_affiliation = $affiliation_count->keys();
         $data_affiliation = $affiliation_count->values();

         $gender_count = DB::table('gender')
         ->join('members','gender.id','=','members.gender_id')
         ->select(DB::raw('count(*) as gender_count,gender.gender_name'))
         ->groupBy(DB::raw('gender.gender_name'))
         ->pluck('gender_count','gender_name');
         $labels_gender = $gender_count->keys();
         $data_gender = $gender_count->values();
 
         return view('chart.category_chart',compact('labels','data','labels_affiliation','data_affiliation','labels_gender','data_gender'));
     }

}
