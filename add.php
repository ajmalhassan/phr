<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$passwd = mysqli_real_escape_string($mysqli, $_POST['password']);
	$desig = mysqli_real_escape_string($mysqli, $_POST['desig']);
		
	// checking empty fields
	if(empty($username) || empty($passwd) || empty($desig)) {
				
		if(empty($username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($passwd)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		if(empty($desig)) {
			echo "<font color='red'>Designation field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO reg_users(username,password,desig) VALUES('$username','$passwd','$desig')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
		header('Location: index.php');
	}
}
?>
</body>
</html>
