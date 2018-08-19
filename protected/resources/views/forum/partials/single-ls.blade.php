<div class="panel panel-success">
    <div class="panel-heading">
        <h4 style="margin-top: 0px;margin-bottom: 0px;">{{ $forum->title }}</h4>
        <div class="row " style="margin-bottom:0px;">
            <div class="col-md-12">
                <h6 class="inline-it" style="margin-bottom: 0px;margin-top: 0px;">
                    Created by : <i><a href="#">{{ $forum->user->name }}</a></i>
                    <i>on {{ $forum->created_at->toFormattedDateString() }}</i>
                </h6>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <p>
            {!! \Michelf\Markdown::defaultTransform($forum->body) !!}
        </p>
    </div>
    <div class="panel-footer">
        <div class="actions clearfix">
            @can('update', $forum)
            {{--@if(auth()->user()->id == $forum->user_id)--}}
                <!-- Edit Thread Form -->
                <a href="{{ route('forum.edit', $forum->id) }}" class="btn btn-info" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Edit Thread">Edit</a>
                <!-- Delete Thread Form -->
                <form class="inline-it" action="{{ route('forum.destroy', $forum->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <input type="submit" class="btn btn-danger" value="Delete" data-toggle="popover" data-trigger="hover" data-placement="bottom" data-content="Delete Thread">
                </form>
            {{--@endif--}}
            @endcan
            <a href="#addComment" type="button" class="btn btn-info pull-right" data-toggle="popover" data-trigger="hover" data-placement="left" data-content="Add Comment at This Thread">
                Comment
            </a>
        </div>
    </div>
</div>