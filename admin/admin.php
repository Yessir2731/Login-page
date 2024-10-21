<?php
session_start(); 

// Check if the user is logged in and has admin role
if (!isset($_SESSION['log']) || $_SESSION['role'] !== 'admin') {
    header('Location: ../loginPage.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="../css/style.css">
    <script defer type="text/javascript" src="js/script.js"></script>
</head>
<body>
   <!-- SIDEBAR -->
    <div class="sidebar">
        <h2>admin panel</h2>
        <ul>
            <li><a href="#dashboard">dashboard</a></li>
            <li><a href="#users">Users</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#orders">Orders</a></li>
            <li><a href="#settings">Settings</a></li>
            <li><a href="#logout">Logout</a></li>
        </ul>
    </div>
   
    <!-- content -->
    <div class="content">
        <h2>dashboard</h2>
        <div class="card">
            <p>your logged in.. on admin side</p>
        </div>
    </div>
</body>
</html>
