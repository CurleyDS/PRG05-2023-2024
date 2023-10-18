<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
	<a class="navbar-brand" href="{{ url('/') }}">Twitter Copy</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> User Management</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					@auth
					<a class="dropdown-item" href="{{ url('/user') }}">User Profile</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ url('/logout') }}">Logout</a>
					@else
					<a class="dropdown-item" href="{{ route('register') }}">Sign up</a>
					<a class="dropdown-item" href="{{ route('login') }}">Sign in</a>
					@endauth
				</div>
			</li>
		</ul>
	</div>
</nav>
