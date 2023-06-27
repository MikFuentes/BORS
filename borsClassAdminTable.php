<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "bors";
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
 	$username = filter_input(INPUT_POST, 'userID' );
 	$password = filter_input(INPUT_POST, 'password' );

 	$result = $conn->query("SELECT DISTINCT Course_Code, Course_Name, Grade_Level, Subject 
 		FROM course");

	//$s1 = array();
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<tr>";
			$temp = $row["Course_Code"];
			echo "<td style = 'width: 8vw;'>" .$temp. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Course_Name"]. "</td>";
			echo "<td style = 'width: 26vw;'>" .$row["Grade_Level"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Subject"]. "</td>";
			echo "</tr>";	
		}
	}
?>
