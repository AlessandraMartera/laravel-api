<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;
use App\Models\Technology;

class TechnologyController extends Controller
{
    public function show($id){
        $technology = Technology::findOrFail($id);
        return view('technology-show', compact('technology'));
    }

    // public function store(Request $request){
    //     $data = $request->all();
    //     // dd($data);
    //     $project = Project::create($data);

    //     $project-> technologies()->attach($data['technology_id']);
    //     // $project-> technologies()->attach($data['technology_id']);
    //     return redirect()->route("show", $project->id);
    // }

}
