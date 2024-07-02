
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$server_name = "localhost";
$user_name = "root";  // Change if your MySQL username is different
$password = "";  // Change if you have a password set for the MySQL root user
$db_name = "mess_management _system"; // Change to your actual database name

$conn = mysqli_connect($server_name, $user_name, $password, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


