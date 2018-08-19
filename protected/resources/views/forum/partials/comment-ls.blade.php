<hr>
@foreach($forum->comments as $c)
    <div class="panel panel-success">
        <div class="panel-heading">
            <h5 style="margin-bottom: 0px;margin-top: 0px;" class="comment-title">
                <a href="#" class="inline-it" ><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $c->user->name }}</a>
                <i class="pull-right"> comment on {{ $c->created_at->diffForHumans() }}</i>
            </h5>
        </div>
        <div class="panel-body" style="padding-bottom: 0px;">
            <p>{!! \Michelf\Markdown::defaultTransform($c->body) !!}</p>

            {{--Reply Comment--}}
            @include('forum.partials.reply-ls')

        </div>
        <div class="panel-footer">
            <div class="actions clearfix">
                <!-- Like Count -->
                <button class="btn btn-default" id="{{$c->id}}-count" >{{$c->likes()->count()}}</button>
                <!-- Like  -->
                <span class="btn btn-default {{$c->isLiked()?"liked":""}}" onclick="likeIt('{{$c->id}}',this)">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </span>
                @if(auth()->user()->id == $c->user_id)
                    {{-- Edit Comment Form --}}
                    <a href="#edit{{$c->id}}" class="btn btn-info" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    {{--Modal Edit Comment--}}
                    <div class="modal fade" id="edit{{$c->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title"> Edit Comment</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="comment-form clearfix">
                                        <form action="{{ route('comment.update', $c->id) }}" method="post" role="form">
                                            {{ csrf_field() }}
                                            {{ method_field('put') }}
                                            <div class="form-group">
                                                <!-- <input type="text" class="form-control" name="body" placeholder="Add Comment Here"> -->
                                                <textarea class="form-control"  placeholder="Add Comment Here..." name="body" rows="10">{{ $c->body }}</textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary pull-right">
                                                <i class="fa fa-edit" aria-hidden="true"></i> Update
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--Delete Comment Form--}}
                    <a href="#delete{{$c->id}}" class="btn btn-info" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    {{--Modal Edit Comment--}}
                    <div class="modal fade bs-exalple-modal-sm" id="delete{{$c->id}}" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-sm">
                            <form class="inline-it" action="{{ route('comment.destroy', $c->id) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title">Delete Comment</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="comment-form clearfix" style="text-align: center">
                                        <h2>Are you sure to Delete This Comment ?</h2>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" value="No" data-dismiss="modal" aria-hidden="true">
                                    <input type="submit" class="btn btn-danger pull-right" value="Yes">
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                @endif
                    <a href="#reply{{$c->id}}" class="btn btn-info pull-right" data-toggle="modal" >Reply</a>
                    {{--Modal Add Reply--}}
                    <div class="modal fade" id="reply{{$c->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title"> Reply Comment</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="comment-form clearfix">
                                        <form action="{{ route('replycomment.store', $c->id) }}" method="post" role="form">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <textarea class="form-control"  placeholder="Add Reply Here..." name="body" rows="5" ></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> Send Reply</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endforeach
