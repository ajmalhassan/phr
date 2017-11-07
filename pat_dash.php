<?php

//including the nav bar
include_once("nav.php");
?>
    <form action="show.php" method="get">
        <input type="text" name="p_id" placeholder="enter patient id">
        <input type="submit">
    </form>

<?php
session_start();

print_r($_SESSION);

//including the nav bar
include_once("footer.php");
?>