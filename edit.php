<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE reg_users SET username='$username',password='$passwd',desig='$desig' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM `reg_users` WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$passwd = $res['password'];
	$desig = $res['desig'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr> 
				<td>Age</td>
				<td><input type="text" name="password" value="<?php echo $passwd;?>"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="desig" value="<?php echo $desig;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
