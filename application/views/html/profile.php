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
		                    <h4><?php echo isset($details['name'])?$details['name']:''; ?> Profile</h4>
		                    <hr>
		                </div>
		            </div>
		             <div class="row ">
								<div class="col-md-2 col-lg-2 " align="center">
								<?php if(isset($details['profile_pic']) && $details['profile_pic']!=''){ ?>
								<img class="img-responsive thumbnail" src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>">
								<?php }else{  ?>
								<img class="img-responsive thumbnail" src="<?php echo base_url('assets/vendor/image/user1.jpg'); ?>">
								<?php } ?>
								 </div>
							  
								<div class=" col-md-9 col-lg-9 "> 
								  <table class="table table-user-information">
									<tbody>
									  <tr>
										<td>Name:</td>
										<td><?php echo isset($details['name'])?$details['name']:''; ?></td>
									  </tr>
									  <tr>
										<td>Join Date & Time:</td>
										<td><?php echo isset($details['created_at'])?$details['created_at']:''; ?></td>
									  </tr>
									  <tr>
										<td>Date of Birth</td>
										<td><?php echo isset($details['dob'])?$details['dob']:''; ?></td>
									  </tr>
								   
										 <tr>
											 <tr>
										<td>Gender</td>
										<td><?php echo isset($details['gender'])?$details['gender']:''; ?></td>
									  </tr>
										<tr>
										<td>Address</td>
										<td>
										<?php echo isset($details['address'])?$details['address'].',':''; ?>
										<?php echo isset($details['country'])?$details['country'].',':''; ?>
										<?php echo isset($details['state'])?$details['state']:''; ?>
										</td>
									  </tr>
									  <tr>
										<td>Email</td>
										<td><a href="mailto:<?php echo isset($details['email_id'])?$details['email_id']:''; ?>"><?php echo isset($details['email_id'])?$details['email_id']:''; ?></a></td>
									  </tr>
										<td>Phone Number</td>
										<td><?php echo isset($details['mobile'])?$details['mobile']:''; ?>
										</td>
										   
									  </tr>
									 
									</tbody>
								  </table>
								  <div class="pull-right">
								  <a href="<?php echo base_url('profile/edit'); ?>" class="btn btn-warning">Edit</a>
								  </div>
								
								</div>
							  </div>
		            
		        </div>
		    </div>
		</div>
	</div>
		
	</div>
	
   