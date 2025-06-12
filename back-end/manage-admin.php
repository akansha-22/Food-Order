<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="box">
        <h2>manage admins</h2> 

        <?php
            if(isset($_SESSION['add']))
            {
                echo $_SESSION['add'];
                unset($_SESSION['add']);
            }
            if(isset($_SESSION['delete']))
            {
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            } 
            if(isset($_SESSION['update']))
            {
                echo $_SESSION['update'];
                unset($_SESSION['update']);
            } 
            if(isset($_SESSION['user-not-found']))
            {
                echo $_SESSION['user-not-found'];
                unset($_SESSION['user-not-found']);
            } 
            if(isset($_SESSION['pwd-not-match']))
            {
                echo $_SESSION['pwd-not-match'];
                unset($_SESSION['pwd-not-match']);
            } 
            if(isset($_SESSION['change-pwd']))
            {
                echo $_SESSION['change-pwd'];
                unset($_SESSION['change-pwd']);
            } 
        ?>
        <br><br>
        <table class="table">
            <tr>
                <th>sr. no.</th>
                <th>full name</th>
                <th>user name</th>
                <th>actions</th>
            </tr>
            <?php
                $sql = "SELECT * FROM tbl_admin";
                $res = mysqli_query($conn, $sql);
                if($res==TRUE)
                {
                    $count = mysqli_num_rows($res);
                    $sn=1;
                    if($count>0)
                    {
                        while($rows=mysqli_fetch_assoc($res))
                        {
                            $id=$rows['id'];
                            $full_name=$rows['full_name'];
                            $user_name=$rows['user_name'];

                            ?>
                           <tr>
                                <td><?php echo $sn++;?></td>
                                <td><?php echo $full_name;?></td>
                                <td><?php echo $user_name;?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>back-end/change-password.php?id=<?php echo $id; ?>" class="change-btn btn">change password</a>
                                    <a href="<?php echo SITEURL; ?>back-end/update-admin.php?id=<?php echo $id; ?>" class="updt-btn btn">update</a>
                                    <a href="<?php echo SITEURL; ?>back-end/delete-admin.php?id=<?php echo $id; ?>" class="dlt-btn btn">delete</a>
                                </td>
                            </tr> 
                            <?php
                            
                        }
                    }
                }
            ?>
        </table>
        <br> <br> <br>
        <a href="add-admin.php" class="add-btn btn">add admin</a>
    </div>
</div>

<?php include('partials/footer.php');?> 