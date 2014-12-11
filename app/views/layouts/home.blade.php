<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Question Pool</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>

	<!--navbar-->
	@yield('navigation')
	@yield('main')

	<br/>
	<br/>

	<!--sidemenu-->
	@yield('sidenav')

	<!--js files-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</body>
</html>