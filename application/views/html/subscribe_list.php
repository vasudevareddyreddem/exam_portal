	
	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Subscribe List</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
			<?php if(isset($subscribe_list) && count($subscribe_list)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				<th>Name</th>
				<th>Email</th>
				<th>Payment Id</th>
				<th>Amount</th>
				<th>Payment Mode</th>
				<th>Payment Date</th>
				<th>Status</th>
                
                </tr>
                </thead>
                <tbody>
				
				<?php foreach($subscribe_list as $li){?>
				  <tr>
					 <td><?php echo $li['u_name']; ?></td>
					 <td><?php echo $li['email']; ?></td>
					 <td><?php echo $li['payment_id']; ?></td>
					 <td><?php echo $li['amount']; ?></td>
					 <td><?php echo $li['payment_completed_type']; ?></td>
					 <td><?php echo $li['payment_completed_time']; ?></td>
					 <td><?php echo $li['status']; ?></td>
					 
					</tr>
	  
				<?php }?>
			
			<?php //echo '<pre>';print_r($ddd); ?>
   </tbody>
             
              </table>
			  <?php }else{ ?>
			  <div>No data Available</div>
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

$(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 5, "desc" ]]
    } );
} );

</script>

   