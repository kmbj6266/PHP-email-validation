<?php
	session_start();
?>
<html>
<head>
		<title>Basic I - EMAIL VALIDATION</title>
	</head>
	<body>

		<?php
		if(isset($_SESSION['error']))
		{
			echo $_SESSION['error'];
			unset($_SESSION['error']);
		}

		?>
			<h2>Please enter your email address:</h2>
			<form action='processBasic.php' method='post'>
				Email:<input type='text' name='email'>
				<input type='submit' value='SUBMIT NOW!'>
				<input type='hidden' name='action' value='emailfield'>
				<!-- in each form you will have a hidden input who's name is "action" - make the value "email" or "login" based on what you are trying to do. -->
			</form>
		</body>
		</html>