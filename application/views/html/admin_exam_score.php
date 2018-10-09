	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-md-12">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Exam Score</h3>
            </div>
			<!-- /.box-header -->
            <div class="box-body table-responsive">
			<?php if(isset($exam_list) && count($exam_list)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.N.</th>
                  <th>Quiz</th>
                  <th>Name</th>
                  <th>Question Solved</th>
                  <th>Right</th>
                  <th>Wrong</th>
                  <th>Score</th>
                </tr>
                </thead>
                <tbody>
				<?php $cnt=1;foreach($exam_list as $list){ ?>
    
					  <tr>
						 <td><?php echo $cnt; ?></td>
						 <td><?php echo $list['title']; ?></td>
						 <td><?php echo $list['name']; ?></td>
						 <td><?php echo $list['total']; ?></td>
						 <td><?php echo $list['right_count']; ?></td>
						 <td><?php echo $list['wrong_count']; ?></td>
						 <td><?php echo $list['score']; ?></td>
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
   