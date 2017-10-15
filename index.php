<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM `reg_users` ORDER BY id DESC"); 
?>

<html>
<head>	
	<title>Homepage</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<form action="login.php" method="post" id="login">
		<h3>Login</h3>
		<table width="25%" border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Login"></td>
			</tr>
		</table>
		<p>not a member? <a class="phr-link" onclick="toggle(0)">click here</a></p>
	</form>


	<form action="add.php" method="post" id="register">
		<h3>Register</h3>
		<table width="25%" border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td>Designation</td>
				<td>
					<select name="desig">
						<option value="Doctor">Doctor</option>
						<option value="Patient">Patient</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Register"></td>
			</tr>
		</table>
		<p>already member? <a class="phr-link" onclick="toggle(1)">click here</a></p>
	</form>

	<script type="text/javascript">
		var login = document.getElementById('login');
		var register = document.getElementById('register');

		register.style.display = "none";

		function toggle(flag){
			if (flag === 0) {
				login.style.display="none";
				register.style.display="block";
			}
			else if(flag === 1){
				register.style.display="none";
				login.style.display="block";
			}
		}
	</script>

</body>
</html>
