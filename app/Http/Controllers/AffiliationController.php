<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Affiliation;

class AffiliationController extends Controller
{
    public function index(Request $request){
        $search = $request->search;

        if($search != ''){
        $affiliations = Affiliation::where('affiliation_name', 'like', "%$search%")->paginate(5);
        }else{
        $affiliations = Affiliation::orderBy('id')->paginate(5);
        }
        return view('affiliation.index', compact('affiliations'));
    }


    public function create(){
        return view('affiliation.create');
    }

    public function store(Request $request){
        $request->validate([
            'affiliation_name' => 'required',
        ]);
        Affiliation::create($request->post());

        return redirect()->route('affiliation.index')->with('success','Affiliation has been added');
    }

    public function show(Affiliation $affiliation){
        return view('affiliation.show',compact('affiliation'));
    }

    public function edit(Affiliation $affiliation){
        return view('affiliation.edit',compact('affiliation'));
    }

    public function update(Request $request,Affiliation $affiliation){
        $request->validate([
            'affiliation_name' => 'required',
        ]);
        $affiliation->fill($request->post())->save();

        return redirect()->route('affiliation.index')->with('success','Affiliation has been updated');
    }

    public function destroy(Affiliation $affiliation){
        $affiliation->delete();
        return redirect()->route('affiliation.index')->with('success','Affiliation has been deleted');
    }
}

