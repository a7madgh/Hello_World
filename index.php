<?php
    include("connection.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="style1.css">
    
    <title>Facebook</title>
    
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="logo.png" alt="">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum?</p>
        </div>
        <div class="content">
            <div class="formBox">
                <form action="login.php" method ="post">
                <input type="text" placeholder="Enter your email" name="email">
                <input type="password" placeholder="Password" name="pass">
                <button class="submit" name="submet">Login</button>
                
                <a href="#">Forget Password</a></form>
                <hr>
                <div class="create-btn">
                    <a href="#">create New account </a>
                </div>
            </div>
            <p><span>Create a Page </span>for a celebrity, brand or business.</p>
        </div>
    </div>
</body>

<script src="script.js"></script>
</html> 