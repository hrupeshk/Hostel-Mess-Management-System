<!-- * Connect with database -->

<?php
include("connection.php");

if (isset($_POST['countinue'])) { 
    $name = $_POST['name'];  
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobile_no = $_POST['mobile_no'];
    $per_add = $_POST['per_add']; 
    $tem_add = $_POST['tem_add'];

    // Prepare an SQL statement for execution
    $query = "INSERT INTO registration (name, roll_number, email, password, mobile_number, permanent_address, temporary_address) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssss", $name, $roll_no, $email, $password, $mobile_no, $per_add, $tem_add);
    
    // Execute the prepared statement
    if ($stmt->execute()) { 
        echo "<script> alert('Congrats, you are now a border of Patkai')</script>";
    } else {
        echo "<script> alert('Failed to save data')</script>";
    }

    // Close the statement
    $stmt->close();
}  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register yourself to be a border of Patkai</title>
    <link rel="stylesheet" href="Register.css">
</head>
<body> 
    <div class="content"> 
        <div class="logo"> <a href="./index.php"><img src="./Assets/pmh_logo.png" alt="" /></a> </div>
        <form class="content2" method="POST" action="Register.php">
            <div class="sign_in">
                <div class="text1">Create Account</div>
                <div class="email-psw-text">Name</div>
                    <input type="text" name="name" class="shadow-input" placeholder="First and last name" required>
                <div class="email-psw-text">Roll number</div>
                    <input type="text" name="roll_no" class="shadow-input" placeholder="Roll number" required> 
                <div class="email-psw-text">Email</div>
                    <input type="email" name="email" class="shadow-input" placeholder="Email" required> 
                <div class="email-psw-text">Password</div>
                    <input type="password" name="password" class="shadow-input" placeholder="Password" required>
                
                <div class="email-psw-text">Mobile number</div> 
                    <div class="mobile-container">
                        <div class="country-selector">
                          <select id="country-code">
                            <option value="+91">IN +91</option>
                            <option value="+44">UK +44</option>
                            <option value="+1">USA +1</option>
                            <!-- Add more options for other countries as needed -->
                          </select>
                        </div>
                        <input type="tel" name="mobile_no" id="mobile-number" class="shadow-input" placeholder="Mobile number" required>
                      </div>
                           
                <div class="email-psw-text">Permanent address</div>
                    <input type="text" name="per_add" class="shadow-input" placeholder="Permanent address" required> 
                <div class="email-psw-text">Temporary address</div>
                    <input type="text" name="tem_add" class="shadow-input" placeholder="Temporary address" required> 
                
                <button class="btn" type="submit" name="countinue">Continue</button> 

                <div class="term-cond">By continuing, you agree to our <a href="#">Terms & Conditions.</a></div>
            </div>
        </form>
        <div class="new-user">
            <div class="line-with-text">
                <span class="line"></span>
                <span class="text">Already have an account?</span>
                <span class="line"></span>
            </div>  
           <a href="./Sign_in.php"><div class="btn btn2">Sign in</div></a>              
        </div>
    </div>
</body>
</html>
