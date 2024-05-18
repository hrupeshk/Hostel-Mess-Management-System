<?php 

    error_reporting(0);

    $server_name="localhost";
    $user_name="root";
    $password="";   
    $db_name="mess_management _system";  
  
    $conn = mysqli_connect($server_name, $user_name,$password, $db_name);
    
    if($conn){
        echo "   "; 
    } else  
    {
        echo "Connection failed".mysqli_connect_error(); 
    }
?>

