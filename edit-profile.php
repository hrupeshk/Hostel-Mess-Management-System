<!-- * Connect with database -->
<?php
include("connection.php");

if (isset($_POST['search'])) {
    $roll_no = $_POST['roll_no'];

    $query = "SELECT * FROM registration WHERE roll_number = '$roll_no'";
    $data = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($data);
}

if (isset($_POST['modify'])) { 
    $name = $_POST['name'];  
    $roll_no = $_POST['roll_no'];
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $mobile_no = $_POST['mobile_no'];
    $per_add = $_POST['per_add']; 
    $tem_add = $_POST['tem_add'];

    $query = "UPDATE  registration SET name='$name' , email='$email', password='$password', mobile_number='$mobile_no', permanent_address='$per_add',temporary_address='$tem_add'  WHERE roll_number='$roll_no'";
              
    
    $data = mysqli_query($conn, $query);
    
    if ($data) { 
        echo "<script> alert('your data has been modified')</script>";
    } else {
        echo "<script> alert('Failed to modify data')</script>";
    }
}   
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register yourself to be border of patkai </title>
    <link rel="stylesheet" href="Register.css">
    <link rel="stylesheet" href="edit-profile.css">
</head>
<body>
    <div class="content">  
        <div class="logo"> <a href="./index.php"><img src="pmh_logo.png" alt="" /></a> </div>
        <form class="content2" method="POST" action="#">
            <div class="sign_in">
                <div class="text1">Create Account</div>
                <div class="email-psw-text">Name</div> 
                    <input type="text" name="name" class="shadow-input " placeholder="First and last name"
                    value="<?php if (isset($_POST['search'])) {
                       echo $result['name']; 
                   } ?>">
                <div class="email-psw-text">Roll number</div>
                    <input type="text" name="roll_no" class="shadow-input " placeholder="Enter Roll no only to fetch all data"
                    value="<?php if (isset($_POST['search'])) {
                       echo $result['roll_number']; 
                   } ?>"> 
                <div class="email-psw-text">Email</div>
                    <input type="email" name="email" class="shadow-input " placeholder="Email"
                    value="<?php if (isset($_POST['search'])) {
                       echo $result['email']; 
                   } ?>"> 
                <div class="email-psw-text">Password</div>
                    <input type="password" name="password" class="shadow-input " placeholder="Password"
                    value="<?php if (isset($_POST['search'])) {
                       echo $result['password']; 
                   } ?>">
                
                <div class="email-psw-text">Mobile number</div> 
                    <div class="mobile-container">
                        <div class="country-selector">
                          <select id="country-code">
                            <option value="+1">IN +91 </option>
                            <option value="+44">UK +44 </option>
                            <option value="+91">USA +1 </option>
                            <!-- Add more options for other countries as needed -->
                          </select>
                        </div>
                        <input type="tel" name="mobile_no" id="mobile-number" class="shadow-input " class="shadow-input " placeholder="Mobile number"
                        value="<?php if (isset($_POST['search'])) {
                       echo $result['mobile_number']; 
                   } ?>">
                      </div>
                           
                <div class="email-psw-text">Permanent address</div>
                    <input type="text" name="per_add" class="shadow-input " placeholder="Permanent address"
                    value="<?php if (isset($_POST['search'])) {
                       echo $result['permanent_address']; 
                   } ?>"> 
                <div class="email-psw-text">Temporary address</div>
                    <input type="text" name="tem_add" class="shadow-input " placeholder="Temporary address"
                    value="<?php if (isset($_POST['search'])) {
                       echo $result['temporary_address'];  
                   } ?>"> 
                
                <button class="btn btn3" type="submit" name="search">Search</button> 
                <button class="btn" type="submit" name="modify">Modify</button> 
             </div>
        </form>
        <div class="new-user">
            <div class="line-with-text"> 
                <span class="line"></span>
                <span class="text">sign in after update?</span>
                <span class="line"></span>
            </div>  
           <a href="./Sign_in.php"> <div class="btn btn2">Sign in</div>  </a>              
        </div>
    </div>
</body>
</html>