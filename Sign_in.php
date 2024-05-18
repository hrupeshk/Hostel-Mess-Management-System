<?php 
include("connection.php");
 
if (isset($_POST['continue'])) { 
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $query = "SELECT * FROM registration WHERE email=? AND password=?"; 

    $statement = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($statement, "ss", $email, $password);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);

    if ($result) { 
        if (mysqli_num_rows($result) > 0) { 
            // echo "<script> alert('Congrats, your sign in in successful')</script>";
            // Redirect user to a new page
            header("Location: border_page.html");
            exit(); // Terminate script after redirection
        } else {  
            echo "<script> alert('Invalid email or password')</script>";
        } 
    } else {
        // Error handling
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_stmt_close($statement);
    mysqli_close($conn);
}  
?>

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in page</title>
    <link rel="stylesheet" href="Sign_in.css">
</head>
<body>
    <div class="content">
        <div class="logo"> <a href="./index.php"><img src="pmh_logo.png" alt="" /></a></div>
        <div class="content2">
            <form class="sign_in" method="POST" action="Sign_in.php"> 
                <div class="text1">Sign in</div>
                <div class="email-psw-text">Email</div>
                    <input type="email" name="email" class="shadow-input " placeholder="Email"> 
                <div class="email-psw-text">Password</div>
                    <input type="password" name="password" class="shadow-input " placeholder="Password">  
                    <button class="btn" type="submit" name="continue">Continue</button>

                <div class="term-cond">By countinuing, you agree to Our <a href="#">Tems&Condition.</a></div>
            </form> 
        </div> 
        <div class="new-user">
            <div class="line-with-text">
                <span class="line"></span>
                <span class="text">New to Patkai?</span>
                <span class="line"></span>
            </div>  
            <a href="./Register.php"><div class="btn btn2">Create your Mess account</div></a>                
        </div>
    </div> 
</body>
</html>