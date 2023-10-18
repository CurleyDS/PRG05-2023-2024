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
        @include('partials.header')
    @endauth

    @yield('content')

    @yield('scripts')
</body>
</html>
