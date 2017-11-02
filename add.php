<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$firstname = mysqli_real_escape_string($mysqli, $_POST['f_name']);
    $middlename = mysqli_real_escape_string($mysqli, $_POST['m_name']);

//    since middle name is optional.
	if(empty($middlename)){
	    $middlename = '';
    }


	$lastname = mysqli_real_escape_string($mysqli, $_POST['l_name']);
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$phone = mysqli_real_escape_string($mysqli, $_POST['phone']);
	$passwd = mysqli_real_escape_string($mysqli, $_POST['password']);
	$desig = mysqli_real_escape_string($mysqli, $_POST['desig']);

    //insert data into reg_users - in order to retrieve the id primary key
    $result = mysqli_query($mysqli, "INSERT INTO reg_users(username,password,desig) VALUES('$username','$passwd','$desig')");

//    checking if user was added to reg_users
    if($result){
//        true

        // setting query statement
        $query = "SELECT id FROM `reg_users` WHERE username LIKE '".$username."' AND password LIKE '".$passwd."'";
        //executing query and retrieving id
        $res_id = mysqli_query($mysqli, $query);

        $id = 0;

        while ($row = $res_id->fetch_assoc()) {
            $id = $row['id'];
        }

        echo 'id:'. $id;



        // checking user designation and reading data accordingly
        if($desig == 'Patient') {
            $emerg_phone = mysqli_real_escape_string($mysqli, $_POST['emergency-phone']);
            $dob = mysqli_real_escape_string($mysqli, $_POST['dob']);
            $gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
            $marital = mysqli_real_escape_string($mysqli, $_POST['marital']);
            $country = mysqli_real_escape_string($mysqli, $_POST['country']);
            $state = mysqli_real_escape_string($mysqli, $_POST['state']);
            $city = mysqli_real_escape_string($mysqli, $_POST['city']);
            $address = mysqli_real_escape_string($mysqli, $_POST['address']);
            $pin = mysqli_real_escape_string($mysqli, $_POST['pin']);

        } else {
            $specialization = mysqli_real_escape_string($mysqli, $_POST['specialization']);
            $horc = mysqli_real_escape_string($mysqli, $_POST['horc']);
        }


    }
    else {
//        failed
//        To-do: add redirection
        header('Location: index.php');
    }


}
?>
</body>
</html>
