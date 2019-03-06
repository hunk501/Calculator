<!DOCTYPE html>
<html lang="en">
<head>
	@include('template.header')
</head>
<body>	

    <div id="wrapper">
		
        @include('template.navigation')
		
		@yield('bodyContent')

    </div>

    @include('template.footer')
	
</body>
</html>