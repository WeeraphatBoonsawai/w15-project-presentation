<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Generation;
use App\Models\Members;
use App\Models\Gender;
use App\Models\Affiliation;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    function index(Request $request){
        $affilitions = Affiliation::pluck('affiliation_name','id');
        $search = $request->search;

        if($search != ''){
        $memberss = Members::join('generation', 'members.generation_id', '=', 'generation.id')
        ->where('members_name', 'like', "%$search%")
        ->orWhere('generation.generation_name', 'like', "%$search%")
        ->orderBy('members.id')
        ->paginate(5);
        }else{
            $memberss = Members::orderBy('id')->paginate(5);

        }
        return view('members.index', compact('memberss','affilitions'));
    }

    
    public function create(){
        $generations = Generation::pluck('generation_name','id');
        $affilitions = Affiliation::pluck('affiliation_name','id');
        $genders = Gender::pluck('gender_name','id');
        return view('members.create',compact('generations','affilitions','genders'));
    }

    public function store(Request $request){
        $request->validate([
            'members_name' => 'required',
            'members_nickname' => 'required',
            'members_greet' => 'required',
            'members_title' => 'required',
            'members_debutdate' => 'required',
            'members_profile' => 'required',     
            'members_personality' => 'required',    
            'members_img_icon' => 'required',    
            'members_img_costume' => 'required',
            'members_img_costume2' => 'required',      
            'members_img_artwork' => 'required',    
            'members_img_concept' => 'required',         
            'members_introduction_video' => 'required', 
            'members_name_Illustrator' => 'required',  
            'members_youtube' => 'required', 
            'members_youtube_name' => 'required',  
            'generation_id' => 'required',  
            'affiliation_id' => 'required',  
            'gender_id' => 'required',          
            'ch' => 'required',
        ]);

        $input = $request->all();

    if($request->hasfile('members_img_icon'));
    {
    $file = $request->file('members_img_icon');
    $extention = $file->getClientOriginalExtension(); 
    $filename = time().'.'. $extention; 
    $file->move('images\Portrait', $filename); 
    $input['members_img_icon'] = $filename; 
    }

    if($request->hasfile('members_img_costume'));
    {
    $file = $request->file('members_img_costume');
    $extention = $file->getClientOriginalExtension(); 
    $filename = time().'.'. $extention; 
    $file->move('images\Costumes', $filename); 
    $input['members_img_costume'] = $filename; 
    }

    if($request->hasfile('members_img_costume2'));
    {
    $file = $request->file('members_img_costume2');
    $extention = $file->getClientOriginalExtension(); 
    $filename = time().'.'. $extention; 
    $file->move('images\Costumes2', $filename); 
    $input['members_img_costume2'] = $filename; 
    }

    if($request->hasfile('members_img_artwork'));
    {
    $file = $request->file('members_img_artwork');
    $extention = $file->getClientOriginalExtension(); 
    $filename = time().'.'. $extention; 
    $file->move('images\artwork', $filename); 
    $input['members_img_artwork'] = $filename; 
    }

    if($request->hasfile('members_img_concept'));
    {
    $file = $request->file('members_img_concept');
    $extention = $file->getClientOriginalExtension(); 
    $filename = time().'.'. $extention; 
    $file->move('images\concept', $filename); 
    $input['members_img_concept'] = $filename; 
    }


    $member = Members::create($input);





        return redirect()->route('members.index')->with('success','members has been added');
    }

    public function show(Members $members){
        return view('members.show',compact('members'));
    }

    public function edit(Members $member){
        $generations = Generation::pluck('generation_name','id');
        $affilitions = Affiliation::pluck('affiliation_name','id');
        $genders = Gender::pluck('gender_name','id');
        return view('members.edit',compact('member','generations','affilitions','genders'));
    }

    public function update(Request $request,Members $member){
        $request->validate([
            'members_name' => 'required',
            'members_nickname' => 'required',
            'members_greet' => 'required',
            'members_title' => 'required',
            'members_debutdate' => 'required',
            'members_profile' => 'required',     
            'members_personality' => 'required',    
            'members_img_icon' => 'required',    
            'members_img_costume' => 'required',
            'members_img_costume2' => 'required',      
            'members_img_artwork' => 'required',    
            'members_img_concept' => 'required',         
            'members_introduction_video' => 'required', 
            'members_name_Illustrator' => 'required',  
            'members_youtube' => 'required', 
            'members_youtube_name' => 'required',  
            'generation_id' => 'required',  
            'affiliation_id' => 'required',  
            'gender_id' => 'required', 
            'ch' => 'required',
        ]);

        if($request->hasfile('members_img_icon')) {    
        $file = $request->file('members_img_icon');
        $extention = $file->getClientOriginalExtension(); 
        $filename = time().'.'. $extention; 
        $file->move('images\Portrait', $filename); 
        $member->members_img_icon = $filename; 
        }

        if($request->hasfile('members_img_costume')) {    
            $file = $request->file('members_img_costume');
            $extention = $file->getClientOriginalExtension(); 
            $filename = time().'.'. $extention; 
            $file->move('images\Costumes', $filename); 
            $member->members_img_costume = $filename; 
            }

            if($request->hasfile('members_img_costume2')) {    
                $file = $request->file('members_img_costume2');
                $extention = $file->getClientOriginalExtension(); 
                $filename = time().'.'. $extention; 
                $file->move('images\Costumes2', $filename); 
                $member->members_img_costume2 = $filename; 
                }

                if($request->hasfile('members_img_artwork')) {    
                    $file = $request->file('members_img_artwork');
                    $extention = $file->getClientOriginalExtension(); 
                    $filename = time().'.'. $extention; 
                    $file->move('images\artwork', $filename); 
                    $member->members_img_artwork = $filename; 
                    }

                    if($request->hasfile('members_img_concept')) {    
                        $file = $request->file('members_img_concept');
                        $extention = $file->getClientOriginalExtension(); 
                        $filename = time().'.'. $extention; 
                        $file->move('images\concept', $filename); 
                        $member->members_img_concept = $filename; 
                        }

        
        $member->update();

        $member->fill($request->post())->save();

        return redirect()->route('members.index')->with('success','Product has been updated');
    }

    public function destroy(Members $member){
        $member->delete();
        return redirect()->route('members.index')->with('success','Product has been deleted');
    }
}
