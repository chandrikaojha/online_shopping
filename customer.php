<?php
include('dbconnection.php');
if(isset($_POST['submit'])){
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $ContactNumber = $_POST['ContactNumber'];


    $query = mysqli_query($con, "insert into customer(FirstName, LastName, Email, Address, ContactNumber) Values('$FirstName', '$LastName','$Email','$Address', '$ContactNumber')");
   
    
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
    <title>Document</title>
</head>
<body>
<style>
    body{
        background: pink;
        width: 100;
        height: 100vh;
        font-family: sans-serif;
        padding: 200px;
    }
    .form{
        width: 300px;
        margin: 15px;
    }
    form label{
        display: flex;
        
        
    }
</style>
    <form action="customer.php" method="post">
        <label for="">FirstName:</label>
        <input type="text" name="FirstName"><br><br>

        <label for="">LastName:</label>
        <input type="text" name="LastName"><br><br>

        <label for="">Email:</label>
        <input type="email" name="Email"><br><br>

        <label for="">Address</label>
        <input type="text" name="Address"><br><br>

        <label for="">ContactNumber</label>
        <input type="number" name="ContactNumber"><br><br>

        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>