	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-xs-12">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Users List</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
			<?php if(isset($user_list) && count($user_list)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Date & Time</th>
                  
                  <th>Action</th>
                </tr>
                </thead>
               <tbody>
				 <?php $cnt=1;foreach($user_list as $list){ ?>
				   <tr>
					  <td><?php echo $cnt; ?></td>
					  <td><?php echo $list['name']; ?></td>
					  <td><?php echo $list['gender']; ?></td>
				
					  <td><?php echo $list['email_id']; ?></td>
					  <td><?php echo $list['mobile']; ?></td>
					  <td><?php echo $list['created_at']; ?></td>
					  <td><a title="Delete User" href="<?php echo base_url('user/delete/'.base64_encode($list['u_id'])); ?>"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
				   </tr>
				 <?php $cnt++;} ?>
				</tbody>
             
              </table>
			<?php }else{ ?>
			<div>No data available</div>
			<?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
   