<!doctype html>
<html>
<head>
</head>

<body>

	@yield('content')



</body>
@section('scripts')
<!--{{HTML::script("http://code.jquery.com/ui/1.10.4/jquery-ui.min.js")}}	-->
{{HTML::script("/js/foundation-datepicker.js")}}		
{{HTML::script("/js/global.js")}}	
{{HTML::script("/js/parsley.js")}}	

<!-- End Footer -->
@show
</html>