<?php include("admin-header.php"); ?>
	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-md-9">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Start Exam</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rank</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Score</th>
                
                </tr>
                </thead>
                <tbody>
    
      <tr>
         <td>1</td>
         <td>name 1</td>
         <td>Male</td>
         <td>3</td>
      
      </tr>
     
   </tbody>
             
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       <div class="col-md-3">
		   <div class="box-data">
				<div class="text-center ">
					<a href="#" class="btn btn-primary" >Number of days</a>
				</div>
				<div class="text-center mar-t35">
					<a href="#" class="btn btn-primary" >Today Score</a>
				</div>
				<div class="text-center mar-t35">
					<a href="#" class="btn btn-primary" >Total Score</a>
				</div>
				<div class="text-center mar-t35">
					<a href="#" class="btn btn-primary" >Daily Quest</a>
				</div>
				<div class="text-center mar-t35">
					<a href="#" class="btn btn-primary" >What New's</a>
				</div>	
				<div class="text-center mar-t35">
					<a href="#" class="btn btn-primary" >Subscribe</a>
				</div>
		  </div>
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
<?php include("footer.php"); ?>
   