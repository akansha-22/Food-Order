<?php
    include('config/constants.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_order WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if($res==true)
    {
        $_SESSION['delete']= "<div class='success'>order Deleted Successfully!</div>";
        header('location:'.SITEURL.'back-end/manage-orders.php');
    }
    else
    {
        $_SESSION['delete']= "<div class='fail'>Failed TO Delete order! Try Again Later.</div>";
        header('location:'.SITEURL.'back-end/manage-orders.php');
    }
?>