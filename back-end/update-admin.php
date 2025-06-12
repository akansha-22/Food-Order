<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="box">
        <h2>Update admin</h2>

        <?php
            // get id of selected admin
            $id=$_GET['id'];
            // create sql querry to get details
            $sql="SELECT * FROM tbl_admin WHERE id=$id";
            // execute the querry
            $res=mysqli_query($conn, $sql);
            // check weather the query is executed or not
            if($res==true)
            {
                // check data availability
                $count = mysqli_num_rows($res);
                if($count==1)
                {
                    $row = mysqli_fetch_assoc($res);
                    $full_name = $row['full_name'];  
                    $user_name = $row['user_name']; 

                }
                else{
                    header('location:' .SITEURL.'back-end/manage-admin.php');
                }
            }
        ?>

        <div class="form half">
            <form action="" method="POST">
                <div class="box-container">
                    <div class="container">
                        <div class="inputBox">
                            <span>full name: </span>
                            <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                        </div>
                        <div class="inputBox">
                            <span>username: </span>
                            <input type="text" name="user_name" value="<?php  echo $user_name; ?>">
                        </div>
                    </div>
                </div> <br>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" name="submit" value="Update Admin" class="updt-btn btn">
            </form>
        </div>
    </div>
</div>

<?php
    if(isset($_POST['submit']))
    {
        $id = $_POST['id'];
        $full_name = $_POST['full_name'];
        $user_name = $_POST['user_name'];
        
        $sql = "UPDATE tbl_admin SET
             full_name='$full_name', 
             user_name='$user_name'
             WHERE id='$id'
             ";
        $res = mysqli_query($conn, $sql) or die("Query failed: " . mysqli_error($conn));
        
        if($res == TRUE) 
        {
            // Success message
            $_SESSION['update'] = "<div class='success'> Admin Updated Successfully! </div>";
            header('location:'.SITEURL.'back-end/manage-admin.php');
        } 
        else {
            $_SESSION['update'] = "<div class='fail'> Failed to Update Admin! </div>";
            header('location:'.SITEURL.'back-end/update-admin.php');
        }
    }
    ?>

<?php include('partials/footer.php'); ?> 