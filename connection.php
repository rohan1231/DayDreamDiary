<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	$link = mysqli_connect($servername, $username, $password, "my_diary");
	if(mysqli_connect_error()){

		die("Problem...!!");
	}


?>
