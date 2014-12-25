<html>
	
	<head>
		<title> Ben Nie </title>
		<link rel="stylesheet" type="text/css" href="style.css" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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

		while (file_exists($filePath)) {

			#extract everything from json file
			$file_content = file_get_contents($filePath);
			$json = json_decode($file_content, true);
			
			# print all projects
        	for ($i = 0; $i < count($json); $i++) {
				echo '<div id="title">',$json[$i]["title"],'</div><br>',
                    '<div id="date">',$json[$i]["date"],'</div><br>',
                    '<p><div id="project-body">',$json[$i]["post_body"],
					'</div></p><br><br><br><br>';
				}	

			getNewDate($currentMonth, $currentYear);
			$fileName = getFileName($currentMonth, $currentYear);
			$filePath = $pathName . $fileName;
		}
		?>
	
		<script type="text/javascript">

		window.addEventListener("resize", resizeNavbar);

		function resizeNavbar() {
			var windowWidth = $(window).width()
			document.getElementById("test1").innerHTML = windowWidth;
			
			// if windowWidth < 700
			if (windowWidth < 700) {
				$("#right-menu-item").removeClass("FullMenu");
			}
		}
		
	</body>

</html>
