<?php  
require 'signUp.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>SignUp Page</title>
</head>
<body>
<div class="title">login page with multilevel</div>
<div class="switch"><a href="loginPage.php">Log In</a></div>
    
<div class="form-container"> 
    <form method="POST">
        <div class="card-title">
            <h2>WELCOME TO TALKY</h2>
            <p>Sign into your account</p>
        </div>
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your Name" required>
        
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="************" required>

        
        <button class="login-button" name="submit">SIGN UP</button>
    </form>
</div>
</body>
</html>


