<?php

namespace App\Http\Controllers;
use App\Models\Blogs;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index(){
        $blogs = Blogs::latest()->limit(3)->get();
        return view('index')->with(['blogs'=>$blogs]);
    }
}
