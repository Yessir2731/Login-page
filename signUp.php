<?php
// Connection to the database
require 'conek.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $name = htmlspecialchars($_POST['name']);
    $username = htmlspecialchars($_POST['username']);
    $password = $_POST['password'];

    // Input validation
    if (empty($name) || empty($username) || empty($password)) {
        echo "All fields are required!";
        exit;
    }

    // Optional: Password strength validation
    if (strlen($password) < 8) {
        echo "Password must be at least 8 characters long!";
        exit;
    }

    // Check if the username already exists
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username already exists!";
    } else {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Insert user data into the database
        $stmt = $conn->prepare("INSERT INTO user (nama, username, passwords) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $username, $hashedPassword);

        if ($stmt->execute()) {
            echo "User registered successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
}
?>
