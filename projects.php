<html>
	<head>
		<title> Ben Nie </title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	</head>
	
	<body>
		<?php
        # generate navbar
        $navbar_content = file_get_contents("navbar.html");
        echo $navbar_content;
        ?>

		<br><br><br><br><br><br><br><br><br>

		<p><font size='4'>For a portfolio of my software projects and source code, please visit my
			<a href="http://www.github.com/BenjaminNie" class="yellow" id="contact-github"> Github </a>
		</font></p><br><br>
		
		<?php
		# Extract JSON objects from file and convert content to string
        $file_content = file_get_contents("json/projects/projects.json");
		$json = json_decode($file_content, true);

		# print all projects
        for ($i = 0; $i < count($json); $i++) {
            echo '<div id="title">',$json[$i]["title"],'</div><br>',
					'<div id="date">',$json[$i]["date"],'</div><br>',
					'<p><div id="project-body">',$json[$i]["post_body"],'</div></p><br><br><br><br>';
        }

        ?>
	</body>

</html>
