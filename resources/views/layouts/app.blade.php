<!DOCTYPE html>
<html lang="ru">

<head>
	<title>@yield('title') | Лукоморье</title>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<link rel="shortcut icon" href="favicon.ico">
	<meta name="robots" content="noindex, nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	@vite(['resources/css/app.css', 'resources/js/app.js'])
	<script defer src="/js/app.min.js"></script>
	@routes
</head>

<body>
	<div class="wrapper">
		@include('partials.header')
		@yield('content')
		@include('partials.footer')
	</div>
</body>

</html>
