<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This the content that will come up in search results">
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<title>IrishWrecksOnline</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
</head>
<body>
	<?php
	header("Cache-Control: no-cache, must-revalidate");
	?>
	
	<header>
		<nav>
			<ul>
				<h2>IrishWrecksOnline</h2>
				 <a class="icon">
    				<i class="fa fa-bars"></i>
    			 </a>
				<div id="navDiv">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Ships</a></li>
					<li><a href="ScubaDive.php">Scuba Dive</a></li>
					<li><a href="about.php">About</a></li>
				</div>
			</ul>
		</nav>

		<script>
			function responsiveMenu() {
			  var x = document.getElementsByTagName("header");
			  var y = document.getElementsByTagName("main");
			  if (x[0].className === "null") {
			    x[0].className = "responsiveHeader";
			  } else {
			    x[0].className = "null";
			  }
			  if (y[0].className === "null") {
			    y[0].className = "responsiveMain";
			  } else {
			    y[0].className = "null";
			  }
			}

			document.getElementsByClassName("icon")[0].addEventListener("click", responsiveMenu);
		</script>

	</header>
