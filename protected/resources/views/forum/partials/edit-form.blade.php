<form class="form-vertical form-action" action="{{route('forum.update', $forum->id)}}" method="post" role="form">
    {{ csrf_field() }}
    {{ method_field('put') }}
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Create Thread</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $forum->title }}">
            </div>

            <div class="form-group">
                <label for="tag">Tags</label>
                <input type="text" class="form-control" name="tag" value="{{ $forum->tag }}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows="10">{{ $forum->body }}</textarea>
            </div>
        </div>
        <div class="panel-footer clearfix">
            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Edit Thread</button>
        </div>
    </div>
</form>