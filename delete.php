<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM `patient_health_record` WHERE `patient_health_record`.`r_id`=$id");

//redirecting to the display page (index.php in our case)
header("Location:pat_dash.php");
?>

