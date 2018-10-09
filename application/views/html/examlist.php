	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-xs-12">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Exam List</h3>
            </div>
			<hr>
            <!-- /.box-header -->
			<?php //echo '<pre>';print_r($exam_list);exit; ?>
            <div class="box-body table-responsive">
			<?php if(isset($exam_list) && count($exam_list)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Title</th>
                  <th>Total question</th>
                  <th>Marks</th>
                  <th>Time limit</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
				<?php $cnt=1;foreach($exam_list as $list){ ?>
    
					  <tr>
						 <td><?php echo $list['title']; ?></td>
						 <td><?php echo $list['total_questions']; ?></td>
						 <td><?php echo $list['total_questions']; ?></td>
						 <td><?php echo $list['time_limit']; ?></td>
						 <td><?php if($list['status']==1){ echo "Active"; }else{ echo "Deactive";} ?></td>
						 <td>
						 <a href="<?php echo base_url('exam/status/'.base64_encode($list['e_id']).'/'.base64_encode($list['status'])); ?>" class="btn-sm btn btn-success " style="margin:0px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;<span class="title1">
						 <?php if($list['status']==0){ echo "Active"; }else{ echo "Deactive";} ?></span></a>
						 <a href="<?php echo base_url('exam/edit/'.base64_encode($list['e_id'])); ?>" class="btn-sm btn btn-primary " style="margin:0px;"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>&nbsp;<span class="title1">
						 Edit</span></a>
						 <a href="<?php echo base_url('exam/delete/'.base64_encode($list['e_id'])); ?>" class="btn-sm btn btn-danger " style="margin:0px;"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1">
						 Delete</b></span></a>
						 </td>
					  </tr>
	  
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
   