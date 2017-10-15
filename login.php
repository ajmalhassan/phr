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
		
	// checking empty fields
	if(empty($username) || empty($passwd)) {
				
		if(empty($username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($passwd)) {
			echo "<font color='red'>Password field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
		$query = "SELECT * FROM `reg_users` WHERE username LIKE '".$username."' AND password LIKE '".$passwd."'";
		//insert data to database	
		$result = mysqli_query($mysqli, $query);

		$res = mysqli_fetch_array($result);


		if(mysqli_num_rows($result) > 0){
			if($res["desig"]== "Doctor"){
                header('Location: dash.php');
			}
			else if($res["desig"]== "Patient"){
				echo "Dash for patient";
			}

			// header('Location: dash.php');
		}
		else{
			header('Location: index.php');
		}
		
		//display success message
	}
}
?>
</body>
</html>
