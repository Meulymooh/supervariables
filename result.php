<?php
$cookie_name = "Emilie";
$cookie_value = "yummy_cookie";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// Start the session
session_start();
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


		<title>Result</title>

	</head>

	<html>
	<body>

	<div class="container-fluid">

		<div class="instructions2"><h1>Results</h1></div>

		<!-- NAV TABS -->
  		<ul class="nav nav-tabs">
   		<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    		<li><a data-toggle="tab" href="#menu1">Post</a></li>
    		<li><a data-toggle="tab" href="#menu2">Get</a></li>
   			<li><a data-toggle="tab" href="#menu3">Upload</a></li>
   			<li><a data-toggle="tab" href="#menu4">Cookie</a></li>
   			<li><a data-toggle="tab" href="#menu5">Server</a></li>
   			<li><a data-toggle="tab" href="#menu6">Environment</a></li> 
   			<li><a data-toggle="tab" href="#menu7">Recap table</a></li> 
   			<li><a data-toggle="tab" href="#menu8">Session</a></li>	 
   		</ul>

  	</div>

  	<div class="container-fluid">

  	<div class="tab-content">
		
		<!-- HOME TAB -->
    	<div id="home" class="tab-pane fade in active menu">
      		<div class="answerTitle"><h3>HOME</h3></div>
      		<h4>Click on a tab to check the results of the PHP action you performed and enjoy the magic. Or go back to the <a href="setup.php">setup page</a>.</h4>
      		<div><img src="img/new_languages.jpg" id="image" alt="learn-php"></div>
    	</div>

		<!-- POST TAB -->
    	<div id="menu1" class="tab-pane fade">
			<div class="menu">
				<div class="answerTitle"><h3>POST method results</h3></div>
				<span class="answer"><h4>Your favorite TV shows are...</h4></span>
				<span class="answer"><p> <?php echo $_POST["tv"]; ?></p></span>
				<span class="answer"><h4>Your favorite movies are...</h4></span>
				<span class="answer"><p> <?php echo $_POST["movies"]; ?></p></span>
			</div>
    	</div>

		<!-- GET TAB -->
    	<div id="menu2" class="tab-pane fade">
			<div class="menu" id="resultGet">
				<div class="answerTitle"><h3>GET method results</h3></div>
				<span class="answer"><h4>Your favorite country is...</h4></span>
				<span class="answer"><p> <?php echo $_GET["country"]; ?></p></span>
				<span class="answer"><h4>The worst movie is...</h4></span>
				<span class="answer"><p> <?php echo $_GET["worst"]; ?></p></span>
			</div>
    	</div>

		<!-- UPLOAD FILE TAB -->
    	<div id="menu3" class="tab-pane fade">
			<div class="menu" id="resultFile">
				<div class="answerTitle"><h3>$_FILES result</h3></div>
				<span class="answer">

	<!-- PHP code for uploaded image -->
	<?php
	$target_dir = "uploads/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "<h4 style='color:green'>Your image is - </h4>" . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "<h4 style='color:red'>Your file is not an image.</h4>";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "<h4 style='color:red'>The file already exists.</h4>";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "<h4 style='color:red'>Your file is too large.</h4>";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "<h4 style='color:red'>Only JPG, JPEG, PNG & GIF files are allowed.</h4>";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "<h4 style='color:red'>Your file was not uploaded.</h4>";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "<h4 style='color:green'>The file </h4>". basename( $_FILES["fileToUpload"]["name"]). "<h4 style='color:green'> has been uploaded. </h4><h4><br/>Check the <b>&#34;Table recap&#34;</b> tab so see it.</h4>";
	    } else {
	        echo "<h4 style='color:red'>Error uploading your file.</h4>";
	    }
	}
	?>
				</span>
			</div>
    	</div>

    	<div id="menu4" class="tab-pane fade">
 			<div class="menu" id="resultCookie">
				<div class="answerTitle"><h3>$_COOKIE result</h3></div>
				<span class="answer">
					<?php
					if(count($_COOKIE) > 0) {
    					echo "<h4 style='color:green'>Cookies are enabled.</h4>";
					} else {
    					echo "<h4 style='color:red'>Cookies are disabled.</h4>";
					}
					?>
				</span>

				<span class="answer">					
					<?php
					if(!isset($_COOKIE[$cookie_name])) {
    					echo "<h4 style='color:red'>Cookie named</h4>" . $cookie_name . " <h4>is not set!</h4>";
					} else {
						echo "</pre>";
    					echo "<span class='oneLine'><h4 style='color:green'>Cookie named </h4></span><span class='oneLine'><p><b>" . $cookie_name . "</b></p></span><span class='oneLine'><h4 style='color:green'> is set!</h4></span><br/>";
    					echo "<span class='oneLine'><h4 style='color:green'>Value is: </h4></span><span class='oneLine'><p><b>" . $_COOKIE[$cookie_name] . "</b></p></span>";
    					echo "</pre>";
					}
					?>		
				</span>
			</div>
    	</div>

		<!-- SERVER TAB -->
    	<div id="menu5" class="tab-pane fade">
			<div class="menu">

				<div class="answerTitle"><h3>Most important elements inside $_SERVER</h3></div>
					<span class="answer">
 						<?php
 						echo "<pre>";
						echo $_SERVER['PHP_SELF'];
						echo "<br>";
						echo $_SERVER['GATEWAY_INTERFACE'];
						echo "<br>";
						echo $_SERVER['SERVER_ADDR'];
						echo "<br>";
						echo $_SERVER['SERVER_SOFTWARE'];
						echo "<br>";
						echo $_SERVER['SERVER_PROTOCOL'];
						echo "<br>";
						echo $_SERVER['REQUEST_METHOD'];
						echo "<br>";
						echo $_SERVER['REQUEST_TIME'];
						echo "<br>";
						echo $_SERVER['QUERY_STRING'];
						echo "<br>";
						echo $_SERVER['SERVER_PORT'];
						echo "<br>";
						echo $_SERVER['SERVER_NAME'];
						echo "<br>";
						echo $_SERVER['HTTP_HOST'];
						echo "<br>";
						echo $_SERVER['HTTP_REFERER'];
						echo "<br>";
						echo $_SERVER['HTTP_USER_AGENT'];
						echo "<br>";
						echo $_SERVER['SCRIPT_NAME'];
						echo "</pre>";
						?> 
					</span>
			</div>
		</div>

		<!-- ENV TAB -->
    	<div id="menu6" class="tab-pane fade">
			<div class="menu">

				<div class="answerTitle"><h3>Info about $_ENV variables</h3></div>
					<span class="answer">
 						<?php
 							echo "<pre>";
 							print_r($_ENV);
 							echo "</pre>";
						?> 
					</span>
			</div>
		</div>

		<!-- RECAP TABLE TAB -->
    	<div id="menu7" class="tab-pane fade">
			<div class="menu">

				<div class="answerTitle"><h3>Key => value table displaying the results for GET, POST, FILES and COOKIE</h3></div>
				<div class="answerTitle"><h4><i>The values in green are displayed via the PHP  array() function.</i></h4></div>
					<span class="answer">
 						<?php
 							$favorite = array("tv"=>$_POST["tv"], "movie"=>$_POST["movies"], "mycountry"=>$_GET["country"], "myworst"=>$_GET["worst"], "pic"=>$_FILES["fileToUpload"]["name"], "cookie_1"=>$cookie_name, "cookie_2"=>$_COOKIE[$cookie_name]);
 							echo "<h4>My favorite TV shows are:</h4><h4 style='color:green'>" . $favorite['tv'] . "</h4><br/><h4> My favorite movies are:</h4><h4 style='color:green'>" . $favorite['movie'] . "</h4><br/><h4>My favorite country is:</h4><h4 style='color:green'>" . $favorite['mycountry'] . "</h4><br/><h4> The worst movie is:</h4><h4 style='color:green'>" . $favorite['myworst'] . "</h4><br/><h4> I uploaded the following picture:</h4><img src='uploads/" . $favorite['pic'] . "'><br/><h4>My cookie name is:</h4><h4 style='color:green'>" . $favorite['cookie_1'] . "</h4><h4>My cookie has the following value:</h4><h4 style='color:green'>" . $favorite['cookie_2'] . "</h4>";
						?> 
					</span>
			</div>
		</div>

		<!-- SESSION TAB -->
    	<div id="menu8" class="tab-pane fade">
			<div class="menu">

				<div class="answerTitle"><h3>SAVE SESSION</h3></div>
					<span class="answer">
		<?php
			// Individual objects
			$postData = array("tv"=>$_POST["tv"], "movie"=>$_POST["movies"]);
			$getData = array("mycountry"=>$_GET["country"], "myworst"=>$_GET["worst"]);
			$fileData = array("name"=>$_FILES["name"]);
			$cookieData = array("cookieName"=>$cookie_name, "cookieValue"=>$_COOKIE[$cookie_name]);
			$serverData = array("self"=>$_SERVER["PHP_SELF"], "interface"=>$_SERVER['GATEWAY_INTERFACE'], "addr"=>$_SERVER['SERVER_ADDR'], "software"=>$_SERVER['SERVER_SOFTWARE'], "protocol"=>$_SERVER['SERVER_PROTOCOL'], "requestMethod"=>$_SERVER['REQUEST_METHOD'], "requestTime"=>$_SERVER['REQUEST_TIME'], "queryString"=>$_SERVER['QUERY_STRING'], "port"=>$_SERVER['SERVER_PORT'], "serverName"=>$_SERVER['SERVER_NAME'], "host"=>$_SERVER['HTTP_HOST'], "referer"=>$_SERVER['HTTP_REFERER'], "agent"=>$_SERVER['HTTP_USER_AGENT'], "script"=>$_SERVER['SCRIPT_NAME']);
			$envData = array("environment"=>$_ENV);

			// Larger objects
			$data_object = array("postData"=>$postData, "getData"=>$getData, "fileData"=>$fileData, "cookieData"=>$cookieData, "serverData"=>$serverData, "envData"=>$envData);

			// Set session variables
			$_SESSION = $data_object;
			echo "<h4>Session variables are set. Check the <a href='superdata.php' target='_blank'>superdata page</a>.</h4>";
			?> 
					</span>
			</div>
		</div>


	</div>

	</body>
	</html>