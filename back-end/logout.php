<?php
    include('config/constants.php');
    session_destroy(); //unsets $_SESSION['user']
    header('location:' .SITEURL.'front-end/index1.php');
?>