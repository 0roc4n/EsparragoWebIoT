<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class BlogController extends Controller
{
    public function index(){
        $blog = Blogs::all();
        return view('blogs')->with(['blogs'=> $blog]);;
    }
    public function blogs(){
        $blogs = Blogs::all();
        return view('blogs.blogs-create')->with(['blogs'=> $blogs]);;
    }

    public function store(Request $request){
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        
        $newImage = time(). '-'. $request->author. '.'. $request->image->extension();
        $request->image->move(public_path('blog-images'), $newImage);

        $blogs = Blogs::create([
            "title" => $request->input('title'),
            "author" => $request->input('author'), 
            "content" => $request->input('content'),
            "catergory" => $request->input('category'),
            "status" => $request->input('status'),
            "img_path" => $newImage,
        ]);
        return redirect('/admin/blogs')->with('flash_mssg', 'Successfully Created!');
    }
    public function show($blogs){
        $blogs = Blogs::find($blogs);
        if (!$blogs) { 
            abort(404);
        }
        
        return view('blogs.blogs-show', compact('blogs'))->with(['blogs'=>$blogs]);
    }
   
}
