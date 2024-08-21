<?php  
require 'funtion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Page</title>
</head>
<body>
<div>login page with multilevel</div>
    
<div class="form-container"> 
    <form method="POST">
        <div class="title">
            <h2>WELCOME TO TEST LOGIN</h2>
            <p>Sign into your account</p>
        </div>
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="************" required>
        
        <button class="login-button" name="submit">LOGIN</button>
    </form>
</div>
</body>
</html>


