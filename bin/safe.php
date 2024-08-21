<?php
session_start();

include "conek.php";

if (isset($_SESSION['username'])) {
    header("Location: user.php");
    exit();
}

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = hash('sha256', $_POST['password']); // Hash the input password using SHA-256

    $sql = "SELECT * FROM user WHERE username = ? AND passwords = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();



    if ($result->num_rows > 0) {
        $takeRoleData = mysqli_fetch_array($result);
        $role = $takeRoleData['role'];

        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        header("Location: user.php");
        
        if($role == 0)
        {
            $_SESSION['log'] = 'logged';
            $_SESSION['role'] = 'Admin';

            header("Location: admin.php");
        }   


        exit();
    } else {
        echo "<script>alert('Email atau password Anda salah. Silakan coba lagi!')</script>";
    }



}   
?>