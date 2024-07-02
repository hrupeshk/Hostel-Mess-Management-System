<?php
include("../connection.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection details
    // $servername = "localhost"; // Change if your MySQL server is on a different host
    // $username = "root"; // Change if you have a different username
    // $password = ""; // Change if you have a password set for the MySQL root user
    // $dbname = "mess_management _system"; // Change to your actual database name

    // // Create connection
    // $conn = new mysqli($servername, $username, $password, $dbname);

    // // Check connection
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error); 
    // }

    // Get the roll number from the POST request
    $roll_number = $conn->real_escape_string($_POST["roll_number"]);

    // SQL query to delete the record
    $sql = "DELETE FROM registration WHERE roll_number = '$roll_number'";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
