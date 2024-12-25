<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<title>{{ $title ?? 'Page Title' }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
	<meta name="description" content="This is meta description">
	<meta name="author" content="Themefisher">
	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- # Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- # CSS Plugins -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Trumbowyg/2.27.3/ui/trumbowyg.min.css" integrity="sha512-Fm8kRNVGCBZn0sPmwJbVXlqfJmPC13zRsMElZenX6v721g/H7OukJd8XzDEBRQ2FSATK8xNF9UYvzsCtUpfeJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">	

	<!-- # Main Style Sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/style.css') }}">  

	<meta name="csrf-token" content="{{ csrf_token() }}">

    @livewireStyles
</head>
<body> 

	@if (Auth::check())
		<a href="http://127.0.0.1:8000/admin" target="_blank">Dashboard</a>
		
	@else
		<a href="{{ route('account.register')}}" class="nav-link text-dark">Register</a>		
		<a href="http://127.0.0.1:8000/admin/login">Login</a>
	@endif
    
{{ $slot }}
@livewireScripts

<script
  src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}"></script>

<script src="{{ asset('front-assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('front-assets/js/bootstrap.bundle.5.1.3.min.js') }}"></script>
<script src="{{ asset('front-assets/js/custom.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

@yield('customJs')

<script>
    $(document).ready(function(){
        $('#user').change(function(){
            window.location = this.value;
        });
		$('#area').change(function(){
            window.location = this.value;
        });
		$('#city').change(function(){
            window.location = this.value;
        });
    });
</script>

</body>
</html>