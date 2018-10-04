<?php include("admin-header.php"); ?>
	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-xs-12">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">User</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  
                  <th>Action</th>
                </tr>
                </thead>
               <tbody>
				 
				   <tr>
					  <td>1</td>
					  <td>Titlea</td>
					  <td>M</td>
				
					  <td>emails@mail.comas</td>
					  <td>1234567890</td>
					  <td><a title="Delete User" href="update.php?demail=emails@mail.comas"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>
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
   