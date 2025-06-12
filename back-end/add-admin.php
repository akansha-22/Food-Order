<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="box">
        <h2>add admin</h2>
        <?php 
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
        ?>
        <div class="form half">
            <form action="" method="POST">
                <div class="box-container">
                    <div class="container">
                        <div class="inputBox">
                            <span>full name: </span>
                            <input type="text" name="full_name" placeholder="enter your name">
                        </div>
                        <div class="inputBox">
                            <span>user name: </span>
                            <input type="text" name="user_name" placeholder="enter your username">
                        </div>
                        <div class="inputBox">
                            <span>password: </span>
                            <input type="password" name="password" placeholder="enter your password">
                        </div>
                    </div>
                </div> <br>
                <input type="submit" name="submit" value="add admin" class="add-btn btn">
            </form>
        </div>
    </div>
</div>
            

<?php include('partials/footer.php');?> 

<?php
    if(isset($_POST['submit']))
    {
        //1. get data from form
        $full_name = $_POST['full_name'];
        $user_name = $_POST['user_name'];
        $password = md5($_POST['password']);//encrypt password
        
        //2. sql querry to save data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name='$full_name',
            user_name='$user_name',
            password='$password'
            ";
        $res = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));

        if($res==TRUE)
        {
            $_SESSION['add'] = "<div class='success'> Admin Added Successfully! </div>";
            header("location:".SITEURL.'back-end/manage-admin.php');
        }
        else
        {
            $_SESSION['add'] = "<div class='fail'> fail to add admin! </div> ";
            header("location:".SITEURL.'back-end/add-admin.php');
        }
    }
?>