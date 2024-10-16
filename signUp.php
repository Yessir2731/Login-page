<?php
// Connection to the database
require 'conek.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO user (nama, username, passwords) VALUES (?, ?, ?)");
    $stmt->bind_param("sss",$name, $username, $password);
    
    if ($stmt->execute()) {
        echo " User registered successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
