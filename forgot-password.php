<?php include("header.php"); ?>
     
	   
<div class="container-fluid content-start">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			 <div class=" title1 bg-white">
                        <div class="modal-header  ">
                   
                           <h3 class="modal-title ">Forgot Password</h3>
                        </div>
                        <div class="modal-body">
                        
                        <div class="col-md-12" >
                           <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                          
                                 <!-- Text input-->
                                 <div class="form-group">
                                    <label class=" control-label" for="email">Email Id</label>  
                                    <div style="margin-top:5px;">
                                       <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
                                    </div>
                                 </div>
                                 <!-- Password input-->
                                 
                        </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        <div class="modal-footer">
                    
                        <button type="submit" class="btn btn-primary">Reset Password</button>
                      
                        </form>
                        </div>
                        </div>
		</div>
	</div>
</div>
  
   <?php include("footer.php"); ?>
   