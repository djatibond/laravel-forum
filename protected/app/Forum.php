<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use CommentableTrait;

    protected $fillable = ['title', 'tag', 'body', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
