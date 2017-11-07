
<!DOCTYPE html>
<html>
<head>
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
        <div class="container">
            <a href="index.php" class="brand-logo c-brand center">Patient Health Record</a>
            <?php
            if(isset($_SESSION)){
                echo '<ul id="nav-mobile" class="right"><li><a href="#">Logout</a></li></ul>';
            }
            ?>
        </div>
    </div>
</nav>