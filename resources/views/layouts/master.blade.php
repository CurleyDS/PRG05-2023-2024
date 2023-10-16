<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">

	@yield('styles')
</head>
<body>
@include('partials.header')
<div class="container">
	@yield('content')
</div>

@yield('scripts')
</body>
</html>
