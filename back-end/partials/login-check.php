<?php
    //authorization - access control
    if(!isset($_SESSION['user']))//if user session is not set
    {
        //user is not logged in
        //redirect to login page with message
        $_SESSION['no-login-message']="<div class='fail'>please login to access admin panel.</div>";
        header('location:'.SITEURL.'back-end/login.php');   
    }
?>