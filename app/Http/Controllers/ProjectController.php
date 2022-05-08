<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{   
    public function index(){
        $projects = Project::all();
        return view('index', ['projects' => $projects]);
    }
    public function dashboard() {
        $projects = Project::all();
        return view('dashboard', ['projects' => $projects]);
    }
    public function store(Request $request){
        $project = new project;
        $project->name = $request->name;
        $project->link_site = $request->link_site;
        $project->link_teste = $request->link_teste;
        $project->description = $request->description;
        $project->starts = $request->starts;
        $project->ends = $request->ends;
        $project->image = $request->image;
        $project->tecnologies = $request->tecnologies;
        $project->save();
        return redirect('/dashboard');
    }
    public function destroy($id){
        Project::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Projeto deletado com sucesso');
    }
}