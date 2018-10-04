<?php include("header.php"); ?>
     
	   
<div class="container-fluid content-start">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			 <div class=" title1 bg-white">
                        <div class="modal-header  ">
                   
                           <h3 class="modal-title ">Log In</h3>
                        </div>
                        <div class="modal-body">
                        <div class="col-md-5" >
							<img class="img-responsive thumbanil"  src="image/login-image.png" alt="login">
                        </div>
                        <div class="col-md-7" >
                           <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                          
                                 <!-- Text input-->
                                 <div class="form-group">
                                    <label class=" control-label" for="email">Email Id</label>  
                                    <div style="margin-top:5px;">
                                       <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
                                    </div>
                                 </div>
                                 <!-- Password input-->
                                 <div class="form-group">
                                    <label class=" control-label" for="password">Password</label>
                                    <div style="margin-top:5px;">
                                       <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
                                       <div class="navbar-brand form-lbl pull-left"><a href="/Login/forgot-password">Sign Up</a>
									   </div>
									   <div class="navbar-brand form-lbl pull-right"><a href="forgot-password.php">Forgot Password?</a>
									   </div>
                                    </div>
                                 </div>
                        </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        <div class="modal-footer">
                    
                        <a href="admin-dashboard.php"type="submit" class="btn btn-primary">Log in</a>
                      
                        </form>
                        </div>
                        </div>
		</div>
	</div>
</div>
  
   <?php include("footer.php"); ?>
   