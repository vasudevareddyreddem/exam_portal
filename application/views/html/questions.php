
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
              <h3 class="box-title">Enter Question Details</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body ">
             
			 
			 <div class="row">

<div class="col-md-6 col-md-offset-3"> 
 <form id="addexam" name="addexam" method="post" class="form-horizontal" action="<?php echo base_url('exam/addpost'); ?>">
 <input  type="hidden" name="exam_id" id="exam_id" value="<?php echo isset($exam_id)?$exam_id:''; ?>">
 
 <?php $cnt=1;for($i=1;$i<=$exam_details['total_questions'];$i++){ ?>
<h4 >Question <?php echo $cnt; ?></h4>

<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <textarea rows="2" cols="2"  id="question" name="question[]" class="form-control" placeholder="Write question number "></textarea>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <input  name="option1[]" id="option1" placeholder="Enter option a" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <input name="option2[]" id="option2" placeholder="Enter option b" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <input name="option3[]" id="option3" placeholder="Enter option c" class="form-control input-md" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <input name="option4[]" id="option4" placeholder="Enter option d" class="form-control input-md" type="text">
    
  </div>
</div>
<br />


<div class="form-group">
<b>Correct answer</b>:

<select id="correct_answer" name="correct_answer[]"  class="form-control input-md" >
   <option value="">Select answer for question 1</option>
  <option value="a">option a</option>
  <option value="b">option b</option>
  <option value="c">option c</option>
  <option value="d">option d</option>
  </select>
 </div>   

<?php $cnt++;} ?>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
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
   

    $('#addexam').bootstrapValidator({
//       
        fields: {
            'question[]': {
                validators: {
                    notEmpty: {
                        message: 'Question is required'
                    }
                }
            },
			'option1[]': {
                validators: {
                    notEmpty: {
                        message: 'Option one is required'
                    }
                }
            },
			'option2[]': {
                validators: {
                    notEmpty: {
                        message: 'Option two is required'
                    }
                }
            },
			'option3[]': {
                validators: {
                    notEmpty: {
                        message: 'Option three is required'
                    }
                }
            },
			'option4[]': {
                validators: {
                    notEmpty: {
                        message: 'Option four is required'
                    }
                }
            },
			'correct_answer[]': {
                validators: {
                    notEmpty: {
                        message: ' Correct answer is required'
                    }
                }
            },
            
            
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });

});
</script>

   

