<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hostel Mess Management System</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="menu.css" /> 
  </head>
  <body>
    <div class="main"> 
      <header class="header"> 
        <div class="logo-div">
          <div class="logo"><img src="pmh_logo.png" alt="" /></div>
          <div class="logo-text">Patkai Hostel Mess</div>
        </div>    
        
        <nav class="navigation"> 
          <a href="#" class="anchor">Home</a> 
          <a href="#" class="anchor">About</a>  
          <a href="./contact.html" class="anchor">contact Us</a> 
          <div class="login-container"> 
             <button class="login-button">Login</button>
            <div class="hover-content">
             <a href="./Sign_in.php"> <button class="user-button">User</button></a>
              <a href="./Admin_Sign_in.php"><button class="admin-button">Admin</button></a>
            </div>  
          </div>           
        </nav>  
      </header>
      <!-- ! place Notification on image  -->  
       <div class="news-on-img">
            <img src="./img1.jpg" alt="Mess image" class="bg-img"/> 
            <div class="overlay"> 
                <iframe src="./Notification/display.html" width="23%" height="300px"  frameborder="0"></iframe>
            </div> 
        </div>
   
      <!-- Menu Section -->
      <div class="menu-title">Mess Menu</div>
      <div class="menu-news">
      <div class="menu"> 
        <div class="days-column">
            <button class="day-button active">Monday</button>
            <button class="day-button">Tuesday</button>
            <button class="day-button">Wednesday</button> 
            <button class="day-button">Thursday</button> 
            <button class="day-button">Friday</button> 
            <button class="day-button">Saturday</button> 
            <button class="day-button">Sunday</button> 
           
        </div> <!-- Monday -->
      <div class="items-column">
        <div class=" day-content active" data-day="monday">
            <div class="item">
                <div class="title"><div class="text">Breakfast</div></div>
                <div class="content">
                    <p>Monday ka nasta</p>  
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Lunch</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                   
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Dinner</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <!-- Other meal items for Monday -->
        </div>
        <div class=" day-content" data-day="tuesday">
           
            <div class="item">
                <div class="title"><div class="text">Breakfast</div></div>
                <div class="content">
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Lunch</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Dinner</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <!-- Other meal items for Monday -->
        </div>
        <div class=" day-content" data-day="wednesday">
            
            <div class="item">
                <div class="text">Breakfast</div> 
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="text">Lunch</div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="text">Dinner</div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <!-- Other meal items for Monday -->
        </div>
        <div class=" day-content" data-day="thursday">
            
            <div class="item">
                <div class="title"><div class="text">Breakfast</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Lunch</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Dinner</div></div>
                <div class="content">
                   
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <!-- Other meal items for Monday -->
        </div>
        <div class=" day-content" data-day="friday">
            
            <div class="item">
                <div class="title"><div class="text">Breakfast</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Lunch</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Dinner</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <!-- Other meal items for Monday -->
        </div>
        <div class=" day-content" data-day="saturday">
            
            <div class="item">
                <div class="title"><div class="text">Breakfast</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Lunch</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Dinner</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <!-- Other meal items for Monday -->
        </div>
        <div class=" day-content" data-day="sunday">
            
            <div class="item">
                <div class="title"><div class="text">Breakfast</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Lunch</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <div class="item">
                <div class="title"><div class="text">Dinner</div></div>
                <div class="content">
                    <p>Aaloo Poha &amp; Matki Ussal</p>
                    <p>Jalebi BBJ</p>
                    <p>Tea</p>
                    <p>Egg/Omelette/Full Fry</p>
                    <p>Banana</p>
                </div>
            </div>
            <!-- Other meal items for Monday -->
        </div>
      </div> 
      </div>
      <!-- <div class="overlay"> 
                <iframe src="./Notification/display.html" width="23%" height="300px"  frameborder="0" ></iframe>
      </div> -->
      </div>
      
      
    </div>
    <script src="menu.js"></script>

<!-- todo Footer Section --> 
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

<!--*footer starts from here-->
<footer class="footer">
<div class="container bottom_border"> 
<div class="row">
<div class=" col-sm-4 col-md col-sm-4  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
<!--headin5_amrc-->
<p class="mb10">Patkai Men's Hostel, Tezpur University Napaam , Tezpur , 784028.</p>
<p><i class="fa fa-phone"></i>  +91 3712-27-3520  </p>
<p><i class="fa fa fa-envelope"></i> patkaimenhostel@gmail.com </p>


</div>


<div class=" col-sm-4 col-md  col-6 col">
<h5 class="headin5_amrc col_white_amrc pt2">University Links</h5>
<!--headin5_amrc-->
<ul class="footer_ul_amrc">
<li><a href="http://www.tezu.ernet.in/">Tezpur University</a></li>
<li><a href="http://www.tezu.ernet.in/Library/">Central Library</a></li>
<li><a href="http://agnee.tezu.ernet.in/">Students WebMail</a></li>
<li><a href="http://m.p-y.tm/tuni_neww">Academic Fees Payment</a></li>
<li><a href="http://www.tezu.ernet.in/newsfeeds.html">TU News &amp; Notifications</a></li>
<li><a href="http://www.tezu.ernet.in/hostels/patkai/downloads/hostel_rule.pdf">Tezpur University Hostel Rule</a></li>
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-6 col">  
  <h5 class="headin5_amrc col_white_amrc pt2">Quick links</h5>
  <!--headin5_amrc-->
  <ul class="footer_ul_amrc">
    <li><a href="leave_card.pdf">Hostel Leave Form</a></li>
    <li><a href="http://www.tezu.ernet.in/hostels/patkai/downloads/hostel_withdrawal.pdf">Hostel Withdrawal Form</a></li>
    <li><a href="http://www.tezu.ernet.in/hostels/patkai/downloads/medical_claim.pdf">Medical Claim Form</a></li>
    <li><a href="http://www.tezu.ernet.in/hostels/patkai/downloads/railway_concession.pdf">Railway concession Form</a></li>
    <li><a href="http://www.tezu.ernet.in/hostels/patkai/downloads/boarder_certificate.pdf">Border Certificate Form</a></li>
    <li><a href="http://www.tezu.ernet.in/hostels/patkai/downloads/hostel_accommodation.pdf">Hostel Accommodation Form</a></li>
    <li><a href="http://www.tezu.ernet.in/hostels/patkai/downloads/guidelines.pdf" >Mess and other General Rules</a></li>
    
</ul>
<!--footer_ul_amrc ends here-->
</div>


<div class=" col-sm-4 col-md  col-12 col">
<h5 class="headin5_amrc col_white_amrc pt2">Follow us</h5>
<!--headin5_amrc ends here-->

<ul class="footer_ul2_amrc">
<li><a href="https://www.facebook.com/patkaihostel/"><i class="fab fa-facebook-f fleft padding-right"></i> </a><p>Facebook...</p></li>
<li><a href="https://www.youtube.com/channel/UC8yJtmrqE8w_YTBb-M02E3Q"><i class="fab fa-youtube fleft padding-right"></i> </a><p>Youtube...</p></li>
<li><a href="https://www.instagram.com/patkai_2011/"><i class="fab fa-instagram fleft padding-right"></i> </a><p>Instagram...</p></li>
</ul>
<!--footer_ul2_amrc ends here--> 
</div>
</div>
</div>


<div class="container">
<ul class="foote_bottom_ul_amrc">
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">Contact</a></li>
</ul>
<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">© Copyright 2023 Patkai Men's Hostel, Tezpur University Napaam , Tezpur -
  784028. | Designed by <a href="https://www.linkedin.com/in/rupesh-kumar-465b37282/">Rupesh</a></p>

<ul class="social_footer_ul">
<li><a href="https://www.facebook.com/patkaihostel/"><i class="fab fa-facebook-f"></i></a></li> 
<li><a href="https://twitter.com/call_me_rupesh"><i class="fab fa-twitter"></i></a></li>
<li><a href="https://www.youtube.com/channel/UC8yJtmrqE8w_YTBb-M02E3Q"><i class="fab fa-youtube"></i></a></li>
<li><a href="https://www.instagram.com/patkai_2011/"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<script src="Jscript.js" ></script> 
 
  </body>
</html>
