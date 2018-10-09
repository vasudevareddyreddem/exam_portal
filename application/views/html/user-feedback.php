	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-xs-12">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Feedback</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
			<?php if(isset($feed_back_list) && count($feed_back_list)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Subject</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Date & Time</th>
                  <th>Action</th>
                </tr>
                </thead>
               <tbody>
				 <?php $cnt=1;foreach($feed_back_list as $list){ ?>
				   <tr>
					  <td><?php echo $cnt; ?></td>
					  <td><?php echo $list['message']; ?></td>
					  <td><?php echo $list['name']; ?></td>
					  <td><?php echo $list['email_id']; ?></td>
					  <td><?php echo $list['created_at']; ?></td>
					  <td>
					  <a class="btn btn-primary btn-sm" data-toggle="modal"  href="#feedback-view<?php echo $cnt; ?>"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></a> &nbsp;
					 <a href="<?php echo base_url('exam/delete_feedback/'.base64_encode($list['id'])); ?>" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
					  </td></a>
					  
				   </tr>
				   <div class="modal fade" id="feedback-view<?php echo $cnt; ?>">
                  <div class="modal-dialog">
                     <div class="modal-content title1">
                        <div class="modal-header bg-primary text-white">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                           <h3 class="modal-title ">What New's</h3>
                        </div>
                        <div class="modal-body">
                      
                        <div class="col-md-12" >
                           <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                          
                                 <!-- Text input-->
                                 <div class="form-group">
                                    <div class="h3"><b>Feedback</b></div>  
                                    <div style="margin-top:5px;">
                                       <p class="p-custom"><?php echo $list['message']; ?>.</p>
                                    </div>
                                 </div>
                                 <!-- Password input-->
                              
                        </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      
                      
                        </form>
                        </div>
                        </div>
                     </div>
                     <!-- /.modal-content -->
                  </div>
				 <?php $cnt++;} ?>
				</tbody>
             
              </table>
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
   