<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::all();
        return view('projects')->with(['projects'=> $projects]);
    }
    public function create_project(){
        $projects = Project::all();
        return view('projects.projects-create')->with(['projects'=>$projects]);
    }
    public function store(Request $request){
        $request->validate([
            'img_path' => 'required|mimes:jpg,png,jpeg|max:10240'
        ]);
        
        $newImage = time(). '-'. $request->name. '.'. $request->img_path->extension();
        $request->img_path->move(public_path('projects-images'), $newImage);

        $blogs = Project::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'), 
            "category" => $request->input('category'),
            "img_path" => $newImage,
        ]);
        return redirect('/admin/projects')->with('flash_mssg', 'Successfully Created!');
    }
   
}