<?php
   include('dbconnection.php');
   if(isset($_POST['submit'])) {
       
   
   
       $name = $_POST['name'];
       $password = $_POST['password'];

       $sql = "insert into login(email,password)values('$email','$password')";

       $query = mysqli_query($con,$sql);

       // print_r($query);
       // die();
   
       
       if($query){
           echo "<script>alert('data inserted sucessfully')</script>";
        //    header('location:orders.php');
        //    die();
       } else {
           echo "<script>alert('there is an error')</script>";
   
       }
   }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping - Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="login-container">
            <div class="logo">
                <img src="images/logo.png" alt="Online Shopping Logo" class="logo-img">
            </div>
            <h2>Welcome Back!</h2>
            <p>Login to continue shopping</p>
            <form action="login.php" method="POST">
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required placeholder="Enter your password">
                </div>
                <div class="forgot-password">
                    <a href="reset-password.html">Forgot Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="signup-link">
                    Don't have an account? <a href="signup.php">Sign up now</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
