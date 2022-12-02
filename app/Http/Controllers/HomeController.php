<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $blogs,$categories,$blog,$comments;
    public function index(){
        $this->blogs = Blog::all();
        return view('home.index',['blogs'=>$this->blogs]);
    }

    public function blogDetail($id){
        $this->blog = Blog::find($id);
//        $this->comments = Comment::where('status',1 )->get();
        $this->comments = $this->blog->comments->where('status',1);
        return view('home.blog-details',['blog'=>$this->blog,'comments'=>$this->comments]);

    }

}
