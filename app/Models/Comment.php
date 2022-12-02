<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public static $comment;

    public static function makeComment($request,$id)
    {
        self::$comment = new Comment();
        self::$comment->blog_id = $id;
        self::$comment->name = $request->name;
        self::$comment->comment = $request->comment;
        self::$comment->save();
    }

    public static function publishComment($id){
        self::$comment = Comment::find($id);
        self::$comment->status = 1;
        self::$comment->save();
    }
    public static function unpublishComment($id){
        self::$comment = Comment::find($id);
        self::$comment->status = 0;
        self::$comment->save();
    }
}
