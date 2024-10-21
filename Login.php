<?php
// Connection to the database
require('conek.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize user input
    $username = htmlspecialchars(trim($_POST['username']));
    $password = $_POST['password'];

    // Input validation
    if (empty($username) || empty($password)) {
        echo "Both fields are required!";
        exit;
    }

    // Prepare the SQL statement to find the user by username
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        $hashedPassword = $user['passwords'];  // Assuming passwords column stores the hashed password
        $role = $user['role'];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Start the session
            session_start();
            session_regenerate_id();  // Prevent session fixation

            // Set session variables
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = ($role == 1) ? 'admin' : 'user';

            // Redirect based on the role
            if ($role == 1) {
                header('Location: ./admin/admin.php');
            } else {
                header('Location: ./user/user.php');
            }
        } else {
            // Invalid password
            echo "Invalid username or password!";
        }
    } else {
        // Username not found
        echo "Invalid username or password!";
    }

    // Close the statement
    $stmt->close();
}
?>
