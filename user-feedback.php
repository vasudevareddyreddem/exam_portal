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
					  <a class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></a> &nbsp;
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
   