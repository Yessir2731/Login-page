<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>
    <link rel="stylesheet" href="css/style.css">
    <script defer type="text/javascript" src="js/script.js"></script>
</head>
<body>
   <!-- NAVBAR -->
    <nav class="navbar">
        <div class="logo-user">logo</div>
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
        <!-- Profile Section -->
        <div class="profile-menu">
            <div class="profile" onclick="toggleDropdown()"> <!-- Profile with dropdown -->
                <img src="path_to_profile_picture.jpg" alt="Profile" class="profile-icon">
                <span class="username">Username</span>
            </div>
            <!-- Dropdown Menu -->
            <div class="dropdown-menu" id="dropdown">
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- PRODUCT SECTION (You can add more here) -->
</body>
</html>
