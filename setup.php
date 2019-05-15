<?php
$cookie_name = "Emilie";
$cookie_value = "yummy_cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>


<!DOCTYPE html>		

<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Jquery js -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<!--Bootstrap--> 	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<!--Ajax--> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!--My CSS--> 	
	<link href="stylesheet.css" rel="stylesheet" type="text/css">

	<!--Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 

	<title>Setup</title>

</head>

<body>

<div class="container-fluid">

	<div id="intro"><h1>This is my first PHP exercise</h1></div>

	<div class="row">
		<!-- POST METHOD -->
		<div class="col col-md-5" id="infoPost">
			<div class="instructions"><h3>$_POST</h3></div>
			<form action="result.php" method="post" id="form_1">
				<p>Enter your 5 favorite TV shows</p> <input id="input_tv" type="text" name="tv"><br>
				<p>Enter your 5 favorite movies</p><input id="input_movies" type="text" name="movies"><br>
				<button class="btn btn-primary" id="button_1" type="submit">Submit</button>
			</form>
		</div>

		<!-- GET METHOD -->
		<div class="col col-md-5" id="infoGet">
			<div class="instructions"><h3>$GET</h3></div>
			<form action="result.php" method="get" id="form_2">
				<p>Enter your favorite country</p> <input id="input_country" type="text" name="country"><br>
				<p>Enter the worst movie ever</p><input id="input_worstMovie" type="text" name="worst"><br>
				<button class="btn btn-primary" id="button_2" type="submit">Submit</button>
			</form>
		</div>

	</div>

	<div class="row">

		<!-- UPLOAD FILE -->
		<div class="col col-md-5" id="infoFiles">
			<div class="instructions"><h3>$_FILES</h3></div>
			<form action="result.php" method="post" enctype="multipart/form-data" id="form_1">
				<p>Select an image to upload</p> 
				<input type="file" name="fileToUpload" id="file">
    			<button class="btn btn-primary" type="submit" value="Upload Image" name="submit" id="button_3">Submit</button>
			</form>
		</div>

		<!-- SET COOKIE -->
		<div class="col col-md-5" id="infoCookie">
			<div class="instructions"><h3>$_COOKIE</h3></div>
				<span id="cookie"><p>Go get the cookie!</p><br/></span>
				 <button class="btn btn-primary" type="submit" value="Set Cookie" name="submit" id="button_4"><a href="result.php" style="color:inherit">Click here</a></button>
		</div>

	</div>

	<div class="row">

		<!-- CHECK SERVER DATA -->
		<div class="col col-md-5" id="infoServer">
			<div class="instructions"><h3>$_SERVER</h3></div>
				<span id="server"><p>Info about important elements (headers, paths, script locations and other crazy shit).</p><br/></span>
				 <button class="btn btn-primary" type="submit" value="Check Server" name="submit" id="button_5"><a href="result.php" style="color:inherit">Click here</a></button>
		</div>

		<!-- CHECK ENV DATA -->
		<div class="col col-md-5" id="infoEnvironment">
			<div class="instructions"><h3>$_ENV</h3></div>
				<span id="environment"><p>Info about all environment variables (provided by the shell under which PHP is running). For info, it's also possible to use the &#34;getenv()&#34; variable.</p><br/></span>
				 <button class="btn btn-primary" type="submit" value="Check Environment" name="submit" id="button_6"><a href="result.php" style="color:inherit">Click here</a></button>
		</div>

	</div>

</div>


</body>
</html>