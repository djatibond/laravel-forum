<?php

namespace App\Http\Controllers;

use App\Forum;
use App\Comment;
use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index(User $user){

        $forums=Forum::where('user_id',$user->id)->latest()->get();

        $comments=Comment::where('user_id',$user->id)->where('commentable_type','App\Forum')->get();
        return view('user-profile', compact('forums','comments','user'));
    }
}
