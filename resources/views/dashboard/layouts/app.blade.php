<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'EspecializaTi')</title>

	<link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
	<div class="container">
		@yield('content')
	</div>


	<script src="{{ mix('css/app.css') }}"></script>

	@yield('scripts')
</body>
</html>