<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<!-- CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" />
	<link href="css/cubeportfolio.min.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<!-- Theme skin -->
	<link id="t-colors" href="css/default.css" rel="stylesheet" />
	<link id="bodybg" href="css/bg.css" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
	div id="sb-search" class="sb-search">
		<form>
			<input class="sb-search-input" placeholder="Enter your search term..." type="hidden" value="" name="search" id="search">
		</form>
	</div>
	<div class="mycontent">
		<div id="wrapper">
			<!-- start header -->
			<header>
				<div class="navbar navbar-default navbar-static-top">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{ url('/') }}">
							{{ config('app.name', 'Laravel') }}
						</a>
					</div>
					<div class="navbar-collapse collapse ">
						<ul class="nav navbar-nav">
							@if (Auth::guest())
								<li class="dropdown"><a href="index.html">Halaman Awal</a></li>
								<li class="dropdown"><a href="tentangkami">Visi & Misi</a></li>
								<li class="dropdown"><a href="{{ route('login') }}">Login</a></li>
								<li class="dropdown"><a href="{{ route('register') }}">Register</a></li>
                            @else
							<li class="dropdown active">
								<a href="/home">Halaman Awal</a>
							</li>
							<li>
								<a href="/tentangkami">Visi & Misi</a>
							</li>

							<li class="dropdown">
								<a href="" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Informasi <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu">
									@foreach ($link as $view)
										<li>{{ $view->judul }}</li>
									@endforeach
								</ul>
							</li>

							<li class="dropdown">
                                <strong>
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
								</strong>
							</li>

							<li class="dropdown">
                                <a href="{{ route('logout') }}"
									onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
							@endif
						</ul>
					</div>
				</div>
			</header>
