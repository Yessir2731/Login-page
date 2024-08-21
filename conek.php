<?php
$dbname = 'multiuser';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpassword = '';

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully to the database";
}
?>
