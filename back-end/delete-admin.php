<?php
    include('config/constants.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM tbl_admin WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if($res==true)
    {
        $_SESSION['delete']= "<div class='success'>Admin Deleted Successfully!</div>";
        header('location:'.SITEURL.'back-end/manage-admin.php');
    }
    else
    {
        $_SESSION['delete']= "<div class='fail'>Failed TO Delete Admin! Try Again Later.</div>";
        header('location:'.SITEURL.'back-end/manage-admin.php');
    }
?>