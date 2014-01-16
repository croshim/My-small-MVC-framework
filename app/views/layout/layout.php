<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
  	<title>MVC framework</title>
</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      	<div class="container">
	        <div class="navbar-header">
	          	<a class="navbar-brand" href="/">Small MVC</a>
	        </div>
	        <div class="collapse navbar-collapse">
	          	<ul class="nav navbar-nav">
	            	<li class="active"><a href="/">Home</a></li>
	          	</ul>
	        </div>
      	</div>
    </div>
    <div class="container">
    	<?php include_once $content;?>
    </div>
</body>
</html>
