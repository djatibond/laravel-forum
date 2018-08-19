<!-- For Form Add Comment -->
<div class="panel panel-success" id="addComment">
    <div class="panel-heading clearfix">
        <h3 class="">Comment</h3>
    </div>
    <div class="panel-body">
        <form class="" action="{{ route('forumcomment.store',$forum->id) }}" method="post" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <!-- <input type="text" class="form-control" name="body" placeholder="Add Comment Here"> -->
                <textarea class="form-control"  placeholder="Add Comment Here..." name="body" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Send Comment</button>
        </form>
    </div>
</div>
<br><br>