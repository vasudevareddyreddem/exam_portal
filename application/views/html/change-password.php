	<div class="container content-start">
		<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="<?php echo base_url('profile'); ?>" class="list-group-item list-group-item-action active">Profile</a>
              <a href="<?php echo base_url('exam/completed_list'); ?>" class="list-group-item list-group-item-action ">Exams</a>
              <a href="<?php echo base_url('exam/rank'); ?>" class="list-group-item list-group-item-action ">Rankings</a>
              <a href="<?php echo base_url('profile/changepassword'); ?>" class="list-group-item list-group-item-action">Change Password</a>
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card" style="padding:20px;">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Change Password</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12" >
		                    <form id="changepassword" name="changepassword" method="post" action="<?php echo base_url('profile/changepasswordpost'); ?>">
                              <div class="form-group ">
                                <label for="username" class="col-4 col-form-label">Old Password</label> 
                                <div class="col-8">
                                  <input id="oldpassword" name="oldpassword" placeholder="Enter old Password" class="form-control here"  type="Password">
                                </div>
                              </div>
                                <div class="form-group ">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input id="password" name="password" placeholder="New Password" class="form-control here" type="password">
                                </div>
                              </div>  
							  <div class="form-group ">
                                <label for="newpass" class="col-4 col-form-label">Confirm Password</label> 
                                <div class="col-8">
                                  <input id="confirmpassword" name="confirmpassword" placeholder="New Password" class="form-control here" type="password">
                                </div>
                              </div> 
                              <div class="form-group ">
                                <div class="offset-4 col-8">
                                  <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div>
	</div>
		
	</div>
	<script type="text/javascript">
$(document).ready(function() {
    $('#changepassword').bootstrapValidator({
        
        fields: {
            oldpassword: {
                validators: {
					notEmpty: {
						message: 'Old Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Old Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Old Password wont allow <>[]'
					}
				}
            }, password: {
                validators: {
					notEmpty: {
						message: 'Password is required'
					},
					stringLength: {
                        min: 6,
                        message: 'Password  must be at least 6 characters'
                    },
					regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~'"\\|=^?$%*)(_+-]*$/,
					message: 'Password wont allow <>[]'
					}
				}
            },
           
            confirmpassword: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'password',
						message: 'password and confirm Password do not match'
					}
					}
				}
            }
        })
     
});

</script>


   