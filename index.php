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
                            <div class="input-field col s12 m">
                                <input id="username" type="text"  name="username" required>
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password"  name="password" required>
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
                        <form class="col s12" action="add.php" method="post" novalidate>
                            <p style="font-size: x-small; font-weight: bold; text-align: center;">All fields except middle name are mandatory.</p>
                            <div class="input-field col s12">
                                <input id="first_name" type="text"  name="f_name" required>
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="first_name" type="text"  name="m_name">
                                <label for="first_name">Middle Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="last_name" type="text"  name="l_name" required>
                                <label for="last_name">Last Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="username" type="text"  name="username" required>
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email" type="email"  name="email" required>
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="phone" type="number"  name="phone" required>
                                <label for="phone">Phone</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password"  name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="c_password" type="password"  name="c_password" required>
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
                                    <input id="emergency-phone" type="number"  name="emergency-phone" required>
                                    <label for="emergency-phone">Emergency Phone</label>
                                </div>
                                <div class="input-field col s12">
                                    <input type="text" class="datepicker" name="dob"required>
                                    <label for="specialization">Date of birth</label>
                                </div>
                                <div class="input-field col s12">
                                    <select class="icons" id="gender" name="gender">
                                        <option value="Male" data-icon="./img/man.png" class="left circle" selected>Male</option>
                                        <option value="Female" data-icon="./img/woman.png" class="left circle">Female</option>
                                        <option value="Other" data-icon="./img/other.png" class="left circle">Other</option>
                                    </select>
                                    <label>Gender</label>
                                </div>
                                <div class="input-field col s12">
                                    <select class="icons" id="marital" name="marital">
                                        <option value="Single" selected>Single</option>
                                        <option value="Married" >Married</option>
                                        <option value="Divorced" >Divorced</option>
                                        <option value="Widowed" >Widowed</option>
                                    </select>
                                    <label>Marital Status</label>
                                </div>
                                <div class="input-field col s12">
                                    <select class="icons" id="country" name="country">
                                        <option value="India">India</option>
                                    </select>
                                    <label>Country <b> <i class="material-icons" style="font-size: x-small;">info_outline</i> We're only available in India.</b></label>
                                </div>
                                <div class="input-field col s12">
                                    <select class="icons" id="state" name="state" onchange="populateCity()">
                                    </select>
                                    <label>State</label>
                                </div>
                                <div class="input-field col s12">
                                    <select class="icons" id="city" name="city">
                                    </select>
                                    <label>City</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="address" type="text"  name="address" required>
                                    <label for="address">Address</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="pin" type="number"  name="pin" required>
                                    <label for="pin">PIN Code</label>
                                </div>
                            </div>


                            <div id="doctor_form">
                                <div class="input-field col s12">
                                    <input id="specialization" type="text"  name="specialization" required>
                                    <label for="specialization">Specialization</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="horc" type="text"  name="horc" required>
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
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/home.js"></script>

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

