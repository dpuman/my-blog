<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public $comments,$comment;
    public function makeBlogComment(Request $request,$id){

        Comment::makeComment($request,$id);
        return redirect("/blog-detail/{$id}")->with('message','commented successfully');
    }

    public function index(){
        return view('comment.index',['comments'=>Comment::all()]);
    }
    public function publish($id){
        Comment::publishComment($id);
        return redirect('/comments')->with('message','Activated successfully');
    }
    public function unpublish($id){
        Comment::unpublishComment($id);
        return redirect('/comments')->with('message','Unactivated successfully');
    }
}
