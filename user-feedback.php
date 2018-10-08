<?php include("admin-header.php"); ?>
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Subject</th>
                  <th>Email</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>By</th>
                  <th>Action</th>
                </tr>
                </thead>
               <tbody>
				 
				   <tr>
					  <td>1</td>
					  <td>Bayapu</td>
					  <td>nik1@gmail.com</td>
					  <td>23-06-2015</td>
					  <td>06:12:59pm</td>
					  <td>nik</td>
					  <td>
					  <a class="btn btn-primary btn-sm" data-toggle="modal"  href="#feedback-view"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></a> &nbsp;
					 <a class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
					  </td></a>
					  
				   </tr>
				</tbody>
             
              </table>
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
	<div class="modal fade" id="feedback-view">
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
                                       <p class="p-custom">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
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
<?php include("footer.php"); ?>
   