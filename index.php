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
		
		# Extract JSON objects from file and convert content to string
		$file_content = file_get_contents("json/blog-posts/2014-07.json");
		$json = json_decode($file_content, true);

		#testing purposes
		var_dump($json);
		echo "<br> <br> <br> <br>";

		var_dump($json[0]);
		echo "<br> <br> <br> <br>";

		# for every json object
		for ($i = 0; $i < count($json); $i++) {
			echo "The title of array $i " , $json[$i]["title"];
			# $json[$i]["title"]";
		}

        ?>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet tortor a ipsum fringilla pellentesque. In pretium, magna posuere semper egestas, urna ligula consectetur nunc, vitae gravida velit leo a elit. Vivamus sed turpis faucibus dui consequat gravida. In ultrices ipsum arcu, eu cursus nisi malesuada id. Etiam vitae ante facilisis, mollis dui ut, laoreet eros. Donec volutpat gravida purus, et pharetra sapien posuere et. Quisque consectetur nisi id est tincidunt imperdiet. Nam pellentesque tortor vitae nibh volutpat, et imperdiet metus mattis. Sed iaculis vitae orci ut rhoncus. Phasellus feugiat diam vel metus scelerisque gravida. Nunc dui nulla, pellentesque faucibus sapien et, ultricies venenatis velit. Duis vel lectus bibendum, placerat ipsum eu, hendrerit orci. Aliquam adipiscing euismod metus a ornare. Phasellus faucibus laoreet metus a bibendum. Vestibulum aliquam sapien eget mi volutpat, eget semper ante rhoncus. Suspendisse et erat id risus vestibulum porta. </p>
		<br><br><br>
		<p>Etiam facilisis ultricies erat, sit amet placerat eros gravida ut. Sed venenatis dapibus velit, sed dictum ante sodales nec. Nulla blandit mattis nisl at cursus. Nulla quis quam vel justo faucibus tristique. Nam ac ante eget ligula facilisis adipiscing ut fermentum sapien. Curabitur sodales odio fringilla nisl suscipit euismod. Morbi ultrices a magna quis tincidunt. Etiam accumsan vitae enim eget sollicitudin. </p>
		<br><br><br>
		<p>Mauris nisi eros, porta sit amet commodo commodo, consequat quis justo. Morbi at commodo ligula, viverra faucibus orci. Nunc dui lorem, vehicula non risus vitae, iaculis tincidunt elit. Quisque tempus quis nisi sed facilisis. Nam accumsan tempus mauris, non placerat mi porta a. Pellentesque interdum nunc quis molestie dictum. Morbi a mauris auctor, scelerisque dui ac, congue enim. Suspendisse mattis, ligula non porta imperdiet, tellus leo suscipit libero, at tempor mi leo eget orci. Nunc a quam eget lorem hendrerit pulvinar. Nunc tempor facilisis ante. Nam auctor nibh aliquet purus lobortis, tincidunt egestas purus scelerisque. Nullam vitae rhoncus nulla. Sed vulputate nisl a turpis congue ullamcorper. Etiam at sapien a tellus ultricies posuere. Vivamus sollicitudin molestie ultricies. Proin est velit, ultricies gravida eleifend blandit, adipiscing ut nulla. </p>
		<br><br><br>
		<p>Etiam facilisis ultricies erat, sit amet placerat eros gravida ut. Sed venenatis dapibus velit, sed dictum ante sodales nec. Nulla blandit mattis nisl at cursus. Nulla quis quam vel justo faucibus tristique. Nam ac ante eget ligula facilisis adipiscing ut fermentum sapien. Curabitur sodales odio fringilla nisl suscipit euismod. Morbi ultrices a magna quis tincidunt. Etiam accumsan vitae enim eget sollicitudin. </p>
		<br><br><br>
		<p>Etiam facilisis ultricies erat, sit amet placerat eros gravida ut. Sed venenatis dapibus velit, sed dictum ante sodales nec. Nulla blandit mattis nisl at cursus. Nulla quis quam vel justo faucibus tristique. Nam ac ante eget ligula facilisis adipiscing ut fermentum sapien. Curabitur sodales odio fringilla nisl suscipit euismod. Morbi ultrices a magna quis tincidunt. Etiam accumsan vitae enim eget sollicitudin. </p>
		<br><br><br>
		<p>Etiam facilisis ultricies erat, sit amet placerat eros gravida ut. Sed venenatis dapibus velit, sed dictum ante sodales nec. Nulla blandit mattis nisl at cursus. Nulla quis quam vel justo faucibus tristique. Nam ac ante eget ligula facilisis adipiscing ut fermentum sapien. Curabitur sodales odio fringilla nisl suscipit euismod. Morbi ultrices a magna quis tincidunt. Etiam accumsan vitae enim eget sollicitudin. </p>
		<br><br><br>
		<p>Etiam facilisis ultricies erat, sit amet placerat eros gravida ut. Sed venenatis dapibus velit, sed dictum ante sodales nec. Nulla blandit mattis nisl at cursus. Nulla quis quam vel justo faucibus tristique. Nam ac ante eget ligula facilisis adipiscing ut fermentum sapien. Curabitur sodales odio fringilla nisl suscipit euismod. Morbi ultrices a magna quis tincidunt. Etiam accumsan vitae enim eget sollicitudin. </p>
		<br><br><br>
		<p>Etiam facilisis ultricies erat, sit amet placerat eros gravida ut. Sed venenatis dapibus velit, sed dictum ante sodales nec. Nulla blandit mattis nisl at cursus. Nulla quis quam vel justo faucibus tristique. Nam ac ante eget ligula facilisis adipiscing ut fermentum sapien. Curabitur sodales odio fringilla nisl suscipit euismod. Morbi ultrices a magna quis tincidunt. Etiam accumsan vitae enim eget sollicitudin. </p>
		<br><br><br>
		<p>Etiam facilisis ultricies erat, sit amet placerat eros gravida ut. Sed venenatis dapibus velit, sed dictum ante sodales nec. Nulla blandit mattis nisl at cursus. Nulla quis quam vel justo faucibus tristique. Nam ac ante eget ligula facilisis adipiscing ut fermentum sapien. Curabitur sodales odio fringilla nisl suscipit euismod. Morbi ultrices a magna quis tincidunt. Etiam accumsan vitae enim eget sollicitudin. </p>	
	</body>

</html>
