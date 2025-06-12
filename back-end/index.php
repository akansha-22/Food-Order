<?php include('partials/menu.php');?>
    <div class="main-content">
        <div class="box">
            <h2>Dashboard </h2>
            <?php
            if(isset($_SESSION['login']))
            {
                echo $_SESSION['login'];
                unset($_SESSION['login']);
            } 
            ?>
            <div class="col-2">
                <h1>1.</h1> <br>
                <a href="manage-admin.php" style="color: black;">manage-admins</a>
            </div>
            <div class="col-2">
                <h1>2.</h1> <br>
                <a href="manage-orders.php" style="color: black;">manage-orders</a>
            </div>
        </div>
    </div>
<?php include('partials/footer.php');?>  