<?php

require('conek.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement
    $sql = "SELECT * FROM user WHERE username = ? AND passwords = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters to the SQL statement
    $stmt->bind_param("ss", $username, $password);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if ($count > 0) {
        $checkRole = $result->fetch_array();
        $role = $checkRole['role'];

        // Start the session
        session_start();

        if ($role == 0) {
            // If the user is an admin
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'admin';
            header('Location: ./admin/admin.php');
        } else {
            // If the user is a regular user
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'user';
            header('Location: ./user/user.php');
        }
    } else {
        echo "Invalid username or password";
    }
}
?>
