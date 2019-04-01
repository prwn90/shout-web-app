<?php
include 'database.php';

//Check form 
if(isset($_POST['submit'])){
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);
	
	//Timezone
	date_default_timezone_set('Europe/Warsaw');
	$time = date('h:i:s a',time());
	
	//Validate input fields 
	if(!isset($user) || $user == '' || !isset($message) || $message == ''){
		$error = "Please complete the fields!";
		header("Location: index.php?error=".urlencode($error));
		exit();
	} else {
		$query = "INSERT INTO shouts (user, message, time)
				VALUES ('$user','$message','$time')";
		
		if(!mysqli_query($con, $query)){
			die('Error: '.mysqli_error($con));
		} else {
			header("Location: index.php");
			exit();
		}
	}
}