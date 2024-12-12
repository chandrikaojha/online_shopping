<?php

include('dbconnection.php');
if(isset($_POST['submit'])) {

    $customerID = $_POST['customerID'];
    $orderDate = $_POST['orderDate'];
    $quantity = $_POST['quantity'];
    $totalAmount = $_POST['totalAmount'];

    print_r($_POST);
    die();


    $query = mysqli_query($con, "insert into orders(customerID, orderDate, quantity, totalAmount) Values('$customerID', '$orderDate','$quantity','$totalAmount')");

    
    if($query){
        echo "<script>alert('data inserted successfully')</script>";
    }else{
        echo "<script>alert('there is an error')</script>";
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>
</head>
<body>
<section class="contact" id="contact">
<a href="view_users.php">View Users</a>
            <div style="margin:5px auto">
        <form action="orders.php" method="POST">
         <label for="customerID">customerID:</label>
        <input type="text" Name="customerID"/>
            <br /> <br />
            <label for="orderDate">orderDate:</label>
            <input type="text" Name="orderDate">
            <br><br>
             
            <label for="quantity">quantity:</label>
            <input type="number" Name="quantity"><br><br>
             
            <label for="totalAmount">totalAmount:</label>
            <input type="text" Name="totalAmount"><br><br>

            <button type="submit" name="Submit">Submit</button>
            
        </form>
    </div>
          </section>
</body>
</html>