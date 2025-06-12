<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="box">
        <h2>Change Password</h2>

        <?php
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
            }
        ?>

        <div class="form half">
            <form action="" method="POST">
                <div class="box-container">
                    <div class="container">
                        <div class="inputBox">
                            <span>Current Password: </span>
                            <input type="password" name="current_password" placeholder="Old Password" required>
                        </div>
                        <div class="inputBox">
                            <span>New Password: </span>
                            <input type="password" name="new_password" placeholder="New Password" required>
                        </div>
                        <div class="inputBox">
                            <span>Confirm Password: </span>
                            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                        </div>
                    </div>
                </div> 
                <br>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" value="Change Password" class="add-btn btn">
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST['submit']))
{
    // Get data from the form
    $id = $_POST['id'];
    $current_password = md5($_POST['current_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);

    // Check if user exists with given ID and current password
    $sql = "SELECT * FROM tbl_admin WHERE id=$id AND password='$current_password'";
    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $count=mysqli_num_rows($res);
        if($count==1)
        {
            if($new_password==$confirm_password)
            {
                $sql2 = "UPDATE tbl_admin SET
                    password= '$new_password'
                    WHERE id=$id
                ";
                $res2 = mysqli_query($conn, $sql2);

                if($res2==true)
                {
                    $_SESSION['change-pwd'] = "<div class='success'> password changed successfully!. </div>";
                    header('location:'.SITEURL.'back-end/manage-admin.php');
                }
                else
                {
                    $_SESSION['change-pwd'] = "<div class='fail'> failed to change password. </div>";
                    header('location:'.SITEURL.'back-end/manage-admin.php');
                }
            }
            else{
                $_SESSION['pwd-not-match'] = "<div class='fail'> password did not match. </div>";
                header('location:'.SITEURL.'back-end/manage-admin.php');
            }
        }
    }
    else
    {
        $_SESSION['user-not-found'] = "<div class='fail'> User not found. </div>";
        header('location:'.SITEURL.'back-end/manage-admin.php');
    }

}
?>

<?php include('partials/footer.php'); ?>
