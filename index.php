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
    <div class="nav-wrapper">
        <a href="#" class="brand-logo center">PHR</a>
    </div>
</nav>

<div class="container">

    <div class="row">
        <div class="col s12 m6 offset-m3" style="margin-top: 10px">
            <div class="card" id="login">
                <div class="card-content">
                    <span class="card-title">Login</span>


                    <form action="login.php" method="post" >

                        <div class="row">
                            <form class="col s12">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" class="validate" name="username">
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="password">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="input-field col s12">
                                        <input class="waves-effect waves-light btn col s12" type="submit" name="Submit" value="Login">
                                    </div>
                            </form>
                        </div>


                    </form>


                </div>
                <div class="card-action">
                    <p>not a member? <a class="phr-link" onclick="toggle(0)">click here</a></p>
                </div>
            </div>


            <div class="card" id="register">
                <div class="card-content">
                    <span class="card-title">Register</span>


                    <form action="add.php" method="post">

                        <div class="row">
                            <form class="col s12">
                                <div class="input-field col s12">
                                    <input id="username" type="text" class="validate" name="username">
                                    <label for="username">Username</label>
                                </div>
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate" name="password">
                                    <label for="password">Password</label>
                                </div>
                                <div class="input-field col s12">
                                    <input class="waves-effect waves-light btn col s12" type="submit" name="Submit" value="Register">
                                </div>
                            </form>
                        </div>

                    </form>


                </div>
                <div class="card-action">
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


</body>
</html>

