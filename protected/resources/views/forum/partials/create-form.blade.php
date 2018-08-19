<form class="form-vertical form-action" action="{{route('forum.store')}}" method="post" role="form">
    {{csrf_field()}}
    <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title">Create Thread</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="" placeholder="Title" name="title" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="tag">Tags</label>
                <input type="text" class="form-control" id="" placeholder="Input here.." name="tag" value="{{old('tag')}}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="" placeholder="Input Thread here..." name="body" rows="10" value="{{old('body')}}"></textarea>
            </div>
        </div>
        <div class="panel-footer clearfix">
            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Create</button>
        </div>
    </div>
</form>