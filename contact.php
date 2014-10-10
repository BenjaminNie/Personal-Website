<html>
	
	<head>
		<title> Ben Nie </title>
		<link rel="stylesheet" type="text/css" href="style.css" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	
	<body>
		<?php
        # generate navbar
        $navbar_content = file_get_contents("navbar.html");
        echo $navbar_content;
        ?>

		<p align="center"> <img id="contact-picture" src="images/paradise.jpg"> </p> <br>
		<p class="contact"> I'm interested in job opportunities, sharing ideas, and non-profit causes</p>
		<p class="contact">Connect with me on
				<a href="ca.linkedin.com/in/benjaminnie/" class="green" id="contact-linkedin"> LinkedIn </a>,
				<a href="http://twitter.com/niebenjamin" class="blue" id="contact-twitter"> Twitter </a>,
				<a href="www.github.com/BenjaminNie" class="yellow" id="contact-github"> Github </a>,
				<a href="http://quora.com/Benjamin-Nie" class="red" id="contact-quora"> Quora </a>
		</p>
		<p class="contact">Contact me by e-mail at
			<a href="mailto:benjamin.nie.ubc@gmail.com" class="purple" id="contact-mail" >Ben@niebenjamin.com</a>
			
		</p>
	</body>
</html>
