<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Question Pool</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
@section('style')
<style>

.area {
    border: 1px solid #00868B;
    border-radius: 1px;
      -webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
      
      -moz-box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
       box-shadow: 0 0px 0px rgba(0, 0, 0, .2);
       width: 350px;
       margin: 0 auto;
       top: 500px;
       background-color: #b6e2fc;
       color: white;
}
.header{
    background-color: #00868B;
    
    border: 0px solid;
    border-bottom: 50px;
    border-top-right-radius: 0px;
    border-top-left-radius: 0px;

}
hr { display: block; height: 1px;
    border: 0; border-top: 1px solid #ccc;
    margin: 1em 0; padding: 0; border-color: #00868B;  
}
.btn{
	width: 193px;
	 box-shadow: 0px 3px 1px #888888;
}
 .password{
    color: black;
}


</style>	

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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</body>
</html>