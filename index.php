<html>
	
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
	
		<br><br><br><br><br><br><br><br><br>
		<?php

		# Extract JSON objects from file and convert content to string

		$file_content = file_get_contents("json/blog-posts/2014-10.json");
        $json = json_decode($file_content, true);

        # print all projects
        for ($i = 0; $i < count($json); $i++) {
            echo '<div id="title">',$json[$i]["title"],'</div><br>',
                    '<div id="date">',$json[$i]["date"],'</div><br>',
                    '<p><div id="project-body">',$json[$i]["post_body"],'</div></p><br><br><br><br>';
        }

		$file_content = file_get_contents("json/blog-posts/2014-09.json");
        $json = json_decode($file_content, true);

        # print all projects
        for ($i = 0; $i < count($json); $i++) {
            echo '<div id="title">',$json[$i]["title"],'</div><br>',
                    '<div id="date">',$json[$i]["date"],'</div><br>',
                    '<p><div id="project-body">',$json[$i]["post_body"],'</div></p><br><br><br><br>';
        }

		$file_content = file_get_contents("json/blog-posts/2014-08.json");
		$json = json_decode($file_content, true);

		# print all projects
        for ($i = 0; $i < count($json); $i++) {
            echo '<div id="title">',$json[$i]["title"],'</div><br>',
                    '<div id="date">',$json[$i]["date"],'</div><br>',
                    '<p><div id="project-body">',$json[$i]["post_body"],'</div></p><br><br><br><br>';
        }

		$file_content = file_get_contents("json/blog-posts/2014-07.json");
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
