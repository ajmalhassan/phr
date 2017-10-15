<?php
//including the database connection file
include_once("config.php");
$p_id = $_GET['p_id'];
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM `reg_users` WHERE `id` LIKE '".$p_id."'");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="dash.php">Home</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Id</td>
		<td>Username</td>
		<td>Password</td>
		<td>Desig</td>
<!--		<td>options</td>-->
	</tr>
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['username']."</td>";
		echo "<td>".$res['password']."</td>";	
		echo "<td>".$res['desig']."</td>";	
//		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
	}
	?>
	</table>
</body>
</html>
