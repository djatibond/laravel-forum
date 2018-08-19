<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Forum;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addMainComment(Request $request, Forum $forum)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $forum->addComment($request->body);
        // auth()->user()->notify(new ReplyToThread());

        return back()->withMessage('Comment Created!');
    }

    public function addReplyComment(Request $request, Comment $comment)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment->addComment($request->body);

        return back()->withMessage('Reply for this Comment Created');
    }

    public function update(Request $request, Comment $comment)
    {
        if(auth()->user()->id !== $comment->user_id){
            abort(401, "You don't have Access to Edit This Comment!");
        }

        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment->update($request->all());

        return back()->withMassage('Comment Edited!');

    }

    public function destroy(Comment $comment)
    {
        if(auth()->user()->id !== $comment->user_id){
            abort(401, "You don't have Access to Delete This Comment!");
        }

        $comment->delete();

        return back()->withMessage('Comment deleted');
    }
}
