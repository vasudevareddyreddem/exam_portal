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
			<form name="defaultForm" id="defaultForm" method="post" action="<?php echo base_url('dashboard/addnotification'); ?>">
              <div class="form-group">
				<label class=" control-label" for="email">Title</label>  
				<div style="margin-top:5px;">
				<input name="title" id="title" placeholder="Enter title" class="form-control input-md" type="text">
				</div>
			 </div>
			 <div class="form-group">
				<label class=" control-label" for="email">Message</label>  
				<div style="margin-top:5px;">
				   <textarea name="message" id="message"   placeholder="Enter your message " class="form-control input-md" type="text" rows="5"></textarea>
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
           
        
            <div class="box-body table-responsive">
			<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="h4">Notifications List</th>
					 <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php foreach($notification_list as $list){
					$date1 = strtotime($list['created_at']);
					$date2 = strtotime(date('Y-m-d H:i:s'));
					$seconds_diff = $date2 - $date1;
					?>
    
				  <tr>
					 <td> 
						 <a class="content" href="#"> 
						   <div class="notification-item">
						  <?php if($list['profile_pic']==''){ ?>
						   <img style="width:50px;height:50px;border-radius:50%;" src="<?php echo base_url(); ?>assets/vendor/image/logo.png">
							
						  <?php }else{ ?>
							<img style="width:50px;height:50px;border-radius:50%;" src="<?php echo base_url('assets/profile_pic/'.$list['profile_pic']); ?>">
						  <?php } ?>
							<h4 class="item-title"><?php echo $list['title']; ?>  <small> <?php echo round(abs($seconds_diff) / 60,2). " mins ago"; ?></small></h4>
							<p class="item-info"><?php echo $list['message']; ?> </p>
						  </div>  
						</a> 
					</td><td>
					 <a href="<?php echo base_url('dashboard/notifications_delete/'.base64_encode($list['n_id'])); ?>">
                                                                    <i class="fa fa-trash-o"></i>Delete</a>
				 </td> </tr> 
				
				<?php } ?>
     
   </tbody>
             
              </table>
			
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
	  <script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
   <script type="text/javascript">
$(document).ready(function() {
  $('#defaultForm').bootstrapValidator({
      fields: {
            title: {
                  validators: {
					notEmpty: {
						message: 'Title is required'
					}
				}
            },
            message: {
                validators: {
					notEmpty: {
						message: 'Message is required'
					}
				
				}
            }
        }
    });

});
</script>

   