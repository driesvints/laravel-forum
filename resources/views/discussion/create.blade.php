@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-9" id="sidebar">
            @include('partials.sidebar')
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="panel panel-default">
                <div class="panel-heading">Create Discussion</div>
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
        </div>
    </div>
@endsection