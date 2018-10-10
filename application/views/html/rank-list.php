	<?php 
			foreach($exam_list as $li){
					$grades[]=$li['score'];
					
				}
				?>
				<?php 
				$i=0;
				//$grades = array(92, 84, 84, 84, 83, 65, 41, 38, 38, 37);
				$grades = array_unique($grades);
				$occurrences = array_count_values($grades);
				foreach($grades as $grade) {
					
					$ranl_list[]=str_repeat($grade.'-'.($i+1).'<br>',$occurrences[$grade]);
					$i ++;
				}
				
				?>
	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-md-9">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title">Exam Ranks</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
			<?php if(isset($exam_list) && count($exam_list)>0){ ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				<th>Exam Title</th>
				<th>Name</th>
				<th>Rank</th>
                
                </tr>
                </thead>
                <tbody>
				
				<?php foreach($exam_list as $li){?>
				  <tr>
					 <td><?php echo $li['title']; ?></td>
					 <td><?php echo $li['name']; ?></td>
					 <td>
					 <?php foreach($ranl_list as $list){ 
								$result = substr($list,0,3);
								$tt=explode('-',$result);
								if($tt[0]==$li['score']){
									echo $tt[1];
							}
							}
						?>
					  </td>
					</tr>
	  
				<?php }?>
			
			<?php //echo '<pre>';print_r($ddd); ?>
   </tbody>
             
              </table>
			  <?php }else{ ?>
			  <div>No data Available</div>
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

$(document).ready(function() {
    $('#example1').DataTable( {
        "order": [[ 2, "asc" ]]
    } );
} );

</script>

   