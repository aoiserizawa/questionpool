<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Question Pool</title>
	<link rel="stylesheet" type="text/css" href="/css/styles.css">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/css/styles2.css">
</head>
<body>

	<!--navbar-->
	 <nav id="navigation" class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Question Pool</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- <li><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="settings">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                    <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li> -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

	<br/>
	<br/>

	<div id="body" class="container">
		<!--sidemenu-->
		<div id="side-menu" class="col-md-2 right-col">
	        <h4><a href="/">Questions List</a></h4>
	        <h4><a href="/addquestion">Add Questions</a></h4>
	    </div>

	    <!--content-->
	    <div id="content" class="col-md-8 col-md-offset-1">
	    	@yield('main')
	    </div>
    </div>
	<!--js files-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
    @section('script')
    @show

    </body>
</html>