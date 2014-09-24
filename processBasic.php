<?php
session_start();
//a filter, it grabs the users information  - so if the hidden's value is 'email', this is the code it will run.
if(isset($_POST['action']) && $_POST['action'] == 'emailfield')
{


	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{	$_SESSION['email'] = $_POST['email'];
		header('Location: successBasic.php');
		die();
	}
	else
	{
		$_SESSION['error'] = "The email address you entered ". $_POST['email'] ." is NOT a valid email address! Please re-enter a valid email address.";

		header('Location: indexBasic.php');
		die();
	}


}

?>