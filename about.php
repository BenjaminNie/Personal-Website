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

		<p align="center"> <img id="about-picture" src="images/ben.jpg"> </p> <br>
		<p class="about">My name is Ben and the beautiful city of Vancouver is my home.</p>
		<p class="about">I'm a fourth year electrical engineering student with a love for software, hardware, and all the magic in between.  Check out my robotics and software projects on the 
		<a href="/projects.html" class="blue" id="about-projects">Projects Page</a> and
		<a href="http://github.com/BenjaminNie" class="red" id="about-Github">Github</a></p>
		<p class="about">My interests include robotics, RESTful design, embedded devices, mobile apps, R-Pi/Arduino development, agile methodologies, quality software, and clean code.  Simplicity is the ultimate beauty, God lies in the details, and VIM is a great friend.  </p>
		<p class="about">On my leisure days, I prefer craft beers, sports, and outdoor adventures.</p><br>
	</body>

</html>
