<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="box">
        <h2>manage orders</h2> 

        <?php
            if(isset($_SESSION['order'])){
                echo $_SESSION['order'];
                unset($_SESSION['order']);
            }
            if(isset($_SESSION['delete'])){
                echo $_SESSION['delete'];
                unset($_SESSION['delete']);
            }
        ?>
        <br><br>
        <table class="table">
            <tr>
                <th>sr. no.</th>
                <th>full name</th>
                <th>phone number</th>
                <th>user address</th>
                <th>orders & price</th>
                <th>order details</th>
                <th>delivery time</th>
                <th>payment method</th>
                <th>total price</th>
                <th>actions</th>
            </tr>
            <?php
                $sql = "SELECT * FROM tbl_order";
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
                            $phone_number=$rows['phone_number'];
                            $user_address=$rows['user_address'];
                            $food_name=$rows['food_name'];
                            $order_details=$rows['order_details'];
                            $delivery_time=$rows['delivery_time'];
                            $payment_method=$rows['payment_method'];
                            $total_price=$rows['total_price'];
                            ?>
                           <tr>
                                <td><?php echo $sn++;?></td>
                                <td><?php echo $full_name;?></td>
                                <td><?php echo $phone_number;?></td>
                                <td><?php echo $user_address;?></td>
                                <td><?php echo $food_name;?></td>
                                <td><?php echo $order_details;?></td>
                                <td><?php echo $delivery_time;?></td>
                                <td><?php echo $payment_method;?></td>
                                <td><?php echo $total_price;?></td>
                                <td>
                                    <a href="<?php echo SITEURL; ?>back-end/remove-orders.php?id=<?php echo $id; ?>" class="dlt-btn btn">remove order</a>
                                </td>
                            </tr> 
                            <?php
                        }
                    }
                }
            ?>
        </table>
    </div>
</div>

<?php include('partials/footer.php');?> 