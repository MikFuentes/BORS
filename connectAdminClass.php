<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "bores";
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

	//course
	$coursecode = filter_input(INPUT_POST, 'cCode' );
	$coursename = filter_input(INPUT_POST, 'cName');
	$gradelevel = isset($_POST['gradeLevel'])?$_POST['gradeLevel']:'not yet';
	$subject = filter_input(INPUT_POST, 'subject');

	$sql1 = "INSERT INTO course (Course_Code, Course_Name, Grade_Level, Subject)
		values ('$coursecode', '$coursename','7', '$subject')";

	if ($conn -> query($sql1)){
		echo readfile("adminClassAddConfirm.php");
	}
	else{
		echo "failed to insert";
	}
?>