	
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
			<?php  if(isset($exam_list) && count($exam_list)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                   <th>Title</th>
                  <th>Time limit</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php $cnt=1;foreach($exam_list as $list){ ?>
				  <tr>
						 <td><?php echo $list['title']; ?></td>
						 <td><?php echo $list['time_limit']; ?></td>
					 <td><b>
					 
					 
					 <?php if (in_array($list['e_id'],$exam_ids_list))
						{ ?>
							<a href="<?php echo base_url('exam/choose_question/'.base64_encode($list['e_id']).'/'.'restart'); ?>" class="pull-right btn btn-warning" ><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>ReStart</b></span></a>
						<?php }else{ ?>
							<a href="<?php echo base_url('exam/choose_question/'.base64_encode($list['e_id'])); ?>" class="pull-right btn btn-success" ><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a>
						<?php  } ?>
	  
					 
					 </b></td>
				  </tr>
				  
				<?php $cnt++;}?>
     
			</tbody>
             
              </table>
			<?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
       <div class="col-md-3">
		   <div class="box-data">
				<div class="text-center ">
					<a href="#" class="btn btn-primary" >Number of days</a>
					<p><?php  echo isset($total_days)?$total_days:''; ?></p>
				</div>
				<div class="text-center mar-t35">
					<a href="#" class="btn btn-primary" >Today Score</a>
					<p><?php  echo isset($today_score['COUNT'])?$today_score['COUNT']:''; ?></p>
				</div>
				<div class="text-center mar-t35">
					<a href="#" class="btn btn-primary" >Total Score</a>
					<p><?php  echo isset($total_score['COUNT'])?$total_score['COUNT']:''; ?></p>
				</div>
				<div class="text-center mar-t35">
					<a href="#" class="btn btn-primary"  data-toggle="collapse" data-target="#demo" >Daily Quest</a>
					<div id="demo" class="collapse">
					<div class="clearfix">&nbsp;</div>
					   <div class="btn-group">
						
							<a class="btn btn-default btn-sm" target="_blank"
									title="On Facebook" href="https://m.facebook.com/I-am-millionaire-1411854982277901/"><i class="fa fa-facebook fa-lg fb"></i></a>
							<a class="btn btn-default btn-sm" target="_blank" title="On Twitter" href="https://twitter.com/iammillionaire7?s=08"><i
								class="fa fa-twitter fa-lg tw"></i></a>
								<a class="btn btn-default btn-sm" target="_blank"
									title="On Google Plus" href="https://www.youtube.com/"><i class="fa fa-youtube"></i>
							</a>
						
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
   