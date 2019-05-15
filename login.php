<?php
   session_start();
   ob_start(); // Allows redirection
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


		<title>Login</title>

	</head>

	<html>
	<body>

		<div class="wrapper">
		<!-- Form conditions -->
		<?php
			$msg = '';
				if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				if ($_POST['username'] == 'Becode' && 
                  $_POST['password'] == '1234') {
                header('Location: setup.php');
            	}
            	else {
            		$errorMessage = "<h4 style='color:red'>Wrong username or password</h4>";
            	}
            }
        ?>
			<!-- Form -->
      		<form class="form-signin" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        		<h2>Please sign in</h2>
        		<div id="message"><?php echo $errorMessage; ?></div>
        		<label for="inputEmail" class="sr-only">Email address</label>
        		<input type="text" class="form-control" placeholder="Username = Becode" name="username" required autofocus>
        		<label for="inputPassword" class="sr-only">Password</label>
        		<input type="password" name="password" class="form-control" placeholder="Password = 1234" required>
        		<div class="checkbox">
          			<label>
            			<input type="checkbox" value="remember-me"> Remember me
          				</label>
        		</div>
        		<button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
      		</form>

		</div>

		

	</body>
	</html>
