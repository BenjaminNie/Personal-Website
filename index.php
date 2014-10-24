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


		<p> 
			Hey all!  My name is Ben Nie and this is my website.  It's still underconstruction and I'm having
			tons of fun making it.  In the meantime, please feel free to browse around - I would love to hear 
			your feedback. <br><br>

			<div id='title'> Recent Blog Posts </div>
		
			<?php
			$num_blog_posts_printed = 0;
			$file_content = file_get_contents("json/blog-posts/2014-07.json");	
			$json = json_decode($file_content, true);

			echo '<p>';
			# print 7 most recent blog posts
			for ($i = 0; $i < count($json); $i++) {
				echo '- ', $json[$i]["title"], '<br>';
			}
			echo '</p>';
			?>
		</p>





		<!--
		#testing purposes
		var_dump($json);
		echo "<br> <br> <br> <br>";

		var_dump($json[0]);
		echo "<br> <br> <br> <br>";
		-->

	</body>

</html>
