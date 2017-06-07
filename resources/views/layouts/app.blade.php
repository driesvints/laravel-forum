<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('forum.name') }}</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    @yield('head')
</head>
<body>
    <div class="container">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </div>
</body>
</html>
