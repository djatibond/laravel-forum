@extends('layouts.app')

@section('content')
    <div class="row starting">
        <div class="col-md-3">
            @include('forum.partials.category-ls')
        </div>
        <div class="col-md-9">
            @include('forum.partials.forum-ls')
        </div>
    </div>
@endsection
