<?php
include('validation.php');
if(isset($_SESSION['login_user'])){
header("location:home1.php");
}
?>


<?php
include_once('sign_con.php');

?>


<?php
if(isset($_POST['signup']))
{
$user = $_POST['user'];
$password = $_POST['password'];

if(empty($user))
{
   $msg = "Please enter Userame";
}
else if(empty($password))
{
   $msg = "Please enter password!!";
   }
else
{
   if(mysql_query("insert into sign_table(user,password) values('$user','$password')"))
   {
   $msg1 = " You Succesfuly SignUp, Thankyou !";
}
}      
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="web_decor.css" type="text/css"  />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body style="background-color:#FFCCFF">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="kerala-tourism-title.png" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="web_p.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
		 </li>
		<li class="nav-item">
          <a class="nav-link" href="trip.php">Book Your Trip</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" href="signin.php">Sign Up</a>
		 <li class="nav-item">        </li>

          <a class="nav-link" href="services.php">Services</a>
        </li>
        
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!--login form-->
<div class="container" >
  <div class="row">
    <div class="col-lg-6"><br /><p>Already have account. Then <a href="#"><b>Log In </b></a>into your account.</p>
	<h2>Login</h2> 
	   <form action="" method="post">
	   <div class="form-group">
	     <label>Username</label>
		   <input type="text" name="user" class="form-control" />
		   </div>
		   <div class="form-group">
		     <label>Password</label>
			 <input type="password" name="password" class="form-control" />
			 </div>
			 <button type="submit" name="submit" class="btn btn-primary">LogIn</button>
			 <span style="color:#FF0000"><?php echo $error; ?></span>
			 </form>
			 </div>
			 <!--login form end-->
			 
			 <!--sign in form-->
			 <div class="col-lg-6"><br /><p>Don't have an account...?<a href="#"><b>Sign Up</b></a></p>		
	<h2>Sign Up</h2> 
	   <form method="post">
	   <div class="form-group">
	     <label>Username</label>
		   <input type="text" name="user" class="form-control" />
		   </div>
		   <div class="form-group">
		     <label>Password</label>
			 <input type="password" name="password" class="form-control" />
			 </div>
			 <button  type="submit" name="signup" class="btn btn-primary">SignUp</button>
			  <p style="color:#F00">
<?php 
   if(isset($msg))
   {
	    echo $msg;
    }
?>

</p>
<p style="color: #060">
<?php 
   if(isset($msg1))
   {
	    echo $msg1;
    }
?>

</p>
			 </form>
			 </div>
			</div>
	
	</div>
	<br /><br /><br />

	
	
	<div class="section stream">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 style="text-align:center"> <span style="color:#3eb7ee">#KeralaTourism</span> is Live &amp; Trending. Don't forget to follow &amp; share your Kerala experience</h3>
        <hr/>          
      </div>
    </div>
  </div>
</div>
<!--footer section-->

<div class="footer-section" >
  <div class="container">
    <div class="row">
    	<div class="col-md-2 col-sm-4 col-xs-6">
        <h3>Explore</h3>
        <ul class="list-unstyled footer-min">
          <li><a href="#">Classification Schemes</a></li>
          <li><a href="#">Governmental Affairs</a></li>
          <li><a href="#">Media Room</a></li>
          <li><a href="#">Tourism Events</a></li>
          <li><a href="#">Maps</a></li>
          <li><a href="#">Site Map</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <h3>Travel Hub</h3>
        <ul class="list-unstyled footer-min">
          <li><a href="#">Kerala at a Glance</a></li>
          <li><a href="#">Travel Care</a></li>
          <li><a href="#">Where to Stay</a></li>
          <li><a href="#">How to?</a></li>
          <li><a href="#">Travel Tips</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <h3>Nature</h3>
        <ul class="list-unstyled footer-min">
          <li><a href="#">Hills</a></li>
          <li><a href="#">Backwaters</a></li>
          <li><a href="#">Beaches</a></li>
          <li><a href="#">Wildlife</a></li>
          <li><a href="#">Waterfalls</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <h3>Places</h3>
        <ul class="list-unstyled  footer-min ">
          <li><a href="#">Munnar</a></li>
          <li><a href="#">Wayanad</a></li>
          <li><a href="#">Kovalam</a></li>
          <li><a href="#">Periyar</a></li>
          <li><a href="#">Varkala</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 footer-min">
        <h3>Specialities</h3>
        <ul class="list-unstyled">
          <li><a href="#">Ayurveda</a></li>
          <li><a href="#">Monsoon</a></li>
          <li><a href="#">Houseboat</a></li>
          <li><a href="#">Kerala Food</a></li>
          <li><a href="#">Festivals</a></li>
        </ul>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6 ">
        <h3>Videos/Photos</h3>
        <ul class="list-unstyled  footer-min">
          <li><a href="#">Videos</a></li>
          <li><a href="#">Photos</a></li>
          <li><a href="#">360&deg; Videos</a></li>
          <li><a href="#">Royalty Free Photos</a></li>
          <li><a href="#">Wallpapers</a></li>
        </ul>
      </div>        
      <div class="col-xs-12">
        <hr class="hr-f">
      </div>
<div class="col-md-4 col-sm-4 col-xs-12 text-center">
        <div class="subscribe-box">
          <h3>Subscribe Our Newsletter<br/><small>Get notified to Kerala Tourism events and activities</small></h3>
          <!-- subscribing part -->
            <div class="input-group">
              <input name="email" value="" class="form-control email-field" type="text" placeholder="Your Email">
              <span class="input-group-btn">
              <button class="btn btn-default subscribe-btn" type="submit"> SUBSCRIBE </button>
              </span> </div>
          
        </div>        </div>
		<!--end of subs part-->
<div class="col-md-4 col-sm-4 col-xs-12 text-center pd_top"> 

        <h3><small>For Business/Trade/Classifications and Tenders please visit</small><br/>
        <a href="http://www.keralatourism.gov.in" target="_blank">www.keralatourism.gov.in</a></h3>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12 text-center">
      
      </div> 
      <div class="col-xs-12">
        <hr class="hr-f">
      </div>
       <div class="col-xs-12 text-center">
            <a href="https://www.keralatourism.org/recruitments" class="btn btn-primary rec-button text-white" >RECRUITMENTS</a>
          </div>  
    </div>
  </div>
</div>
</div>
<div class="sec-client">
<div class="container b-margin">
    <div class="col-xs-12 pad-non text-center">
    
    <div class="associates"> 
        <a  href="#"><img src="f1.png" alt="District Tourism Promotion Councils" title="District Tourism Promotion Councils" /></a>
        <a href="#" rel="nofollow"   target="_blank"><img class="ass0-1" src="f2.jpg"  alt="KTDC"  title="KTDC"></a>
        <a href="#" rel="nofollow"   target="_blank"><img class="ass0-1" src="f3.jpg" alt="Thenmala Ecotourism Promotion Society" title="Thenmala Ecotourism Promotion Society"></a>
        <a href="#" rel="nofollow"   target="_blank"><img class="ass0-2" src="f4.png"  alt="BRDC" title="BRDC"></a>
        <a href="#" target="_blank"><img class="ass0-3" src="f5.png" alt="Sargaalaya"  title="Sargaalaya"></a>
        <a href="#" rel="nofollow"   target="_blank"><img class="ass0-4" src="f6.jpg" alt="SIHMK"  title="SIHM-K"></a>
        <a href="#" rel="nofollow"   target="_blank"><img  class="ass0-4" src="f7.jpg"  alt="Responsible Tourism Mission"  title="Responsible Tourism Mission"></a>
        <a href="#" rel="nofollow"   target="_blank"><img class="ass0-1" src="f8.jpg"  alt="KITTS"  title="KITTS"></a>
        <a href="#" rel="nofollow"   target="_blank"><img class="ass0-5" src="f9.jpg"  alt="Adventure Tourism" title="Adventure Tourism" ></a>
        <a href="#" rel="nofollow"   target="_blank"><img class="ass0-5"  src="f0.jpg"  alt="Muziris Heritage" title="Muziris Heritage" ></a>
    </div>
        <div id="credit" class="fnt-color-light">
            <h3><small>Toll free No: </small> 1-800-425-4747 <small>(Within India only)</small></h3>Department of Tourism, Government of Kerala, Park View, Thiruvananthapuram, Kerala, India - 695 033<br>Phone: +91 471 2321132, Fax: +91 471 2322279, E-mail: <a href="#" >info@keralatourism.org</a>. <br>All rights reserved &copy; Kerala Tourism 2022. <a href="#" title="Copyright">Copyright</a> | <a href="#" title="Terms of Use">Terms of Use</a> | <a href="#" title="Cookie Policy">Cookie Policy</a> | <a href="#" title="Contact Us">Contact Us</a>. <br>Developed &amp; Maintained by Invis Multimedia. 
       </div>
    </div> 
</div>
</div>		  
</body>
</html>
