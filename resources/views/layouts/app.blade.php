<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>

	@yield('styles')
</head>
<body class="text-white dark:bg-gray-800">
    @auth
        @include('partials.header')
    @endauth

    @auth
        @include('partials.sidebar')
    @endauth

    <div class="sm:grid sm:grid-cols-5">
        <div class="sm:col-start-2 sm:col-span-3">
            @yield('content')
        </div>
    </div>
</body>
</html>
