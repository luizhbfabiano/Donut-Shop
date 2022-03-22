<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Donut Whole | Vegan Donut Shoppe</title>

        <meta name="description" content="Donut Whole is a Vegan Donut Shoppe based in Southern California">

		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700|Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="normalize.css">

		<link rel="stylesheet" href="styles.css">

		<script src="js/modernizr.js"></script>
		</head>
	<body>
		<div class="container">
			<header>
				<nav>
					<ul><!-- header-->
						<li><a href="location.html">Location</a></li>
						<li><a href="menu.html">Menu</a></li>

						<li id="logo"><a href="index.html">Donut Whole</a></li>

						<li><a href="beans.html">Coffee packs</a></li>
						<li><a href="contact.html">Contact Us</a></li>
					</ul>
				</nav>
			</header>
		</div><!--fim do container-->

		<div class="container">
			<div id="conftext" class="clearfix">

				
				<div id="confleft">
					<h2>Thank you!</h2><br>
        			<?php

            		$username = $_POST['username'];
		
        			echo "<h3>$username, we appreciate that you took some time to write to us!</h3><br>";
            
    		    	echo "<p>Here at The Donut Whole we are always eager to hear from you </p><br>";
	
        			?>

					<a href="index.html">Return to main page</a>
				</div> <!-- fim do confirmation left -->
		
			</div><!-- fim confirmation text -->
		
				<br>
			

		</div><!-- fim do container -->

		<footer class="main"><!-- footer -->
			<div class="container clearfix">
				<div id="uncopyright">
				<p>Uncopyright &copy; 2022 <strong>CoffeeTech</strong></p>
				<p>Please recycle this code responsibly</p>
				</div>

				<div id="credits">
					<p>Coded by <a href="">Luiz Fabiano</a></p>
				</div>

			</div>
		</footer><!--fim footer-->
	</body>
</html>