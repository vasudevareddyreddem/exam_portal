<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Be a Millionaire </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>

<script>
 function disableSubmit() {
  document.getElementById("submit").disabled = true;
 }

  function activateButton(element) {

      if(element.checked) {
        document.getElementById("submit").disabled = false;
       }
       else  {
        document.getElementById("submit").disabled = true;
      }

  }
</script>
</head>

<body>

<div class="header">

<div class="row">

<div class="col-lg-6">
 &nbsp  &nbsp   &nbsp   &nbsp   &nbsp &nbsp  &nbsp   &nbsp   &nbsp   &nbsp  <IMG SRC="image/logo.jpg" ALT="some text"  WIDTH="100" HEIGHT="90">
<span class="logo">Be a Millionaire</span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Log In</b></span></a></div>
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
	  
      <div class="modal-body">
	   <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
<label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    <div class="navbar-brand form-lbl"><a href="/Login/forgot-password">Forgot Password</a></div>

    
  </div>
</div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

</div><!--header row closed-->
</div>

<div class="bg1">
<div class="row">
<div class="col-md-8">
<div id="demo" class="carousel slide"  style="width:700px;height:400px;margin-top:100px; margin-left:200px" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="image/1.jpg" alt="Los Angeles"  width="1000" height="400">
    </div>
    <div class="item">
      <img src="image/2.jpg" alt="Chicago" width="1000" height="400">
    </div>
    <div class="item">
      <img src="image/3.jpg" alt="New York"  width="1000" height="400">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
	 <span class="sr-only">previos</span>
  </a>
  <a class="right carousel-control" href="#demo" data-slide="next">
    <span  class="glyphicon glyphicon-chevron-right"></span>
	<span class="sr-only">next</span>
  </a>
</div>
</div>
<div class="col-md-4"></div>
<div class="col-md-3 panel">
<h3 style="text-align:center">Be a Millionaire </h3>
<!-- sign in form begins -->  
  <form class="form-inline"  name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->

  <div class="form-group mb-2 " style="margin-top:20px;" >
&nbsp  &nbsp  <label for="name"><b> Name</b></label>  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  
<input class="form-control" data-val="true" data-val-required="Full name is Required " id="name" name="name" placeholder="Enter your name" type="text" value="">
</div>

<!-- Text input-->
<div class="form-group md-12" style="margin-top:20px;" >
 &nbsp  &nbsp  <label><b>Gender</b></label>  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  
  <input data-val="true" data-val-required="Gender of birth is Required" id="gender" name="gender" type="radio" value="Female">Female
  &nbsp &nbsp <input data-val="true" data-val-required="Gender of birth is Required" id="gender" name="gender" type="radio" value="Male">Male
</div>


<!-- Text input-->
<div class="form-group md-12" style="margin-top:20px;">
   &nbsp    <label><b>Date Of Birth</b></label> &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp <input class="form-control" data-val="true" data-val-required="Full name is Required" id="date" 
   name="date" type="date" value="">
</div>

<!-- Text input-->
 <div class="form-group" style="margin-top:20px;">
  &nbsp  &nbsp  <label><b> Country</b></label>   &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp 
    <select class="form-control" data-val="true" data-val-required="Country is Required" style="width:180px;" name="country" id="country" placeholder="Country" type="text" value="">
                                                <option>Enter your country</option>
                                                <option>India</option>
												<option>UK</option>
												<option>US </option>
												<option>Germany</option>
												<option>Italy </option>
												<option>Australia </option>
												<option>Switzerland</option>
												<option>Brazil </option>
												<option>Newzealand </option> 
												<option>North Europe </option>
												<option>Norway </option>
												<option>Denmark </option>
												<option>Finland </option>
												<option>Colombia </option>
												<option>Mexico </option>
    </select>
  </div>

<!-- Text input-->
<div class="form-group" style="margin-top:20px;">
  &nbsp  &nbsp  <label><b> State</b></label>  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp
    <select class="form-control" data-val="true" data-val-required="Country is Required"style="width:180px;" id="state" name="state" placeholder="State" type="text" value="">
                                                <option>Enter your State</option>
                                                <option>Andhra Pradesh</option>
                                                <option> Assam</option>
												<option>Bihar</option>
                                                <option>Chhattisgarh</option>
                                                <option> Goa</option>
												<option>Gujarat</option>
                                                <option>Haryana</option>
                                                <option> Jammu & Kashmir</option>
												<option>Jharkhand</option>
                                                <option>Karnataka</option>
                                                <option> Kerala</option>
												<option>Madhya Pradesh</option>
                                                <option>Maharashtra</option>
                                                <option> Manipur</option>
												<option>Meghalaya</option>
                                                <option>Mizoram</option>
                                                <option> Nagaland</option>
												<option>Odisha</option>
                                                <option>Punjab</option>
                                                <option> Rajasthan</option>
												<option>Tamil Nadu</option>
                                                <option>Telangana</option>
                                                <option>Tripura</option>
												<option>Uttarakhand</option>
                                                <option>Uttar Pradesh</option>
                                                <option>West Bengal</option>
	</select>
</div>

<!-- Text input-->
<div class="form-group" style="margin-top:20px;">
  &nbsp  &nbsp  <label><b> Email-id</b></label>  &nbsp 
 &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp <input id="email" name="email" placeholder=" Email-id" class="form-control input-md" type="email">
    </div>


<!-- Text input-->
<div class="form-group" style="margin-top:20px;">
  &nbsp  &nbsp   <label><b>Mobile Number</b></label>  
 &nbsp &nbsp &nbsp &nbsp <input id="mob" name="mob" placeholder="Mobile number" class="form-control input-md" type="number">
 </div>


<!-- Text input-->
<div class="form-group mx-sm-3 mb-2" style="margin-top:20px;">
    &nbsp  &nbsp  <label><b>Password</b></label>  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input class="form-control" data-val="true" data-val-required="password is Required" id="password" name="password" placeholder="Password" type="password" value="">
</div>


<div class="form-group mx-sm-3 mb-2" style="margin-top:20px;">
    &nbsp  &nbsp  <label><b>Confirm Password</b></label>  &nbsp &nbsp  <input class="form-control" data-val="true" data-val-required="conform pasword is Required" id="cpassword" 
	name="cpassword" placeholder="Confirm Password" type="password" value="">
	</div>
   <body onload="disableSubmit()" >
 &nbsp  &nbsp &nbsp  &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp  &nbsp    <input type="checkbox"  name="terms" id="terms" style="margin-top:30px;" onchange="activateButton(this)">I Agree Terms & Coditions
</body>

	
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group" style="margin-top:20px;">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
   <input type="submit" class="sub" style="width:250%;" value="sign up">
  </div>
</div>
 </div>
</fieldset>
</form>
</div><!--col-md-6 end-->
</div></div>
</div><!--container end-->

<!--Footer start-->
<div class="row footer box1">
<div class="col-md-2 box">
<a href="http://www." target="_blank">About us</a>
</div>

<div class="col-md-2 box">
<a href="http://www." target="_blank">Contact Us</a>
</div>

<div class="col-md-2 box">
<a href="http://www." target="_blank">Terms&Conditions and privacy policy</a>
</div>


<div class="col-md-2 box">
<a href="#" data-toggle="modal" data-target="#login">Admin Log in</a>
</div>

<div class="col-md-2 box">
<a href="feedback.php" target="_blank">Feedback</a>
</div>
<section id="lab_social_icon_footer">
                <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
              <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
              <a href="https://youtube.com/+Bootsnipp-page"><i id="social-gp" class="fa fa-youtube-square fa-2x social"></i></a>
                  
</section>
</div>
<!-- Modal For Developers
<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>
	  
      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="image/CAM00121.jpg" width=100 height=100 alt="Sunny Prakash Tiwari" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://www.facebook.com/sunnygkp10" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Sunny Prakash Tiwari</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+917785068889</h4>
		<h4 style="font-family:'typo' ">sunnygkp10@gmail.com</h4>
		<h4 style="font-family:'typo' ">Kamla Nehru Institute Of Technology ,Sultanpur</h4></div></div>
		</p>
      </div>
    
    </div></.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--Modal for admin login-->
	 <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:orange;font-family:'typo' ">LOG IN</span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->


</body>
</html>
