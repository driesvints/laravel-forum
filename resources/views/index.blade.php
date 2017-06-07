@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Latest Discussions</div>
        <div class="panel-body"></div>

        @if (isset($discussions) && count($discussions) > 0)
            <ul class="list-group">
                @foreach ($discussions as $discussion)
                    <li class="list-group-item">
                        {{-- TODO: Discussion Info --}}
                    </li>
                @endforeach
            </ul>
        @else
            No discussions to display.
        @endif
    </div>
@endsection
