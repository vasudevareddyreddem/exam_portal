<!DOCTYPE HTML>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Be a Millionaire </title>
	  	<link rel="icon" href="image/fav.png" >
      <link  rel="stylesheet" href="css/bootstrap.min.css"/>
      <link  rel="stylesheet" href="css/bootstrapValidator.min.css"/>
       <link rel="stylesheet" href="css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="css/select2.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link  rel="stylesheet" href="css/font.css">
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js"  type="text/javascript"></script>
      <script src="js/bootstrapValidator.min.js"  type="text/javascript"></script>
	  <script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/select2.full.min.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
     
   </head>
   <body>
   <header>
   <div class="bg-site" style="width:100%;border-radius:0px;">
	   <div class="container">
		   <div class="col-md-6">
					 <a class="" href="#">
				<img style="width:80px;height:auto;padding:5px;" src="image/logo.png" alt="logo" >
			  </a> <span style="font-size:25px;margin-left:15px;font-weight:600">Be a Millionaire</span>
		   </div>
		   <div class="col-md-6">
				
				 <ul class="main-head-li" style="margin-top:10px;">
					 
					<li><a href="login-user.php" ><span class="glyphicon glyphicon-log-in"></span> &nbsp; Login</a></li>
					<li><a href="profile.php" ><img style="width:30px;height:30px;border-radius:50%;border:2px solid #ddd;margin-top:-10px;" src="image/user1.jpg"> Bayapureddy	</a></li>
				  </ul>
		   </div>
	   </div>
	   </div>
   <div>
  
</div>

</header>
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
	  <li><a href="start-exam.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp; Home<span class="sr-only">(current)</span></a></li>
<li><a href="exam-list.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp; Exam Name</a></li>
<li><a href="rank-list.php"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp; Ranking</a></li> 
       <li class="active"><a href="admin-dashboard.php">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="admin-user.php">User</a></li>
		<li ><a href="user-score.php">Score</a></li>
		<li ><a href="user-feedback.php">Feedback</a></li>
        <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Online Exam<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="add-exam.php">Add Exam</a></li>
            <li><a href="remove-exam.php">Remove Exam</a></li>
          </ul>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="modal fade" id="myModal">
                  <div class="modal-dialog">
                     <div class="modal-content title1">
                        <div class="modal-header bg-primary text-white">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
									   <div class="navbar-brand form-lbl pull-right"><a href="/Login/forgot-password">Forgot Password?</a>
									   </div>
                                    </div>
                                 </div>
                        </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Log in</button>
                      
                        </form>
                        </div>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
               </div>