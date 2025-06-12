<?php include('config/constants.php');?>


<html>
    <head>
        <title>login-food order system</title>
        <link rel="stylesheet" type="text/css"  href="../back-end/stylephp.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    </head>
    <body>
        <div class="login">
            <h1>login</h1>
            <br>
            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                } 
                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br>
            <!-- login form starts here -->
             <div class="form ">

                 <form action="" method="POST">
                    username: 
                    <input type="text" name="user_name" placeholder="enter user name"> <br> <br>
                    password: 
                    <input type="password" name="password" placeholder="enter password"> <br> <br>
    
                    <input type="submit" name="submit" value="login" class="login-btn btn">
                 </form>
             </div>
            <!-- login form ends here -->
            <br> <br>
            <p>created by- <a href="www.akanshajain.com">akansha jain</a></p>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        // get data from login form
        $user_name = $_POST['user_name'];
        $password = md5($_POST['password']);//encrypt password
        

        // sql to check whether user with username or password exist or not
        $sql = "SELECT * FROM tbl_admin WHERE user_name='$user_name' AND password='$password'";

        // execute querry
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if($count==1)
        {
            $_SESSION['login'] = "<div class='success'>login successfully!</div>";
            $_SESSION['user'] = $user_name; //to check wether the user is logged in or not.
            header('location:'.SITEURL.'back-end/');
        }
        else
        {
            $_SESSION['login'] = "<div class='fail'>username or password did not match!</div>";
            header('location:'.SITEURL.'back-end/login.php');
        }
        
    }
  ?>