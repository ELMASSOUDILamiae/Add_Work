<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/w3.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css')}}">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
a{
	text-decoration:none;
}
a:hover{
	color:#DCDCDC;
}
</style>
<body class="w3-light-grey">
	@yield('content')
</body>
</html>

