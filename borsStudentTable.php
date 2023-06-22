<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$db = "bores";
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
 	$username = filter_input(INPUT_POST, 'userID' );
 	$password = filter_input(INPUT_POST, 'password' );

 	$result = $conn->query("SELECT DISTINCT Learner_Ref_No, First_Name, Middle_Name, Last_Name, Sex, Birth_Date, Birth_Place, Email_Address, Land_Line, Cellphone_Number, House_Number, Building_Name, Street_Name,Village_Name, Barangay_Name, City, ZIP_Code, Province, Country 
 		FROM student");
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

			echo "<tr>";
			$temp = $row["$LRN"];
			echo "<td style = 'width: 8vw;'>" .$temp. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["$firstname"]. "</td>";
			echo "<td style = 'width: 26vw;'>" .$row["Middle_Name"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Last_Name"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Sex"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Birth_Date"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Birth_Place"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Email_Address"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Land_Line"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Cellphone_Number"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["House_Number"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Building_Name"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Street_Name"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Village_Name"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Barangay_Name"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["City"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["ZIP_Code"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Province"]. "</td>";
			echo "<td style = 'width: 13vw;'>" .$row["Country"]. "</td>";
			echo "</tr>";	
		}
	}
?>
