<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home | PHR</title>
</head>

<body>


<nav>
    <div class="nav-wrapper c-gradient">
        <a href="index.php" class="brand-logo c-brand center">Patient Health Record</a>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col s12 m6 offset-m3" style="margin-top: 5%">
            <div class="card" id="login">
                <div class="card-content">
                    <span class="card-title center-align">Login</span>

                    <div class="row">
                        <form class="col s12" action="login.php" method="post">
                            <div class="input-field col s12">
                                <input id="username" type="text" class="validate" name="username" required>
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s12">
                                <input class="btn col s12 c-gradient" type="submit"
                                       name="Submit" value="Login">
                            </div>
                        </form>
                    </div>

                </div>
                <div class="card-action center-align">
                    <p>not a member? <a class="phr-link" onclick="toggle(0)">click here</a></p>
                </div>
            </div>


            <div class="card" id="register">
                <div class="card-content">
                    <span class="card-title center-align">Register</span>

                    <div class="row">
                        <form class="col s12" action="add.php" method="post">
                            <div class="input-field col s12">
                                <input id="first_name" type="text" class="validate" name="f_name">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="first_name" type="text" class="validate" name="m_name">
                                <label for="first_name">Middle Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="last_name" type="text" class="validate" name="l_name">
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="username" type="text" class="validate" name="username">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="email" class="validate" name="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="phone" type="number" class="validate" name="phone">
                                <label for="phone">Phone</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" name="password">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="c_password" type="password" class="validate" name="c_password">
                                <label for="c_password">Confirm Password</label>
                            </div>
                            <div class="input-field col s12">
                                <select class="icons" id="desig" name="desig" onchange="toggleForm()">
                                    <option value="Patient" data-icon="./img/patient.png" class="left circle" selected>Patient</option>
                                    <option value="Doctor" data-icon="./img/doctor.png" class="left circle">Doctor</option>
                                </select>
                                <label>Who are you?</label>
                            </div>



                            <div id="patient_form">
                                <div class="input-field col s12">
                                    <input id="emergency-phone" type="number" class="validate" name="emergency-phone">
                                    <label for="emergency-phone">Emergency Phone</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="text" class="datepicker">
                                    <label for="specialization">Date of birth</label>
                                </div>
                                <div class="input-field col s12">
                                    <select class="icons" id="desig" name="desig" onchange="toggleForm()">
                                        <option value="Male" data-icon="./img/man.png" class="left circle" selected>Male</option>
                                        <option value="Female" data-icon="./img/woman.png" class="left circle">Female</option>
                                        <option value="Other" data-icon="./img/other.png" class="left circle">Other</option>
                                    </select>
                                    <label>Gender</label>
                                </div>
                                <div class="input-field col s12">
                                    <select class="icons" id="state" name="state">
                                        <option value="Male" selected>Kerala</option>
                                    </select>
                                    <label>State</label>
                                </div>
                            </div>


                            <div id="doctor_form">
                                <div class="input-field col s12">
                                    <input id="specialization" type="text" class="validate" name="specialization">
                                    <label for="specialization">Specialization</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="horc" type="text" class="validate" name="horc">
                                    <label for="horc">Hospital / Clinics</label>
                                </div>
                            </div>




















                            <div class="input-field col s12">
                                <input class="waves-effect waves-light btn col s12 c-gradient" type="submit"
                                       name="Submit" value="Register">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-action center-align">
                    <p>already member? <a class="phr-link" onclick="toggle(1)">click here</a></p>
                </div>
            </div>

        </div>

    </div>

</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="js/home.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

<script>
    //initializing select element
    $(document).ready(function() {
        $('select').material_select();
    });

    //initializing date picker
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15, // Creates a dropdown of 15 years to control year,
        today: 'Today',
        clear: 'Clear',
        close: 'Ok',
        closeOnSelect: false // Close upon selecting a date,
    });
</script>


</body>
</html>

