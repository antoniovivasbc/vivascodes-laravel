<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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
        $project->link = $request->link;
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
        $project = Project::findOrFail($id);
        $direct = 'img/'.$project->image;
        if(File::exists($direct)){
            File::delete($direct);
        } 
        $project->delete();
        return redirect('/dashboard')->with('msg', 'Projeto deletado com sucesso!');
    }
    public function edit(Request $request){
        $data = $request->all();
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $project = Project::findOrFail($request->id);
            $direct = 'img/'.$project->image;
            if(File::exists($direct)){
                File::delete($direct);
            } 
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/'), $imageName);
            $data['image'] = $imageName;
        }
        Project::findOrFail($request->id)->update($data);
        return redirect('/dashboard')->with('msg', 'Projeto atualizado com sucesso!');
    }
    public function swap($id1, $id2){
        $projectOnDrag = Project::findOrFail($id1);
        $projectUnder = Project::findOrFail($id2);
        $projectOnDrag->id = 0;
        $projectOnDrag->save();
        $projectUnder->id = $id1;
        $projectUnder->save();
        $projectOnDrag->id = $id2;
        $projectOnDrag->save();
        return redirect('/dashboard')->with('msg', 'Projeto atualizado com sucesso!');


    }
}