<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
<head>
	<title>@yield('title','') | Ecommerce Front-End</title>
	<!-- initiate head with meta tags, css and script -->
	@include('include.head')

</head>
<body id="app" >
    @include('include.preloader')
	<!-- initiate header -->
	@if (Request::path() =='home' || Request::path()== '/')
		@include('include.header')
	@else
		@include('include.header-withoutslider')
	@endif
	<!-- yeild contents here -->
	@yield('content')
	<!-- initiate subscribe area-->
	@include('include.subscribe')

	<!-- initiate footer-->
	@include('include.footer')

	<!-- initiate scripts-->
	@include('include.scripts')
</body>
</html>
