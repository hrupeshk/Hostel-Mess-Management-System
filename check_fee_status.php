<?php
session_start();
include("connection.php");

if (!isset($_SESSION['roll_number'])) {
    echo "You are not logged in.";
    exit();
}

$roll_number = $_SESSION['roll_number'];

$query = "SELECT * FROM mess_fees WHERE roll_number = ?";
$statement = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($statement, "s", $roll_number);
mysqli_stmt_execute($statement);
$result = mysqli_stmt_get_result($statement);

if (mysqli_num_rows($result) > 0) {
    echo "You have paid your mess fees."; 
} else {
    echo "You have not paid your mess fees.";
}

mysqli_stmt_close($statement);
mysqli_close($conn);
?>
