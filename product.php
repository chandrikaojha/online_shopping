<?php
include('dbconnection.php');
if(isset($_POST['Submit'])){
    $Name = $_POST['Name'];
    $Description = $_POST['Description'];
    $Price = $_POST['Price'];
    $QuantityAvailable = $_POST['QuantityAvailable'];

   
    $query = mysqli_query($con, "insert into product(Name, Description, Price, QuantityAvailable) Values('$Name', '$Description','$Price','$QuantityAvailable')");

    
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
    <title>insert data into database</title>
</head>
<body>
    <div style="margin:5px auto">
        <form action="product.php" method="POST">
         <label for="Name">Product Name:</label>
        <input type="text" Name="Name"/>
            <br /> <br />
            <label for="Description">description:</label>
            <input type="text" Name="Description">
            <br><br>
             
            <label for="Price">Price:</label>
            <input type="number" Name="Price"><br><br>
             
            <label for="QuantityAvailable">QuantityAvailable:</label>
            <input type="text" Name="QuantityAvailable"><br><br>

            <button type="submit" name="Submit">Submit</button>
            
        </form>
    </div>
</body>
</html>