<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>

	@yield('styles')
</head>
<body>
    @auth
        <div class="grid grid-cols-4">
            @include('partials.header')

            @yield('content')

            @include('partials.sidebar')
        </div>
    @else
        <div>
            @yield('content')
        </div>
    @endauth
</body>
</html>
