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
	
		<br><br><br><br><br><br><br><br><br>

		<?php
		require_once('helper_fxn.php');
		# Get today's timestamp
		$currentYear = date("Y");
		$currentMonth = date("m");

		# get most recent blog posts 
		$pathName = 'json/blog-posts/';
		$fileName = getFileName($currentMonth, $currentYear);
		$filePath = $pathName . $fileName;
		echo 'this filepath is ' . $filePath . "<br>";

		while (file_exists($filePath)) {
			$file_content = file_get_contents($filePath);
			$json = json_decode($file_content, true);
			
			echo 'old filepath is now ' + $filePath + '<br>';
			echo 'Buzz <br>';

			# print all projects
        	for ($i = 0; $i < count($json); $i++) {
            	echo '<div id="title">',$json[$i]["title"],'</div><br>',
                    '<div id="date">',$json[$i]["date"],'</div><br>',
                    '<p><div id="project-body">',$json[$i]["post_body"],
					'</div></p><br><br><br><br>';
				}	
			echo 'Lightyear <br>';
			getNewDate($currentMonth, $currentYear);
			$fileName = getFileName($currentMonth, $currentYear);
			$filePath = $pathName . $fileName;
			echo "new filepath is " . $filePath . "<br><br><br><br>";
		}
		
	    /*
		The plan:
		1. if date == exists, parse all blog posts
		2. increase date
		3. return to one, if 1 is false, end
		Next question: how to add Jquery so that each page only has 5 posts?  research online and with Jason
		*/

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
