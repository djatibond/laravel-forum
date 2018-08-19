<?php
/**
 * Created by PhpStorm.
 * User: Pangestu Djati
 * Date: 11/02/2018
 * Time: 22:34
 */

namespace App;


trait CommentableTrait
{
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->latest();
    }

    public function addComment($body)
    {
        $comment=new Comment();
        $comment->body=$body;
        $comment->user_id=auth()->user()->id;

        $this->comments()->save($comment);

        return $comment;
    }
}