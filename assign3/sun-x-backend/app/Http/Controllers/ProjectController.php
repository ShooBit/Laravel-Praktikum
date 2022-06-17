<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function add(Request $request){
        return view('edit-project-form');
    }

    public function store(Request $request){
        $project = new Project;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->date = $request->date;
        if(isset($request->id)){
            $project->exists = true;
            $project->id = $request->id;
        }
        $project->save();

        return redirect('list-projects')->with('status', 'project inserted');
    }

    public function update(Request $request){
        $id = $request->input('id');
        $project = Project::find($id);
        return view('edit-project-form', ['project'=>$project]);
    }

    public function listProjects(){
        $projects = Project::all();
        return view('list-projects', ['projects'=>$projects]);
    }

    public function delete(Request $request){
        $id = $request->input('id');
        $project = Project::find($id);
        $title = $project->title;
        $project->delete();
        return redirect('list-projects')->with('status', 'Project '.$title.' deleted');
    }
}