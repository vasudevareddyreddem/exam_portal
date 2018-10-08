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
         <td><b>
		 <a href="choose-option.php" class="pull-right btn btn-success" ><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a>
		 </b></td>
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
					<a href="#" class="btn btn-primary"  data-toggle="collapse" data-target="#demo" >Daily Quest</a>
					<div id="demo" class="collapse">
					<div class="clearfix">&nbsp;</div>
   <div class="btn-group">
    
        <a class="btn btn-default btn-sm" target="_blank"
                title="On Facebook" href="#"><i class="fa fa-facebook fa-lg fb"></i></a>
        <a class="btn btn-default btn-sm" target="_blank" title="On Twitter" href="#"><i
            class="fa fa-twitter fa-lg tw"></i></a>
			<a class="btn btn-default btn-sm" target="_blank"
                title="On Google Plus" href="#"><i class="fa fa-google-plus fa-lg google"></i>
        </a>
		<a class="btn btn-default btn-sm" target="_blank" title="On LinkedIn" href="#"><i
            class="fa fa-youtube fa-lg linkin"></i></a>
    </div>
  </div>
				</div>
				<div class="text-center mar-t35">
					<a class="btn btn-primary" data-toggle="modal"  href="#feedback">What New's</a>
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
	<div class="modal fade" id="feedback">
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
                                    <label class=" control-label" for="email">Feedback</label>  
                                    <div style="margin-top:5px;">
                                       <textarea   placeholder="Enter your feedback" class="form-control input-md" type="text" rows="5"></textarea>
                                    </div>
                                 </div>
                                 <!-- Password input-->
                              
                        </div>
                        </div>
						<div class="clearfix">&nbsp;</div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      
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
   