<?php
// include db connection
include('config/constants.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $food_name = $_POST['food_name'];
    $order_details = $_POST['order_details'];
    $phone_number = $_POST['phone_number'];
    $delivery_time = $_POST['delivery_time'];
    $user_address = $_POST['user_address'];
    $payment_method = $_POST['payment_method'];
    $total_price = $_POST['total_price'];

    $query = "INSERT INTO tbl_order (full_name, food_name, order_details, phone_number, delivery_time, user_address, payment_method, total_price) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssd", $full_name, $food_name, $order_details, $phone_number, $delivery_time, $user_address, $payment_method, $total_price);

    if ($stmt->execute()) {
        echo "<script>
                alert('Order placed successfully!');
                window.location.href= '../front-end/index1.php';
              </script>";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
