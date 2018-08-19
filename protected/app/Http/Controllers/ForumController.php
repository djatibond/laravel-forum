<?php

namespace App\Http\Controllers;

use App\Forum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ForumController extends Controller
{
    function __construct()
    {
        return $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $forums = Forum::paginate(15);
        return view('forum.index', compact('forums'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        //validity
        $this->validate($request,[
            'title' => 'required|min:2',
            'tag' => 'required',
            'body' => 'required|min:10',
        ]);

//        Store
//        Update & Delete proses hanya oleh User Pembuat Thread
        auth()->user()->forums()->create($request->all());
//        Semua dapat melakukan Update & Delete
//        Forum::create($request->all());

        //redirect
        return redirect()->route('forum.index' )->withMessage('Thread Created!');
    }

    public function show(Forum $forum)
    {
        return view('forum.single', compact('forum'));
    }

    public function edit(Forum $forum)

    {
        if(auth()->user()->id !== $forum->user_id){
            abort(401, "-UNAUTHORIZED- You don't have Access to Edit This Thread!");
        }
        return view('forum.edit', compact('forum'));

    }

    public function update(Request $request, Forum $forum)
    {
//        if(auth()->user()->id !== $forum->user_id){
//            abort(401, "-UNAUTHORIZED- You don't have Access to Update This Thread!");
//        }
        $this->authorize('update', $forum);
        //validity
        $this->validate($request,[
            'title' => 'required|min:5',
            'tag' => 'required',
            'body' => 'required|min:10',
        ]);
        // update
        $forum->update($request->all());

        return redirect()->route('forum.show', $forum->id)->withMessage('Thread Updated!');
    }

    public function destroy(Forum $forum)
    {
//        if(auth()->user()->id !== $forum->user_id){
//            abort(401, "-UNAUTHORIZED- You don't have Access to Delete This Thread!");
//        }
        $this->authorize('update', $forum);

        $forum->delete();

        return redirect()->route('forum.index')->withMessage('Thread Deleted!');
    }
}
