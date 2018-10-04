<?php include("admin-header.php"); ?>
	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-xs-12">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Remove Exam</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Topic</th>
                  <th>Total question</th>
                  <th>Marks</th>
                  <th>Time limit</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
    
      <tr>
         <td>1</td>
         <td>Title</td>
         <td>3</td>
         <td>3</td>
         <td>3&nbsp;min</td>
         <td><b><a href="#" class="pull-right btn btn-danger " style="margin:0px;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Delete</b></span></a></b></td>
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
   