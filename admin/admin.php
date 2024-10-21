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
   <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo-user">FAST</div>
        <a href="#" class="toggler-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-link">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Service</a></li>
            </ul>
        </div>
    </nav>
    <!-- content -->
        <div class="card">
            <p>your logged in.. on admin side</p>
        </div>
</body>
</html>
