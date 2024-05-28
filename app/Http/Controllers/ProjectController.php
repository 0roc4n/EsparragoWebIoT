<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Project;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Validation\ValidationException;

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

        $project = Project::create([
            "name" => $request->input('name'),
            "description" => $request->input('description'), 
            "category" => $request->input('category'),
            "img_path" => $newImage,
        ]);
        return redirect('/admin/projects')->with('flash_mssg', 'Successfully Created!');
    }
    public function edit($id){
        $project = Project::find($id);
        if (!$project) {
            return redirect()->route('/admin/projects')->with('flash_message', 'Transmittal not found');
        }
        return view('projects.projects-edit', compact('project'));
    }


    public function update(Request $request, $project_id){
        try {
            $project = Project::find($project_id);
            if (!$project) {
                // Handle the case where the addressee is not found (you may want to show an error message or redirect)
                return redirect()->back()->with('flash_mssg', 'Project not found');
            }
            // $request->validate([
            //     'img_path' => 'nullable|mimes:jpg,png,jpeg|max:10240'
            // ]);
            
            $newImage = time(). '-update'. '.'. $request->img_path->extension();
            $request->img_path->move(public_path('projects-images'), $newImage);

            $project->update([
                "name" => $request->input('name'),
                "description" => $request->input('description'), 
                "category" => $request->input('category'),
                "img_path" => $newImage,
            ]);
            return redirect('admin/projects')->with('flash_mssg', 'Project update success');

        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
    public function destroy($id){
    $project = Project::find($id);
    if($project){
        $project->delete();
        return redirect('admin/projects')->with('flash_mssg', 'Delete Success!');
    }else {
        return redirect('admin/projects')->with('error_mssg', '404 Not Found!');
    }
   }
}