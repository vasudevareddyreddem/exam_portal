<?php include("header.php"); ?>
     
	   
      <div class="container-fluid content-start">
      <div class="row">
         <div class="col-md-8">
            <div id="demo" class="carousel slide"   data-ride="carousel">
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
     
         <div class="col-md-4">
         <div class="card bord-top5">
            <h3 style="text-align:center;background:#ddd;margin:0;padding:14px;">Be a Millionaire </h3>
            <!-- sign in form begins -->  
            <form class="form-horizontal"  name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
           
                  <!-- Text input-->
                  <div style="padding:12px;" >
                  <div class="form-group "  >
                  <label class="col-md-4" for="name"><b> Name</b></label>
					<div class="col-md-8">				  
                     <input class="form-control " data-val="true" data-val-required="Full name is Required " id="name" name="name" placeholder="Enter your name" type="text" value="">
					 </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group" style="margin-top:20px;" >
                      <label class=" col-md-4"><b>Gender</b></label>  
					  <div class="col-md-8">	
						  <div class="form-check col-md-6">
								<label>
									<input type="radio" name="radio" checked> <span class="label-text">Female</span>
								</label>
							</div>
								<div class="form-check col-md-6">
								<label>
									<input type="radio" name="radio"> <span class="label-text">Male</span>
								</label>
							</div>
					 </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group md-12" style="margin-top:20px;">
                  <label class=" col-md-4"><b>Date Of Birth</b></label> 
				  <div class="col-md-8">	
				  <input class="form-control" data-val="true" data-val-required="Full name is Required" id="date" 
                        name="date" type="date" value="">

                  </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group" style="margin-top:20px;">
                      <label class="col-md-4"><b> Country</b></label>  
					<div class="col-md-8">	
                     <select class="form-control" data-val="true" data-val-required="Country is Required"  name="country" id="country" placeholder="Country" type="text" value="">
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
                  </div>
                  <!-- Text input-->
                  <div class="form-group" style="margin-top:20px;">
                    <label class="col-md-4"><b> State</b></label>
					<div class="col-md-8">	
                     <select class="form-control" data-val="true" data-val-required="Country is Required" id="state" name="state" placeholder="State" type="text" value="">
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
                  </div>
                  <!-- Text input-->
                  <div class="form-group" style="margin-top:20px;">
                     <label class="col-md-4"><b> Email-id</b></label> 
					 <div class="col-md-8">	
					 <input id="email" name="email" placeholder=" Email-id" class="form-control input-md" type="email">
                  </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group" style="margin-top:20px;">
					<label class="col-md-4"><b>Mobile Number</b></label>  
					<div class="col-md-8">	
                    <input id="mob" name="mob" placeholder="Mobile number" class="form-control input-md" type="number">
                  </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group mx-sm-3 mb-2" style="margin-top:20px;">
                    <label class="col-md-4"><b>Password</b></label>
					<div class="col-md-8">						
					<input class="form-control" data-val="true" data-val-required="password is Required" id="password" name="password" placeholder="Password" type="password" value="">
                  </div>
                  </div>
                  <div class="form-group mx-sm-3 " style="margin-top:20px;">
                     <label class="col-md-4"><b>Confirm Password</b></label> 
					 <div class="col-md-8">	
					 <input class="form-control" data-val="true" data-val-required="conform pasword is Required" id="cpassword" 
                        name="cpassword" placeholder="Confirm Password" type="password" value="">
                  </div>
                  </div>
                  <body onload="disableSubmit()" >
                      <input type="checkbox"  name="terms" id="terms" style="margin-top:10px;" onchange="activateButton(this)">I Agree Terms & Coditions
				</body>
   <?php if(@$_GET['q7'])
      { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
   <!-- Button -->
   <div class="form-group" style="margin-top:10px;">
   
   <div class="col-md-12"> 
   <input type="submit" class="btn btn-block btn-primary" value="sign up">
   </div>
   </div>
   </div>
   </div>
 
   </form>
   </div>
   </div><!--col-md-6 end-->
   </div>
   </div>
   </div>
   <?php include("footer.php"); ?>
   