<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "bors";
	try {
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
	}catch(Exception $e) {
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
	}

 	$username = filter_input(INPUT_POST, 'userID' );
 	$password = filter_input(INPUT_POST, 'password' );

	// Login validation
	// TODO: Password hashing
	$check = mysqli_query($conn, "SELECT * FROM LOGIN_LOG WHERE Username='$username' AND Password='$password'");
	$num = mysqli_num_rows($check);

    if($num > 0) {
		$checkOld =  "INSERT INTO LOGIN_LOG VALUES ('$username', '$password')
			ON DUPLICATE KEY UPDATE Username='$username'";

		if ($conn -> query($checkOld) AND $password=='admin1') {
			echo readfile("adminHome.html");
		}
		else {
			echo readfile("studentHome.html");
		} 
    }
    else {
		echo readfile("index.html");
		echo ("
		<script>
			document.querySelector('.AnimatedForm_errorMessage').textContent = 'Incorrect username or password'
		</script>");
		// TODO: Login fail message
		// TODO: Register suggestion
	}

?>