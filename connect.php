<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "bors";
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

	// Student
	$LRN = filter_input(INPUT_POST, 'lrn' );
	$firstname = filter_input(INPUT_POST, 'fName');
	$middlename = filter_input(INPUT_POST, 'mName');
	$lastname = filter_input(INPUT_POST, 'lName');
	$sex = isset($_POST['Gender'])?$_POST['Gender']:'not yet';
	$birthdate1 = strtotime($_POST["birthDate"]);
	$birthdate2 = date('Y-m-d H:i:s', $birthdate1);
	$birthplace = filter_input(INPUT_POST, 'birthPlace');
	$emailad = filter_input(INPUT_POST, 'emailAddress');
	$celno = filter_input(INPUT_POST, 'cellNum');
	$landline = filter_input(INPUT_POST, 'landNum');
	$houseno = filter_input(INPUT_POST, 'hNumber');
	$buildname = filter_input(INPUT_POST, 'buildName');
	$streetname = filter_input(INPUT_POST, 'streetName');
	$villagename = filter_input(INPUT_POST, 'vName');
	$barangayname = filter_input(INPUT_POST, 'barName');
	$city = filter_input(INPUT_POST, 'city');
	$zipcode = filter_input(INPUT_POST, 'zip');
	$province = filter_input(INPUT_POST, 'province');
	$country = filter_input(INPUT_POST, 'country');
	//remember to concat name + address

	// Education_history
	$pSchool = filter_input(INPUT_POST, 'pSchool');
	$cSchool = filter_input(INPUT_POST, 'cSchool');
	$GLAtt = isset($_POST['gAttainment'])?$_POST['gAttainment']:'not yet';

	// Registration
	$DoR1 = strtotime($_POST["regDate"]);
	$DoR2 =  date('Y-m-d H:i:s', $DoR1);
	$GLApp = isset($_POST['gradeLevel'])?$_POST['gradeLevel']:'not yet';

	// Guardian
	$gfirstname = filter_input(INPUT_POST, 'gFName');
	$gmiddlename = filter_input(INPUT_POST, 'gMName');
	$glastname = filter_input(INPUT_POST, 'gLName');
	$gsex = isset($_POST['guardiangender'])?$_POST['guardiangender']:'not yet';
	$rts = filter_input(INPUT_POST, 'gRelation');
	$occupation = filter_input(INPUT_POST, 'gOccupation');
	$gemailad = filter_input(INPUT_POST, 'gEmailAddress');
	$gcelno = filter_input(INPUT_POST, 'gCellNum');
 	//remember to concat name

	$sql = "INSERT INTO student (Learner_Ref_No, First_Name, Middle_Name, Last_Name, Sex, Birth_Date,
	Birth_Place, Email_Address, Land_Line, Cellphone_Number, House_Number, Building_Name, Street_Name,
	Village_Name, Barangay_Name, City, ZIP_Code, Province, Country)
		values ('$LRN', '$firstname','$middlename', '$lastname', '$sex', '$birthdate2',
		'$birthplace', '$emailad', '$celno', '$landline', '$houseno', '$buildname',
		'$streetname', '$villagename', '$barangayname', '$city', '$zipcode', '$province', '$country')";

	$sql2 = "INSERT INTO education_history (Learner_Ref_No, Previous_School, Current_School,
	Grade_Level_Attainment)
		values ('$LRN', 'pSchool', 'cSchool', 'GLAtt')";

	$sql3 = "INSERT INTO registration (Learner_Ref_No, Date_of_Registration, Grade_Level_Application)
		values ('$LRN', '$DoR2', '$GLApp')";

	$sql4 = "INSERT INTO guardian (Learner_Ref_No, First_Name, Middle_Name, Last_Name, Sex,
	Relation_To_Student, Occupation, Email_Address, Cellphone_Number)
		values ('$LRN', '$gfirstname', '$gmiddlename', '$glastname', '$gsex', '$rts', '$occupation',
		'$gemailad', '$gcelno')";


	if ($conn -> query($sql)){
		echo readfile("regformConfirmStudent.php");
	}
	// if ($conn -> query($sql2)){
	// 	//echo readfile("regformConfirm.html");
	// }
	// else{
	// 	//echo readfile("regformConfirm.html");
	// }
	// if ($conn -> query($sql3)){
	// 	//echo readfile("regformConfirm.html");
	// }
	// else{
	// 	//echo "Failed to Insert reg";
	// }
	// if ($conn -> query($sql4)){
	// 	//echo readfile("regformConfirm.html");
	// }
	// else{
	// 	//echo "Failed to Insert guardian";
	// }
?>