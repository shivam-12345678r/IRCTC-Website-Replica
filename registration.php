
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>|| NWR Portal ||</title>
  <link rel="icon" type="image/png" href="assets/images/favicon.png">
  <!--Main style css-->
  <link rel="stylesheet" href="assets/css/style.css"> 
   <link rel="stylesheet" href="assets/css/style2.css">
  <!--Responsive style css-->
  <link rel="stylesheet" href="assets/css/responsive.css"> 
    
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="assets/js/jquery.min.js"></script>

  <script> 
    jQuery(function(){
      jQuery('#headers').load('header.html');       
      jQuery('#footer').load('footer.html');       
    });
  </script>

</head>
<body>
<div style="background-image: url('assets/images/train2.jpg');">
<!-- Start Header Here -->
    <div id="headers"></div>
<header class="main_header fixed_header">
    <div class="container clearfix">
      <div class="logo_head">
        <a href="index.html"><img src="assets/images/irctc-new-logo.png" alt=""></a>
      </div>
      <div class="navbar-expand-lg nav_btn_toggle">    
        <button class="navbar-toggler open_mobile_menu" type="button" data-target="#topNavMobile">
          <div class="menuName">Menu</div>
          <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
        </button>
      </div>
            
      <nav class="top_nav_links navbar navbar-expand-lg">
              <div class="collapse navbar-collapse" id="topNav">
                  <ul class="navbar-nav">
				  <li class="has-child">
                      <a href="index.html">Home</a></li>
					<li class="has-child">
                      <a href="javascript:void(0);">About Us</a>
                        <ul class="sub-menu">
                          <li><a href="about.html"> About Us </a></li>
                        </ul>
                    </li>
					<li class="has-child">
                      <a href="login.php">Login</a>
					  <li><a href="registration.php">Register</a></li>
                      <li><a href="contact.html">Contact us </a></li>

                  </ul>
              </div>
      </nav>
      
    </div>
  </header><br><br><br><br><br><br><br><br>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
        <input type="submit" name="submit" value="Register" class="login-button"><br><br> 
        <p class="link">Already have an account? <br><br> <a href="login.php"><ul><center>Login here</center></ul></a></p>
    </form>
<?php
    }
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- Start Footer -->
    <div id="footer"></div>
	<footer>
      <div class="container">
        <div class="row">

          <div class="col-md-9">
            <h3>Quick Links</h3>
            <div class="row">
              <div class="col-md-2">
                <ul class="quicklinks">
                  <li><a href="about.html" target="_blank"> About Us </a></li>
				  <li><a href="login.html" target="_blank"> Login </a></li>
				  <li><a href="register.html" target="_blank"> Register </a></li>
				  <li><a href="contact.html" target="_blank"> Contact Us </a></li>
                  </ul>              
              </div>
              
              <div class="col-md-2">
                <ul class="quicklinks">
                  <li><a href="https://www.air.irctc.co.in/" target="_blank"> Air Ticketing </a></li>
                  <li><a href="https://www.irctctourism.com/" target="_blank"> Tourism </a></li>
                  <li><a href="https://www.irctc.co.in/nget/train-search" target="_blank"> Train Ticket</a></li>
                  <li><a href="https://www.ecatering.irctc.co.in/" target="_blank"> E Catering </a></li>
				   </ul>              
              </div>
              <div class="col-md-2">
			  <img src="assets/images/irctc-new-logo.png">
			  </div>
            </div>
          </div>
        </div>
      </div>
<div class="copyright">© 2021 IRCTC |  PROJECT BY Simarjeet Kaur.</div>
</footer>
<a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
  <i class="fa fa-arrow-up"></i>
</a>
<!--Bootstrap 4.1.0-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/libs/bootstrap-4.1.0/bootstrap.min.js"></script>

  <!--OwlCarousel2-2.3.4-->
  <script src="assets/libs/owlcarousel2-2.3.4/owl.carousel.min.js"></script>
  <!--Custom js-->
  <script src="assets/js/custom.js"></script>
  <!--Custom js-->
  <script src="assets/js/marquee.js"></script>
    <script>
$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('#back-to-top').tooltip('hide');
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
        
        $('#back-to-top').tooltip('show');

});    
  </script>
</body>
</html>
