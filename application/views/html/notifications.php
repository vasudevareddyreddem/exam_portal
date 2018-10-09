<?php include("admin-header.php"); ?>
	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-md-6">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Notifications</h3>
            </div>
			<hr>
        
            <div class="box-body table-responsive">
			<form>
              <div class="form-group">
				<label class=" control-label" for="email">Title</label>  
				<div style="margin-top:5px;">
				<input name="Title" placeholder="Enter title" class="form-control input-md" type="text">
				</div>
			 </div>
			 <div class="form-group">
				<label class=" control-label" for="email">Message</label>  
				<div style="margin-top:5px;">
				   <textarea   placeholder="Enter your message " class="form-control input-md" type="text" rows="5"></textarea>
				</div>
			 </div>
			 <button type="submit" class="btn btn-primary pull-right">Send</button>
			 </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
		<div class="col-md-6">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Notifications List</h3>
            </div>
			<hr>
        
            <div class="box-body table-responsive">
			<div class=""> 
     <a class="content" href="#"> 
       <div class="notification-item">
       <img style="width:50px;height:50px;border-radius:50%;" src="image/logo.png">
        <h4 class="item-title">Evaluation Deadline  <small> 1 day ago</small></h4>
        <p class="item-info">Mr hassan has followed you!</p>
      </div>  
    </a>  
	<a class="content" href="#"> 
       <div class="notification-item">
       <img style="width:50px;height:50px;border-radius:50%;" src="image/logo.png">
        <h4 class="item-title">Evaluation Deadline  <small> 1 day ago</small></h4>
        <p class="item-info">Mr hassan has followed you!</p>
      </div>  
    </a>     <a class="content" href="#"> 
       <div class="notification-item">
       <img style="width:50px;height:50px;border-radius:50%;" src="image/logo.png">
        <h4 class="item-title">Evaluation Deadline  <small> 1 day ago</small></h4>
        <p class="item-info">Mr hassan has followed you!</p>
      </div>  
    </a>  
	<a class="content" href="#"> 
       <div class="notification-item">
       <img style="width:50px;height:50px;border-radius:50%;" src="image/logo.png">
        <h4 class="item-title">Evaluation Deadline  <small> 1 day ago</small></h4>
        <p class="item-info">Mr hassan has followed you!</p>
      </div>  
    </a>

    
      

   </div> 
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
     
      </div>
      <!-- /.row -->
    </section>
		</div>
	</div>

<?php include("footer.php"); ?>
   