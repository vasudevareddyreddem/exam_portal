<!DOCTYPE HTML>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Be a Millionaire </title>
	  	<link rel="icon" href="image/fav.png" >
      <link  rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/bootstrap.min.css"/>
     
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/main.css">
      <link  rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/font.css">
	  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/dataTables.bootstrap.css">
	   <link  rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/css/bootstrapValidator.min.css"/>
      <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.js" type="text/javascript"></script>
      <script src="<?php echo base_url(); ?>assets/vendor/js/bootstrap.min.js"  type="text/javascript"></script>
	    <script src="<?php echo base_url(); ?>assets/vendor/js/bootstrapValidator.min.js"  type="text/javascript"></script>
		 <script src="<?php echo base_url(); ?>assets/vendor/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/js/dataTables.bootstrap.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
     
   </head>
   <body>
   <header>
   <div class="bg-site" style="width:100%;border-radius:0px;">
	   <div class="container">
		   <div class="col-md-6">
					 <a class="" href="<?php echo base_url(); ?>">
				<img style="width:80px;height:auto;padding:5px;" src="<?php echo base_url(); ?>assets/vendor/image/logo.png" alt="logo" >
			  </a> <span style="font-size:25px;margin-left:15px;font-weight:600">Be a Millionaire</span>
		   </div>
		   <div class="col-md-6">
				
				 <ul class="main-head-li" style="margin-top:10px;">
					<?php if($this->session->userdata('student_details')){ ?>
						<li>
						<a href="<?php echo base_url('profile'); ?>" >
						<?php if(isset($details['profile_pic']) && $details['profile_pic']!=''){ ?>
						<img style="width:30px;height:30px;border-radius:50%;border:2px solid #ddd;margin-top:-10px;" src="<?php echo base_url('assets/profile_pic/'.$details['profile_pic']); ?>"> <?php echo isset($details['name'])?$details['name']:''; ?>	</a>
						<?php }else{  ?>
							<img style="width:30px;height:30px;border-radius:50%;border:2px solid #ddd;margin-top:-10px;" src="<?php echo base_url('assets/vendor/image/user1.jpg'); ?>"> <?php echo isset($details['name'])?$details['name']:''; ?>	</a>
						<?php } ?>
						</li>
						<li><a href="<?php echo base_url('dashboard/logout'); ?>" ><span class="glyphicon glyphicon-log-in"></span> &nbsp; Logout</a></li>
					<?php }else{ ?>
				 		<li><a href="<?php echo base_url('user/login'); ?>" ><span class="glyphicon glyphicon-log-in"></span> &nbsp; Login</a></li>
					<?php } ?>
				  </ul>
		   </div>
	   </div>
	   </div>
   <div>
  
</div>

</header>
<?php if($this->session->userdata('student_details')){ ?>
<nav class="navbar navbar-inverse" >
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
  
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right" >
	  <?php if(isset($details['role']) && $details['role']==2){ 
	  
	  ?>
	  <li><a href="<?php echo base_url('dashboard'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp; Home<span class="sr-only">(current)</span></a></li>
		<li><a href="<?php echo base_url('exam/completed_list'); ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp; Exam Name</a></li>
		<li><a href="<?php echo base_url('exam/rank'); ?>"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp; Ranking</a></li> 
		
		<?php }else{ ?>
		<li class="active"><a href="<?php echo base_url('dashboard'); ?>">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url('dashboard/lists'); ?>">User</a></li>
		<li ><a href="<?php echo base_url('exam/score'); ?>">Score</a></li>
		<li ><a href="<?php echo base_url('exam/feedback'); ?>">Feedback</a></li>
        <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Online Exam<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('exam'); ?>">Add Exam</a></li>
            <li><a href="<?php echo base_url('exam/lists'); ?>">Exam List</a></li>
          </ul>
        </li>
		<?php } ?>
        
      </ul>
    </div>
  </div>
</nav>

<?php } ?>


                  <!-- /.modal-dialog -->
               </div>
			   
			   <?php if($this->session->flashdata('success')): ?>
        <div class="alert_msg1 animated slideInUp bg-succ">
            <?php echo $this->session->flashdata('success');?> &nbsp; <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i> </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('error')): ?>
        <div class="alert_msg1 animated slideInUp bg-warn">
            <?php echo $this->session->flashdata('error');?> &nbsp; <i class="fa fa-exclamation-triangle text-success ico_bac" aria-hidden="true"></i> </div>
        <?php endif; ?>
		<div class="modal fade" id="feedback">
                  <div class="modal-dialog">
                     <div class="modal-content title1">
                        <div class="modal-header bg-primary text-white">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h3 class="modal-title ">What New's</h3>
                        </div>
                        <div class="modal-body">
                      
                        <div class="col-md-12" >
                           <form class="form-horizontal" action="<?php echo base_url('exam/feedbackpost'); ?>" method="POST">
                          
                                 <!-- Text input-->
                                 <div class="form-group">
                                    <label class=" control-label" for="email">Feedback</label>  
                                    <div style="margin-top:5px;">
                                       <textarea name="feedback" id="feedback"  placeholder="Enter your feedback" class="form-control input-md" type="text" rows="5" required></textarea>
                                    </div>
                                 </div>
                                 <!-- Password input-->
                              
                        </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      
                        </form>
                        </div>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>