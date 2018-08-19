{{--Reply Comment--}}
<hr>
@foreach ($c->comments as $reply)
    <div class="panel panel-success" style="margin-left: 20px;border: transparent;background: #f5f5f5;">
        <div class="panel-heading clearfix" style="background: #7cc2d6">
            <div class="inline-it">
                <h5 style="margin-bottom: 0px;margin-top: 0px;" class="comment-title">
                    <a href="#" class="inline-it" ><i class="fa fa-user-circle" aria-hidden="true"></i> {{ $reply->user->name }}</a>
                    <i class=""> Reply on {{ $reply->created_at->diffForHumans() }}</i>
                </h5>
            </div>
            @if(auth()->user()->id == $reply->user_id)
                <div class="dropdown pull-right">
                    <button class="btn btn-xs btn-info dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <span class="caret"></span>
                        <i class="fa fa-gear" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="min-width: 50px; background-color: transparent; border: none; box-shadow: none">
                        {{-- Edit Reply Form --}}
                        <li><a href="#edit{{$reply->id}}" data-toggle="modal"><i class="fa fa-edit" aria-hidden="true"></i></a></li>
                        {{--Delete Reply Form--}}
                        <li><a href="#delete{{$reply->id}}" data-toggle="modal"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                    </ul>
                </div>


                {{--Modal Edit Reply--}}
                <div class="modal fade" id="edit{{$reply->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title"> Edit Reply</h4>
                            </div>
                            <div class="modal-body">
                                <div class="comment-form clearfix">
                                    <form action="{{ route('comment.update', $reply->id) }}" method="post" role="form">
                                        {{ csrf_field() }}
                                        {{ method_field('put') }}
                                        <div class="form-group">
                                            <!-- <input type="text" class="form-control" name="body" placeholder="Add Comment Here"> -->
                                            <textarea class="form-control"  placeholder="Add Comment Here..." name="body" rows="10">{{ $reply->body }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">
                                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Update Reply
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Modal Delete Reply--}}
                <div class="modal fade bs-example-modal-sm" id="delete{{$reply->id}}" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <form class="inline-it" action="{{ route('comment.destroy', $reply->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title">Delete Reply</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="comment-form clearfix" style="text-align: center">
                                        <h2>Are you sure to Delete This Reply ?</h2>
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
        </div>
        <div class="panel-body" >
            <p>{!! \Michelf\Markdown::defaultTransform($reply->body) !!}</p><br>
        </div>
    </div>
@endforeach
{{--End Reply Comment--}}