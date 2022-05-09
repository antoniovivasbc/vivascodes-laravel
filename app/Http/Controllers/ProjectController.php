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
        $project->tecnologies = $request->tecnologies;
        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/'), $imageName);
            $project->image = $imageName;
        }
        $project->save();
        return redirect('/dashboard')->with('msg', 'Projeto adicionado com sucesso!');
    }
    public function destroy($id){
        Project::findOrFail($id)->delete();
        return redirect('/dashboard')->with('msg', 'Projeto deletado com sucesso!');
    }
    

}