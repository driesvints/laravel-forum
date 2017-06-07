@extend('master.app')


@section('content')
    <div class="jumbotron" style="background: {{ $group->color }}">
        <h1>{{ $group->name }}</h1>
    </div>
@endsection
