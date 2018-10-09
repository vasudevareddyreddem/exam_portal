	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-md-9">
		<div class="box-data">
            <div class="box-header">
              <h3 class="box-title pull-left">Start Exam</h3>
			    <h3 class="btn btn-warning btn-lg pull-right" id=""><div id="demo"><?php echo isset($timer_details['start_time'])?$timer_details['start_time']:''; ?></div></h3>
            </div>
			<div class="clearfix">&nbsp;</div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive "  style="padding:20px;">
		<form id="exam_start" name="exam_start" method="post" action="<?php echo base_url('exam/question_submit'); ?>">
					<h4> <strong>Question  <?php echo isset($question_details['question_id'])?$question_details['question_id']:''; ?> :</strong> <?php echo isset($question_details['question'])?$question_details['question']:''; ?></h4> 
				<input type="hidden" id="exam_id" name="exam_id" value="<?php echo isset($question_details['examm_id'])?$question_details['examm_id']:''; ?>">
				<input type="hidden" id="question_id" name="question_id" value="<?php echo isset($question_details['question_id'])?$question_details['question_id']:''; ?>">
				<input type="hidden" id="q_id" name="q_id" value="<?php echo isset($question_details['q_id'])?$question_details['q_id']:''; ?>">
				
				<input  type="hidden" name="question" id="question" value="<?php echo isset($question)?$question:''; ?>">
				<div class="form-group">
				<div class="form-check">
					<label> 
						<input type="radio" name="radio" value="a"> <span class="label-text"><?php echo isset($question_details['option_1'])?$question_details['option_1']:''; ?></span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" name="radio" value="b"> <span class="label-text"><?php echo isset($question_details['option_2'])?$question_details['option_2']:''; ?></span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" name="radio" value="c"> <span class="label-text"><?php echo isset($question_details['option_3'])?$question_details['option_3']:''; ?></span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" name="radio" value="d"> <span class="label-text"><?php echo isset($question_details['option_4'])?$question_details['option_4']:''; ?></span>
					</label>
				</div>
				</div>
				
			
			<div class="clearfix">&nbsp;</div>
			<div class="clearfix">&nbsp;</div>
	<div class="row">
		<div class="col-md-6">
			<button type="submit"  class="btn btn-primary">
			<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp; Next</button> 
		</div>
		<div class="col-md-6">
			<a href="javascript:void(0);" onclick="close_your_exam();"  class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</a>
		</div>
	</div>
	   </form>
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
					<a href="#" class="btn btn-primary"  data-toggle="collapse" data-target="#demo111" >Daily Quest</a>
					<div id="demo111" class="collapse">
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
	 <div id="sucessmsg" style=""></div>
	 <script>
    var timeoutHandle;
    function count() {

    var startTime = document.getElementById('demo').innerHTML;
    var pieces = startTime.split(":");
    var time = new Date();    time.setHours(pieces[0]);
    time.setMinutes(pieces[1]);
    time.setSeconds(pieces[2]);
    var timedif = new Date(time.valueOf() - 1000);
    var newtime = timedif.toTimeString().split(" ")[0];
	
    var demotime=document.getElementById('demo').innerHTML=newtime;
    timeoutHandle=setTimeout(count, 1000);
	console.log(demotime);
	jQuery.ajax({
   			url: "<?php echo base_url('exam/updatetime_time');?>",
   			data: {
				radio: $('input[name="radio"]:checked', '#exam_start').val(),
				exam_id: $('#exam_id').val(),
				q_id: $('#q_id').val(),
				time: demotime,
			},
   			type: "POST",
   			format:"Json",
   					success:function(data){
					}
           });
	if(demotime=='00:00:00'){
		 window.location.href='<?php echo base_url('exam/completed_list'); ?>';
		
	}
}
count();

</script>

<script>


function close_your_exam(){
	if($('input[name="radio"]:checked', '#exam_start').val()!==undefined){
			var check_val=$('input[name="radio"]:checked', '#exam_start').val();
			var exam_id=$('#exam_id').val();
			var q_id=$('#q_id').val();
			var question_id=$('#question_id').val();
			jQuery.ajax({
   			url: "<?php echo base_url('exam/completed_question_submit');?>",
   			data: {
				radio: check_val,
				exam_id: exam_id,
				q_id: q_id,
				question_id: question_id,
			},
   			type: "POST",
   			format:"Json",
   					success:function(data){
						
						if(data.msg=1){
							$('#sucessmsg').html('  <div class="alert_msg1 animated slideInUp bg-succ"> Your exam successfully completed <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i> </div>');
                            window.location.href='<?php echo base_url('exam/completed_list'); ?>';
						}else if(data.msg=0){
							 $('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn"> Technical problem will occurred. Please try again <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i> </div>');
							return false;
						}else if(data.msg=2){
							 $('#sucessmsg').html('<div class="alert_msg1 animated slideInUp bg-warn"> Please log in to continue <i class="fa fa-check text-success ico_bac" aria-hidden="true"></i> </div>');
							window.location.href='<?php echo base_url(''); ?>';
						}
						
   					}
           });
		}
		else{
		alert('Choose any one answer');
		}
}

$(document).ready(function() {
   

    $('#exam_start').bootstrapValidator({
//       
        fields: {
            'radio': {
                validators: {
                    notEmpty: {
                        message: 'Choose any one answer'
                    }
                }
            }
        }
    });

});
</script>
   