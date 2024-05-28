<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\ValidationException;

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
    public function edit($id){
        $blogs = Blogs::find($id);
        if (!$blogs) {
            return redirect()->route('/admin/blogs')->with('flash_message', 'blog not found');
        }
        return view('blogs.blogs-edit', compact('blogs'));
    }
   public function update(Request $request, $blog_id){
    try {

        $blogs = Blogs::find($blog_id);
        //$newImage = time(). '-update'. '.'. $request->image->extension();
        //$request->image->move(public_path('blog-images'), $newImage);

        $blogs->update([
            "title" => $request->input('title'),
            "author" => $request->input('author'), 
            "content" => $request->input('content'),
            "catergory" => $request->input('category'),
            "status" => $request->input('status'),
            //"img_path" => $newImage,
        ]);
        return redirect('/admin/blogs')->with('flash_mssg', 'Update Success!');
    } catch (ValidationException $e) {
        return redirect()->back()->with('flash_mssg', $e);
    }
   }
   public function destroy($id){
    $blogs = Blogs::find($id);
    if($blogs){
        $blogs->delete();
        return redirect('/admin/blogs')->with('flash_mssg', 'Delete Success!');
    }else {
        return redirect('/admin/blogs')->with('error_mssg', '404 Not Found!');
    }
   }
}
