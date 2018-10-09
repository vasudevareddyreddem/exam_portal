     
	   
<div class="container-fluid content-start">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			 <div class=" title1 bg-white">
                        <div class="modal-header  ">
                   
                           <h3 class="modal-title ">Log In</h3>
                        </div>
                        <div class="modal-body">
                        <div class="col-md-5" >
							<img class="img-responsive thumbanil"  src="<?php echo base_url(); ?>assets/vendor/image/login-image.png" alt="login">
                        </div>
                        <div class="col-md-7" >
                           <form name="defaultForm" id="defaultForm" class="form-horizontal" action="<?php echo base_url('user/loginpost'); ?>" method="POST">
                          
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
                                       <div class="navbar-brand form-lbl pull-left"><a href="<?php echo base_url(''); ?>">Sign Up</a>
									   </div>
									   <div class="navbar-brand form-lbl pull-right"><a href="<?php echo base_url('user/forgotpassword'); ?>">Forgot Password?</a>
									   </div>
                                    </div>
                                 </div>
								 <div class="modal-footer">
									<button type="submit" class="btn btn-primary">Log in</button>
								</div>
						 </form>
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
            },
			password: {
                validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters. '
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
            }
        }
    });

});

</script>
   