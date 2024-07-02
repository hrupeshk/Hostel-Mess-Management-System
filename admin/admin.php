<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is admin webpage</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
        }
        header {
            width: 100%;
            height: 5rem;
            background-color: rgb(171, 186, 198);
            display: flex;
            align-items: center;
        }
        .logo {
            width: 4vw;
            margin-left: 2rem;
            margin-right: 1rem;
        }
        .logo-text{font-size: 1.3rem;}
        .vertical {
            background-color: rgb(171, 186, 198);
            display: flex;
            flex-direction: column;
            width: 10vw;
            height: calc(100vh - 5rem); /* 100% height minus header height */
        }
        .flex {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-size: 1.2rem;
        }
        .border {
            height: 100px;
            margin-top: 6rem;
            justify-content: space-around;
        }
        .fees {
            margin-top: 4rem;
            height: 100px;
            justify-content: space-around;
        }
        .feed {
            display: flex;
        }
        .content {
            width: calc(25vw - 1rem); /* Remaining width minus possible padding */
            margin-top: 5rem;  
            margin-left: 3rem;
        }
        .overlay{width: calc(23vw - 1rem);}
        .content2{margin-left: 7rem;}
        .btn{background-color: #bfe858;width: 5.5rem;height: 2.8rem; border-radius: 1rem;font-size: 1rem;border: none;cursor: pointer;}
        h1{margin-left: 20rem;}
    </style>
</head>
<body>
    <header>
        <a href="../index.php"><img src="../Assets/pmh_logo.png" class="logo"></a>
        <div class="logo-text">Patkai Hostel Mess</div>
        <h1>Welcome to Admin Portal</h1>
    </header>
    
    <div class="feed">
        <div class="vertical">
            <div class="border flex">
                <h3>Borders</h3>
                <a href="./view_border.php">View borders</a>
                <a href="./view_border.php">Delete borders</a>
            </div>
            <div class="fees flex">
                <h3>Mess fees</h3>
                <a href="./pay_fees.php">Pay mess fees</a>
                <a href="./view_fee_status.php">View status</a>
                <!-- <a href="./log_out.php">Log out</a> -->
            </div>
            <div class=" border flex log_out"> 
                <a href="./log_out.php" >Log out</a>
            </div>
                
        </div> 
        <div class="content">
            <?php include 'display_feedback.php'; ?>
        </div>
        <div class="content content2">
            <?php include 'show_percent_mess_fees.php'; ?>
        </div>
        <div class="content overlay"> 
                <iframe src="../Notification/display.html" width="100%" height="440px"  frameborder="0"></iframe>
          <a href="../Notification.html"  ><button class="btn ">view all</button></a>
      </div> 
    </div>
</body>
</html>

