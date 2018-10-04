<?php include("admin-header.php"); ?>
	<div class="container content-start">
		<div class="row">
		<div class="col-md-3 ">
		     <div class="list-group ">
              <a href="#" class="list-group-item list-group-item-action active">Profile</a>
              <a href="exam-list.php" class="list-group-item list-group-item-action ">Exams</a>
              <a href="rank-list.php" class="list-group-item list-group-item-action ">Rankings</a>
              <a href="change-password.php" class="list-group-item list-group-item-action">Change Password</a>
            </div> 
		</div>
		<div class="col-md-9">
		    <div class="card" style="padding:20px;">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12">
		                    <h4>Edit Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12" >
		                    <form>
                              <div class="form-group ">
                                <label for="username" class="col-4 col-form-label"> Name*</label> 
                                <div class="col-8">
                                  <input id="username" name="username" value="Dummy User" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              
                              <div class="form-group ">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" placeholder="Email" class="form-control here" required="required" type="text">
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="website" class="col-4 col-form-label">Website</label> 
                                <div class="col-8">
                                  <input id="website" name="website" placeholder="website" class="form-control here" type="text">
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="publicinfo" class="col-4 col-form-label">Public Info</label> 
                                <div class="col-8">
                                  <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                </div>
                              </div>
                              <div class="form-group ">
                                <label for="newpass" class="col-4 col-form-label">New Password</label> 
                                <div class="col-8">
                                  <input id="newpass" name="newpass" placeholder="New Password" class="form-control here" type="text">
                                </div>
                              </div> 
                              <div class="form-group ">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
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
	
<?php include("footer.php"); ?>
   