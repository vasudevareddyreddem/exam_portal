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
		                    <h4>Edit <?php echo isset($details['name'])?$details['name']:''; ?> Profile</h4>
		                    <hr>
		                </div>
		            </div>
		            <div class="row">
		                <div class="col-md-12" >
		                    <form name="defaultForm" id="defaultForm" method="post" action="<?php echo base_url('user/editpost'); ?>" enctype="multipart/form-data">
                              <div class="form-group ">
                                <label for="username" class="col-4 col-form-label"> Name*</label> 
                                <div class="col-8">
                                  <input id="username" name="username" value="<?php echo isset($details['name'])?$details['name']:''; ?>" class="form-control here"  type="text">
                                </div>
                              </div>
							  <div class="form-group ">
                                <label for="username" class="col-4 col-form-label"> Gender*</label> 
                                <div class="col-8">
                                  <select class="form-control"  name="gender" id="gender" >
									<option value="">Select</option>
									<option value="Female" <?php if($details['gender']=='Female'){ echo "selected"; } ?>>Female</option>
									<option value="Male" <?php if($details['gender']=='Male'){ echo "selected"; } ?>>Male</option>
									</select>
                                </div>
                              </div>
                              
                              <div class="form-group ">
                                <label for="email" class="col-4 col-form-label">Date Of Birth*</label> 
                                <div class="col-8">
                                  <input id="date" name="date" value="<?php echo isset($details['dob'])?$details['dob']:''; ?>" placeholder="DOB" class="form-control here"  type="date">
                                </div>
                              </div>
							  <div class="form-group ">
                                <label for="username" class="col-4 col-form-label"> Country*</label> 
                                <div class="col-8">
                                  <select class="form-control"  name="country" id="country" >
									 <?php 
										$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor","England","Europe", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy","Libya", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "South Korea", "North Korea", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "USA", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
									  ?>
										<option value="">select</option>
										<?php foreach($countries as $list){ ?>
										<?php if($list==$details['country']){ ?>
										<option selected value="<?php echo $list; ?>"><?php echo $list; ?></option>
										<?php }else{ ?>
										<option value="<?php echo $list; ?>"><?php echo $list; ?></option>
										<?php } ?>
										<?php } ?>
										</select>
                                </div>
                              </div>
							  <div class="form-group ">
                                <label for="username" class="col-4 col-form-label"> State*</label> 
                                <div class="col-8">
                                  <select class="form-control"  name="state" id="state" >
									 <?php 
										$states  = array ( 'Andhra Pradesh' => 'Andhra Pradesh', 'Arunachal Pradesh' => 'Arunachal Pradesh', 'Assam' => 'Assam', 'Bihar' => 'Bihar', 'Chhattisgarh' => 'Chhattisgarh', 'Goa' => 'Goa', 'Gujarat' => 'Gujarat', 'Haryana' => 'Haryana', 'Himachal Pradesh' => 'Himachal Pradesh', 'Jammu & Kashmir' => 'Jammu & Kashmir', 'Jharkhand' => 'Jharkhand', 'Karnataka' => 'Karnataka', 'Kerala' => 'Kerala', 'Madhya Pradesh' => 'Madhya Pradesh', 'Maharashtra' => 'Maharashtra', 'Manipur' => 'Manipur', 'Meghalaya' => 'Meghalaya', 'Mizoram' => 'Mizoram', 'Nagaland' => 'Nagaland', 'Odisha' => 'Odisha', 'Punjab' => 'Punjab', 'Rajasthan' => 'Rajasthan', 'Sikkim' => 'Sikkim', 'Tamil Nadu' => 'Tamil Nadu', 'Tripura' => 'Tripura', 'Uttarakhand' => 'Uttarakhand', 'Uttar Pradesh' => 'Uttar Pradesh', 'West Bengal' => 'West Bengal', 'Andaman & Nicobar' => 'Andaman & Nicobar', 'Chandigarh' => 'Chandigarh', 'Dadra and Nagar Haveli' => 'Dadra and Nagar Haveli', 'Daman & Diu' => 'Daman & Diu', 'Delhi' => 'Delhi', 'Lakshadweep' => 'Lakshadweep', 'Puducherry' => 'Puducherry',)									  ?>
										<option value="">select</option>
										<?php foreach($states as $list){ ?>
										<?php if($list==$details['state']){ ?>
										<option selected value="<?php echo $list; ?>"><?php echo $list; ?></option>
										<?php }else{ ?>
										<option value="<?php echo $list; ?>"><?php echo $list; ?></option>
										<?php } ?>
										<?php } ?>
										</select>
                                </div>
                              </div>
							 
							  <div class="form-group ">
                                <label for="email" class="col-4 col-form-label">Email*</label> 
                                <div class="col-8">
                                  <input id="email" name="email" value="<?php echo isset($details['email_id'])?$details['email_id']:''; ?>" placeholder="Email" class="form-control here"  type="text">
                                </div>
                              </div>
							   <div class="form-group ">
                                <label for="email" class="col-4 col-form-label">Mobile Number*</label> 
                                <div class="col-8">
                                  <input id="mobile" name="mobile" value="<?php echo isset($details['mobile'])?$details['mobile']:''; ?>" placeholder="mobile" class="form-control here"  type="text">
                                </div>
                              </div>
                             
                              <div class="form-group ">
                                <label for="newpass" class="col-4 col-form-label">Address</label> 
                                <div class="col-8">
                                  <input id="address" name="address" placeholder="Address"  value="<?php echo isset($details['address'])?$details['address']:''; ?>"  class="form-control here" type="text">
                                </div>
                              </div> 
							  <div class="form-group ">
                                <label for="newpass" class="col-4 col-form-label">Profile Pic</label> 
                                <div class="col-8">
                                  <input id="image" name="image" class="form-control here" type="file">
                                </div>
                              </div> 
                              <div class="form-group ">
                                <div class="offset-4 col-8">
                                  <button  type="submit" class="btn btn-primary">Update My Profile</button>
                                </div>
                              </div>
                            </form>
		                </div>
		            </div>
		            
		        </div>
		    </div>
		</div><script type="text/javascript">
$(document).ready(function() {
   
    $('#defaultForm').bootstrapValidator({
//       
        fields: {
            username: {
                 validators: {
					notEmpty: {
						message: 'Name is required'
					},
					regexp: {
					regexp: /^[a-zA-Z0-9. ]+$/,
					message: 'Name can only consist of alphanumeric, space and dot'
					}
				}
            },
			gender: {
                validators: {
                    notEmpty: {
                        message: 'Gender is required'
                    }
                }
            },
			date: {
                validators: {
                    notEmpty: {
                        message: 'DOB is required'
                    }
                }
            },
			country: {
                validators: {
                    notEmpty: {
                        message: 'Country is required'
                    }
                }
            },
			state: {
                validators: {
                    notEmpty: {
                        message: 'State is required'
                    }
                }
            },
			 mobile: {
              validators: {
					 notEmpty: {
						message: 'Mobile Number is required'
					},
                    regexp: {
					regexp:  /^[0-9]{10,14}$/,
					message:'Mobile Number must be 10 to 14 digits'
					}
                }
            },
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
            },address: {
                validators: {
					notEmpty: {
						message: 'Address is required'
					},
                    regexp: {
					regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
					message:'Address wont allow <> [] = % '
					}
                }
            },image: {
                validators: {
					regexp: {
					regexp: "(.*?)\.(png|jpg|jpeg|gif)$",
					message: 'Uploaded file is not a valid. Only png,jpg,jpeg,gif files are allowed'
					}
				}
            }
        }
    });

});

</script>
	</div>
		
	</div>
	
   