@if(session('message'))
    <div class="alert alert-dismissible alert-success">
        {{ session('message') }}
    </div>
@endif
