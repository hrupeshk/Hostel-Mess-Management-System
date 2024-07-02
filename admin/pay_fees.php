<!-- * Connect with database -->
<?php
include("../connection.php");
 
if (isset($_POST['pay_now'])) { 
    $name = $_POST['name'];  
    $roll_number = $_POST['roll_number'];
    $room_number = $_POST['room_number'];
    $month = $_POST['month'];
    $date = $_POST['date'];
    $dues = $_POST['dues']; 
    $fine = $_POST['fine'];
    $total = $_POST['total'];

    $query = "INSERT INTO mess_fees (name, roll_number, room_number, month, date, dues,fine,total) 
              VALUES ('$name', '$roll_number', '$room_number', '$month', '$date', '$dues','$fine','$total')";
    
    $data = mysqli_query($conn, $query);
    
    if ($data) { 
        echo "<script> alert('Congrats , Your transaction is scussesfull')</script>";
    } else {
        echo "<script> alert('Failed to save data')</script>";
    }
}  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay your mess fees  </title>
    <link rel="stylesheet" href="../Register.css">
</head>
<body> 
    <div class="content"> 
        <div class="logo"> <a href="./admin.php"><img src="../Assets/pmh_logo.png" alt="" /></a> </div>
        <form class="content2" method="POST" action="pay_fees.php">
            
                <div class="text1">Pay your mess fees</div> 
                <div class="email-psw-text">Name</div>
                    <input type="text" name="name" class="shadow-input " placeholder="First and last name">
                <div class="email-psw-text">Roll number</div>
                    <input type="text" name="roll_number" class="shadow-input " placeholder="Roll number"> 
                <div class="email-psw-text">Room number</div>
                    <input type="text" name="room_number" class="shadow-input " placeholder="Room number"> 
                <div class="email-psw-text">Month</div>
                    <input type="month" name="month" class="shadow-input " placeholder="">
                
                <div class="email-psw-text">Date</div> 
                    <input type="date" name="date" id="mobile-number" class="shadow-input " class="shadow-input " placeholder="Date">
                      
                           
                <div class="email-psw-text">Dues</div>
                    <input type="number" name="dues" class="shadow-input " placeholder=" Dues"> 
                <div class="email-psw-text">Fine</div>
                    <input type="number" name="fine" class="shadow-input " placeholder=" Fine"> 
                <div class="email-psw-text">Total</div> 
                    <input type="number" name="total" class="shadow-input " placeholder=" Total"> 
                
                <button class="btn" type="submit" name="pay_now" style="margin-top: 2rem;">Pay now</button> 

                <div class="term-cond">By countinuing, you agree to Our <a href="#">Tems&Condition.</a></div>
            <!-- </div> -->
        </form> 
    </div>
</body>
</html>