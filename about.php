<?php 
session_start();
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>eoc</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout about_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                     <div class="full">
                        <div class="logo">
                           <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
                   <!--navigation bar-->
                  <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Faculty.php">Faculty</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="Offers.php">Offers</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item">
                           <a class="login_btn hide_btn"  href="logout.php">Log out</a>

                        </li>
                           </ul>
                        </div>
                     </nav>
                        <!--end navigation bar-->
                     <div class="right_button">
                        <li class="nav-item">
                           <a class="login_btn"  href="logout.php">Log out</a>

                        </li>
                        <!-- <a class="login_btn" href="signup.html">Login</a> -->
                        <!-- <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <div class="blue_bg">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2> <img src="images/heading_icon.png" alt="#">About <span class="yellow">Us</span></h2>
                  </div>
               </div>
            </div>
         </div>
         <hr class="margin">
      </div>
      <!-- about section -->
      <div id="about" class="about" style="background-color: black;">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="col-md-10 offset-md-1">
                     <div class="about_img">
                        <figure style="margin: 50px 0;"><img src="images/about_img.png" alt="#"/></figure>
                     </div>
                  </div>
                  <div class="titlepage">
                     <h1 style="font-size: 30px; font-weight: bolder; color: #fcc10e;">- Diversify your investment -</h1>
                     <p style="color:  #e6e3dd;">Take an honest look at your entire financial situation — what you own and what you owe. This is a “net worth statement.” On one side, list what you own. These are your “assets. ” On the other side, list what you owe. These are your “liabilities” or debts. Subtract your liabilities from your assets. If your assets are larger than your liabilities, you have a “positive” net worth. If your liabilities are larger than your assets, you have a “negative” net worth.

                        You’ll want to update your “net worth statement” every year to keep track of how you are doing. Don’t be discouraged if you have a negative net worth -- following a financial plan will help you turn it into positive net worth.
                        
                        The next step is to keep track of your income and expenses. Write down what you and others in your family earn and spend each month, and include a category for savings and investing. If you are spending all your income, and never have money to save or invest, start by cutting back on expenses. When you watch where you spend your money, you will be surprised how small everyday expenses can add up. Many people get into the habit of saving and investing by paying themselves first. An easy way to do this is to have your bank automatically deposit money from your paycheck into a savings or investment account.</p>
                  </div>
               </div>
             
            </div>
         </div>
      </div>
      <!-- about section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <a class="logo2" href="index.php"><img src="images/logo2.png" alt="#"/></a>
                     <p>Thank you for considering I GROW as your trusted partner in financial prosperity. We're dedicated to providing personalized investment solutions and expert guidance to help you achieve your financial goals. Whether you're planning for retirement, building wealth, or securing your family's future, our team is here to support you every step of the way. Reach out to us today to start your journey toward financial success.
                     </p>
                  </div>
                  <div class="col-md-3">
                     <div class="fid_box">
                        <h3>Useful Link </h3>
                        <ul class="use_link">
                           <li ><a  href="index.php">Home</a></li>
                           <li class="active"><a href="about.php">About</a></li>
                           <li><a href="Faculty.php">Faculty</a></li>
                           <li><a href="Offers.php">Offers</a></li>
                           <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="fid_box">
                        <h3>Contact  </h3>
                        <ul class="location_icon">
                           <li><a href="Javascript:void(0)"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br> address update <br>coming soon</li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i></a><br>
                              (+91)  98347 82344<br> (+91) 77759 13544
                           </li>
                           <li><a href="Javascript:void(0)"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> Igrow002@gmail.com</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2019 All Rights Reserved.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function openNav() {
           document.getElementById("mySidepanel").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidepanel").style.width = "0";
         }
      </script>
   </body>
</html>

