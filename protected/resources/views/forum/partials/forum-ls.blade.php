<div class="list-group">
    @forelse($forums as $f)

        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="{{ route('forum.show', $f->id) }}">{{$f->title}}</a>
                </h3>
            </div>
            <div class="panel-body">
                <p>{{str_limit($f->body,150) }}
                </p>
            </div>
            <div class="panel-footer">
                <h6><i>Posted by : <a href="{{ route('user-profile', auth()->user()) }}">{{ $f->user->name }}</a> {{$f->created_at->diffForHumans()}}</i></h6>
            </div>
        </div>

    @empty
        <h5>Kosong Gan</h5>
    @endforelse
</div>
