	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        
		<div class="col-md-6 col-md-offset-3">
		<div class="box-data">
           
        
            <div class="box-body table-responsive">
			<?php if(isset($notification_list) && count($notification_list)>0){ ?>
			<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="h4">Notifications List</th>
   
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
			
			   <div class="notification-item">
						  <?php if($list['profile_pic']==''){ ?>
						   <img style="width:50px;height:50px;border-radius:50%;" src="<?php echo base_url(); ?>assets/vendor/image/logo.png">
							
						  <?php }else{ ?>
							<img style="width:50px;height:50px;border-radius:50%;" src="<?php echo base_url('assets/profile_pic/'.$list['profile_pic']); ?>">
						  <?php } ?>
							<h4 class="item-title"><?php echo $list['title']; ?>  <small> <?php echo round(abs($seconds_diff) / 60,2). " mins ago"; ?></small></h4>
							<p class="item-info"><?php echo $list['message']; ?> </p>
						  </div> 
		
		</td>
      </tr>  
	    
     <?php } ?>
   </tbody>
             
              </table>
			  
			<?php } ?>
			
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
   