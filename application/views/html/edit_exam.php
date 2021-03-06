<style>
.help-block{
	color:red !important;
}
</style>
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
            <div class="box-body ">
             
			 
			 <div class="row">
<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br /><br />
 <div class="col-md-3"></div><div class="col-md-6"> 
 <form id="defaultForm" method="post" class="form-horizontal" action="<?php echo base_url('exam/editpost'); ?>">

<input type="hidden" name="exam_id" id="exam_id" value="<?php echo isset($exam_details['e_id'])?$exam_details['e_id']:''; ?>">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="title" name="title" placeholder="Enter Quiz title" class="form-control input-md" type="text" value="<?php echo isset($exam_details['title'])?$exam_details['title']:''; ?>">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="total"></label>  
  <div class="col-md-12">
  <input id="total_questions" name="total_questions" placeholder="Enter total number of questions" class="form-control input-md" type="text" value="<?php echo isset($exam_details['total_questions'])?$exam_details['total_questions']:''; ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="right"></label>  
  <div class="col-md-12">
  <input id="right_answers" name="right_answers" placeholder="Enter marks on right answer" class="form-control input-md"  type="text"  value="<?php echo isset($exam_details['right_answers'])?$exam_details['right_answers']:''; ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="wrong"></label>  
  <div class="col-md-12">
  <input id="wrong_minus_answer" name="wrong_minus_answer" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md"  type="text" value="<?php echo isset($exam_details['wrong_minus_answer'])?$exam_details['wrong_minus_answer']:''; ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="time"></label>  
  <div class="col-md-12">
  <input id="time_limit" name="time_limit" placeholder="Enter time limit for test in minute" class="form-control input-md" type="text" value="<?php echo isset($exam_details['time_limit'])?$exam_details['time_limit']:''; ?>">
    
  </div>
</div>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="desc"></label>  
  <div class="col-md-12">
  <textarea rows="8" cols="8" name="desc" id="desc" class="form-control" placeholder="Write description here..."><?php echo isset($exam_details['desc'])?$exam_details['desc']:''; ?></textarea>  
  </div>
</div>


<div class="form-group">
<div class="row">
  <label class="col-md-6 control-label" for=""></label>
  <div class="col-md-6"> 
    <input  type="submit"  value="Next" class="btn btn-primary"/>
  </div>

</div>
</div>


</form>

</div>
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
	<script type="text/javascript">
$(document).ready(function() {
  $('#defaultForm').bootstrapValidator({
      fields: {
            title: {
                  validators: {
					notEmpty: {
						message: 'Title is required'
					}
				}
            },
            total_questions: {
                validators: {
					notEmpty: {
						message: 'Total number of questions is required'
					},
					regexp: {
					regexp:  /^[0-9]*$/,
					message:'total number of questions must be only digits'
					}
				
				}
            },
			right_answers: {
                validators: {
					notEmpty: {
						message: 'Marks on right answer is required'
					},
					regexp: {
					regexp:  /^[0-9]*$/,
					message:'Marks on right answer must be only digits'
					}
				
				}
            },
			wrong_minus_answer: {
                validators: {
					notEmpty: {
						message: 'Minus marks is required'
					}
				
				}
            },
			time_limit: {
                  validators: {
					notEmpty: {
						message: 'Time Limit is required'
					},
					regexp: {
					regexp: /^([01]\d|2[0-3]):[0-5]\d:[0-5]\d$/,
					message: 'Time Limit can only consist of alphanumeric, space and dot'
					}
				
				}
            },
            desc: {
                validators: {
					notEmpty: {
						message: 'Description is required'
					}
				
				}
            }
        }
    });

});
</script>

   