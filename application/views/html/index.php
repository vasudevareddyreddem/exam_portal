     
	   
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
                     <img src="<?php echo base_url(); ?>assets/vendor/image/1.jpg" alt="Los Angeles"  width="1000" height="400">
                  </div>
                  <div class="item">
                     <img src="<?php echo base_url(); ?>assets/vendor/image/2.jpg" alt="Chicago" width="1000" height="400">
                  </div>
                  <div class="item">
                     <img src="<?php echo base_url(); ?>assets/vendor/image/3.jpg" alt="New York"  width="1000" height="400">
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
            <form  name="defaultForm" id="defaultForm" class="form-horizontal"  name="defaultForm" action="<?php echo base_url('user/post'); ?>"  method="POST">
           
                  <!-- Text input-->
                  <div style="padding:12px;" >
                  <div class="form-group "  >
                  <label class="col-md-4" for="name"><b> Name</b></label>
					<div class="col-md-8">				  
                     <input class="form-control" id="username" name="username" placeholder="Enter your name" type="text" value="">
					 </div>
                  </div>
                  <!-- Text input-->
				  <div class="form-group" style="margin-top:20px;">
                      <label class="col-md-4"><b> Gender</b></label>  
						<div class="col-md-8">	
						 <select class="form-control"  name="gender" id="gender" >
							<option value="">Select</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
						  </select>
					   </div>
                  </div>
                  
                  <!-- Text input-->
                  <div class="form-group md-12" style="margin-top:20px;">
                  <label class=" col-md-4"><b>Date Of Birth</b></label> 
				  <div class="col-md-8">	
				  <input class="form-control"   id="date" 
                        name="date" type="date" value="">

                  </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group" style="margin-top:20px;">
                      <label class="col-md-4"><b> Country</b></label>  
					<div class="col-md-8">	
                     <select class="form-control"  name="country" id="country" >
                        <option value="">Select country</option>
						<?php 
						$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor","England","Europe", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy","Libya", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "South Korea", "North Korea", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "USA", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
						?>
						<?php foreach($countries as $list){ ?>
						<option value="<?php echo $list; ?>"><?php echo $list; ?></option>
						
						<?php } ?>
                     </select>
                  </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group" style="margin-top:20px;">
                    <label class="col-md-4"><b> State</b></label>
					<div class="col-md-8">	
                     <select class="form-control" id="state" name="state">
                        <?php 
										$states  = array ( 'Andhra Pradesh' => 'Andhra Pradesh', 'Arunachal Pradesh' => 'Arunachal Pradesh', 'Assam' => 'Assam', 'Bihar' => 'Bihar', 'Chhattisgarh' => 'Chhattisgarh', 'Goa' => 'Goa', 'Gujarat' => 'Gujarat', 'Haryana' => 'Haryana', 'Himachal Pradesh' => 'Himachal Pradesh', 'Jammu & Kashmir' => 'Jammu & Kashmir', 'Jharkhand' => 'Jharkhand', 'Karnataka' => 'Karnataka', 'Kerala' => 'Kerala', 'Madhya Pradesh' => 'Madhya Pradesh', 'Maharashtra' => 'Maharashtra', 'Manipur' => 'Manipur', 'Meghalaya' => 'Meghalaya', 'Mizoram' => 'Mizoram', 'Nagaland' => 'Nagaland', 'Odisha' => 'Odisha', 'Punjab' => 'Punjab', 'Rajasthan' => 'Rajasthan', 'Sikkim' => 'Sikkim', 'Tamil Nadu' => 'Tamil Nadu', 'Tripura' => 'Tripura', 'Uttarakhand' => 'Uttarakhand', 'Uttar Pradesh' => 'Uttar Pradesh', 'West Bengal' => 'West Bengal', 'Andaman & Nicobar' => 'Andaman & Nicobar', 'Chandigarh' => 'Chandigarh', 'Dadra and Nagar Haveli' => 'Dadra and Nagar Haveli', 'Daman & Diu' => 'Daman & Diu', 'Delhi' => 'Delhi', 'Lakshadweep' => 'Lakshadweep', 'Puducherry' => 'Puducherry',)									  ?>
										<option value="">select</option>
										<?php foreach($states as $list){ ?>
										
										<option value="<?php echo $list; ?>"><?php echo $list; ?></option>
										
										<?php } ?>
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
                    <input id="mobile" name="mobile" placeholder="Mobile number" class="form-control input-md" type="text">
                  </div>
                  </div>
                  <!-- Text input-->
                  <div class="form-group mx-sm-3 mb-2" style="margin-top:20px;">
                    <label class="col-md-4"><b>Password</b></label>
					<div class="col-md-8">						
					<input class="form-control" id="password" name="password" placeholder="Password" type="password" value="">
                  </div>
                  </div>
                  <div class="form-group mx-sm-3 " style="margin-top:20px;">
                     <label class="col-md-4"><b>Confirm Password</b></label> 
					 <div class="col-md-8">	
					 <input class="form-control"  id="confirmpassword" 
                        name="confirmpassword" placeholder="Confirm Password" type="password" value="">
                  </div>
                  </div>
                  <body onload="disableSubmit()" >
                      <input type="checkbox"  name="terms" id="terms" style="margin-top:10px;" >I Agree Terms & Coditions
				</body>

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
   <script type="text/javascript">
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
            },
			confirmpassword: {
					 validators: {
						 notEmpty: {
						message: 'Confirm Password is required'
					},
					identical: {
						field: 'password',
						message: 'Password and Confirm Password do not match'
					}
					}
				}
        }
    });

});

</script>