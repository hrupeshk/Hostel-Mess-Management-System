<!-- * Connect with database -->
<?php
include("connection.php");

if (isset($_POST['search'])) {
    $roll_no = $_POST['roll_no'];

    $query = "SELECT * FROM registration WHERE roll_number = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $roll_no);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    $stmt->close();
}

if (isset($_POST['modify'])) { 
    $name = $_POST['name'];  
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $mobile_no = $_POST['mobile_no'];
    $per_add = $_POST['per_add']; 
    $tem_add = $_POST['tem_add'];

    $query = "UPDATE registration SET name = ?, email = ?, password = ?, mobile_number = ?, permanent_address = ?, temporary_address = ? WHERE roll_number = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssss", $name, $email, $password, $mobile_no, $per_add, $tem_add, $roll_no);
    
    if ($stmt->execute()) { 
        echo "<script> alert('Your data has been modified')</script>";
    } else {
        echo "<script> alert('Failed to modify data')</script>";
    }
    $stmt->close();
}   
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register yourself to be border of Patkai</title>
    <link rel="stylesheet" href="Register.css">
    <link rel="stylesheet" href="edit-profile.css">
</head>
<body>
    <div class="content">  
        <div class="logo"> <a href="./index.php"><img src="./Assets/pmh_logo.png" alt="" /></a> </div>
        <form class="content2" method="POST" action="#">
            <div class="sign_in">
                <div class="text1">Create Account</div>
                <div class="email-psw-text">Name</div> 
                    <input type="text" name="name" class="shadow-input" placeholder="First and last name"
                    value="<?php if (isset($result['name'])) { echo $result['name']; } ?>">
                <div class="email-psw-text">Roll number</div>
                    <input type="text" name="roll_no" class="shadow-input" placeholder="Enter Roll no only to fetch all data"
                    value="<?php if (isset($result['roll_number'])) { echo $result['roll_number']; } ?>"> 
                <div class="email-psw-text">Email</div>
                    <input type="email" name="email" class="shadow-input" placeholder="Email"
                    value="<?php if (isset($result['email'])) { echo $result['email']; } ?>"> 
                <div class="email-psw-text">Password</div>
                    <input type="password" name="password" class="shadow-input" placeholder="Password"
                    value="<?php if (isset($result['password'])) { echo $result['password']; } ?>">
                
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
                        <input type="tel" name="mobile_no" id="mobile-number" class="shadow-input" placeholder="Mobile number"
                        value="<?php if (isset($result['mobile_number'])) { echo $result['mobile_number']; } ?>">
                      </div>
                           
                <div class="email-psw-text">Permanent address</div>
                    <input type="text" name="per_add" class="shadow-input" placeholder="Permanent address"
                    value="<?php if (isset($result['permanent_address'])) { echo $result['permanent_address']; } ?>"> 
                <div class="email-psw-text">Temporary address</div>
                    <input type="text" name="tem_add" class="shadow-input" placeholder="Temporary address"
                    value="<?php if (isset($result['temporary_address'])) { echo $result['temporary_address']; } ?>"> 
                
                <button class="btn btn3" type="submit" name="search">Search</button> 
                <button class="btn" type="submit" name="modify">Modify</button> 
             </div>
        </form>
        <div class="new-user">
            <div class="line-with-text"> 
                <span class="line"></span>
                <span class="text">Sign in after update?</span>
                <span class="line"></span>
            </div>  
           <a href="./Sign_in.php"><div class="btn btn2">Sign in</div></a>              
        </div>
    </div>
</body>
</html>
