<?php 
    include('config/constants.php');
    include('login-check.php');

?>

<html>
<head>
        <title>food order website - home page</title>
        <link rel="stylesheet" type="text/css"  href="../back-end/stylephp.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>
<body>
    <div class="menu">
        <div class="wrapper">
            <h3><a href="#" class="logo"><i class="fas fa-utensils"></i>akansha's kitchen</a>
            </h3 >
            <ul>
                <li><a href="index.php">home</a></li>
                <li><a href="manage-admin.php">admins</a></li>
                <li><a href="manage-orders.php">orders</a></li>
                <li><a href="logout.php">logout</a></li>

            </ul>
        </div>
    </div>