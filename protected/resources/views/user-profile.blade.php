@extends('layouts.app')

@section('content')
<div class="row starting ending">
    <div class="col-md-3">
        <div class="dp">
            <img src="https://dummyimage.com/300x200/000/fff" alt="" class="img-responsive">
        </div>
        <h3>
            {{$user->name}}
        </h3>
    </div>
    <div class="col-md-9">
        <div>

            <h3>{{$user->name}}'s latest Threads</h3>

            @forelse($forums as $forum)
                <h5>{{$forum->subject}}</h5>

            @empty
                <h5>No threads yet</h5>

            @endforelse
            <br>
            <hr>

            <h3>{{$user->name}}'s latest Comments</h3>

            @forelse($comments as $comment)
                {{--<h5>{{$user->name}} commented on <a href="{{route('forum.single',$comment->commentable->id)}}">{{$comment->commentable->subject}}</a>  {{$comment->created_at->diffForHumans()}}</h5>--}}
                <h5>{{$user->name}} commented on
                    <a href="{{route('forum.show', $comment->commentable->id)}}">
                        {{$comment->commentable->title}}
                    </a>
                    {{$comment->created_at->diffForHumans()}}
                </h5>
            @empty
                <h5>No comments yet</h5>
            @endforelse
        </div>
    </div>

</div>
@endsection
