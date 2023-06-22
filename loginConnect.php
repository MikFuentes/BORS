<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "bores";
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
 	$username = filter_input(INPUT_POST, 'userID' );
 	$password = filter_input(INPUT_POST, 'password' );

 	$check = "INSERT INTO LOGIN_LOG(Username, Password)
 		values('$username','password')";

 	if ($conn -> query($check) AND $password=='admin1') {
    	echo readfile("adminHome.html");
    }
	else {
    	echo readfile("studentHome.html");
    } 
?>