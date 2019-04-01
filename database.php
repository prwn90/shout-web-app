<?php

//Connect to database
$con = mysqli_connect("localhost","root","","shoutit");

//Connect test
if(mysqli_connect_errno()){
	echo 'Failed to connect to MySQL Database: '.mysqli_connect_error();
} 