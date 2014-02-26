<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"><!-- Optimize mobile viewport -->
	<title>Schedool</title>
	{{ HTML::style('css/app.css') }}	
	{{ HTML::style('css/foundation-datepicker.css') }}	
	{{ HTML::style("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css") }}	
	{{ HTML::style("http://fonts.googleapis.com/css?family=Jura") }}		
</head>

<body>

	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name">
				<h1><a href="/">Home</a></h1>
			</li>
			<li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Left Nav Section -->
			<ul class="left">				
				@if (Auth::check())			
				<li class="{{Request::path() == 'profile' ? 'active' : ''}}"><a href="{{ URL::route("user/profile") }}">Profile</a></li>
				<li class="{{Request::path() == 'subjects' ? 'active' : ''}}">{{ link_to_route('subjects.index', 'Subjects') }}</li>
				<li class="{{Request::path() == 'calendar' ? 'active' : ''}}">{{ link_to_route('subjects.index', 'Calendar') }}</li>
				@else
				<li class="{{Request::path() == 'auth/login' ? 'active' : ''}}"><a href="{{ URL::route("auth/login") }}">Login</a></li>
				@endif
			</ul>
			<ul class="right">
				@if (Auth::check())
				<li><a href="{{ URL::route("auth/logout") }}">Logout</a></li>			
				@endif
			</ul>
		</section>
	</nav>

	<!-- End Top Bar -->

	<div class="row main">
		<div class="large-12 columns">					
			<div class="row">
				<div class="large-12 columns">
					<div class="row">
						<!-- Shows -->																
						<div class="row">
							<div class="small-8 large-10 small-centered large-centered columns content">											
								@section('messages')
								@if(Session::has('flash_info'))
								<div data-alert class="alert-box info">
									{{ Session::get('flash_info') }}
								</div>
								@endif 
								@if(Session::has('flash_success'))
								<div data-alert class="alert-box success">
									{{ Session::get('flash_success') }}
								</div>
								@endif   
								@if(Session::has('flash_warning'))
								<div data-alert class="alert-box warning">
									@section('warning')
									{{ Session::get('flash_warning') }}     
									@show  
								</div>
								@endif           						
								@show											
								@yield('content')
							</div>						
						</div>
					</div>
				</div>
			</div>
			<!-- End Content -->
		</div>
	</div>

	<footer class="footer">
		<div class="row">
			<div class="large-12 columns footer-content text-center">		
			@VikaCep
			</div>
		</div>
	</footer> 

	@section('scripts')
	{{HTML::script("//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js")}}	
	{{HTML::script("http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js")}}		
	<!--{{HTML::script("http://code.jquery.com/ui/1.10.4/jquery-ui.min.js")}}	-->
	{{HTML::script("/js/foundation-datepicker.js")}}		
	{{HTML::script("/js/global.js")}}	
	{{HTML::script("/js/parsley.js")}}	
	{{HTML::script('/packages/aheissenberger/foundation/js/foundation/foundation.js')}}
	<script>
		$(document).foundation();
	</script>
	<!-- End Footer -->
	@show
</body>

</html>