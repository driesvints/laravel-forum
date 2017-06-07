@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-9" id="sidebar">
            @include('partials.sidebar')
        </div>

        <div class="col-xs-12 col-sm-3">
            Content
        </div>
    </div>
@endsection
