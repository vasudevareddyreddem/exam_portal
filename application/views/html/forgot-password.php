     
	   
<div class="container-fluid content-start">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			 <div class=" title1 bg-white">
                        <div class="modal-header  ">
                   
                           <h3 class="modal-title ">Forgot Password</h3>
                        </div>
                        <div class="modal-body">
                        
                        <div class="col-md-12" >
                           <form id="defaultForm" name="defaultForm" class="form-horizontal" action="<?php echo base_url('user/forgotpost'); ?>" method="POST">
                          
                                 <!-- Text input-->
                                 <div class="form-group">
                                    <label class=" control-label" for="email">Email Id</label>  
                                    <div style="margin-top:5px;">
                                       <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="text">
                                    </div>
                                 </div>
								 <div class="modal-footer">
                    
								<button type="submit" class="btn btn-primary">Reset Password</button>
							  
							   
								</div>
						 </form>
                                 <!-- Password input-->
                                 
                        </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        
                        </div>
		</div>
	</div>
</div>
  <script type="text/javascript">
$(document).ready(function() {
   
    $('#defaultForm').bootstrapValidator({
//       
        fields: {
            
             email: {
                validators: {
					notEmpty: {
						message: 'Email is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
					message: 'Please enter a valid email address. For example johndoe@domain.com.'
					}
				}
            }
        }
    });

});

</script>
   
   