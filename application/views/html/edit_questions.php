
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
              <h3 class="box-title">Edit <?php echo isset($exam_details['title'])?$exam_details['title']:''; ?> Question Details</h3>
            </div>
			<hr>
            <!-- /.box-header -->
            <div class="box-body ">
             
			 
			 <div class="row">

<div class="col-md-6 col-md-offset-3"> 
 <form id="addexam" name="addexam" method="post" class="form-horizontal" action="<?php echo base_url('exam/editquestionpost'); ?>">
 <input  type="hidden" name="exam_id" id="exam_id" value="<?php echo isset($exam_id)?$exam_id:''; ?>">
 
 <?php $cnt=1;foreach($question_details as $list){ ?>
<span id="question_num<?php echo isset($list['q_id'])?$list['q_id']:''; ?>">
 <div>
<h4 class="pull-left">Question <?php echo $cnt; ?></h4>
<span class="pull-right"><a href="javascript:void(0);" onclick="remove_queastion('<?php echo isset($list['q_id'])?$list['q_id']:''; ?>')"  data-toggle="modal" data-toggle="tooltip" data-target="#exampleFormModal" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle" aria-hidden="true"></i></a></span>
</div>
 <input  type="hidden" name="exam_question_id[]" id="exam_question_id" value="<?php echo isset($list['q_id'])?$list['q_id']:''; ?>">

<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <textarea rows="2" cols="2"  id="question" name="question[]" class="form-control" placeholder="Write question number "><?php echo isset($list['question'])?$list['question']:''; ?></textarea>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <input  name="option1[]" id="option1" placeholder="Enter option a" class="form-control input-md" type="text" value="<?php echo isset($list['option_1'])?$list['option_1']:''; ?>">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <input name="option2[]" id="option2" placeholder="Enter option b" class="form-control input-md" type="text" value="<?php echo isset($list['option_2'])?$list['option_2']:''; ?>">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <input name="option3[]" id="option3" placeholder="Enter option c" class="form-control input-md" type="text" value="<?php echo isset($list['option_3'])?$list['option_3']:''; ?>">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" ></label>  
  <div class="col-md-12">
  <input name="option4[]" id="option4" placeholder="Enter option d" class="form-control input-md" type="text" value="<?php echo isset($list['option_4'])?$list['option_4']:''; ?>">
    
  </div>
</div>
<br />


<div class="form-group">
<b>Correct answer</b>:

<select id="correct_answer" name="correct_answer[]"  class="form-control input-md" >
   <option value="">Select answer for question 1</option>
  <option <?php if($list['correct_answer']=='a'){ echo "selected"; }?> value="a">option a</option>
  <option  <?php if($list['correct_answer']=='b'){ echo "selected"; }?> value="b">option b</option>
  <option <?php if($list['correct_answer']=='c'){ echo "selected"; }?> value="c">option c</option>
  <option <?php if($list['correct_answer']=='d'){ echo "selected"; }?> value="d">option d</option>
  </select>
 </div> 
</span> 

<?php $cnt++;} ?>
<?php $count=count($question_details)+1;for($i=count($question_details)+1;$i<=$exam_details['total_questions'];$i++){ ?>

 <input  type="hidden" name="exam_question_id[]" id="exam_question_id" value="">

<h4 >Question <?php echo $count; ?></h4>

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

<?php $count++;} ?>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Update" class="btn btn-primary"/>
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
	<div tabindex="-1" role="dialog" aria-labelledby="exampleFormModalLabel" id="exampleFormModal" class="modal fade" style="display: none;" aria-hidden="true">

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 id="title" class="modal-title">Confirmation</h4>
        </div>
		 <form  id="addOrg" name="addOrg"  method="POST" enctype="multipart/form-data" role="form">

            <div class="modal-body">
			<div class="alert alert-danger alert-dismissible" id="errormsg" style="display:none;"></div>
			  <div class="row">
				<div id="content" class="col-xs-12 col-xl-12 form-group">
				Are you sure ?
				</div>
				<input type="hidden" name="q_id" id="q_id" value="" >
				<div class="col-xs-6 col-md-6">
				  <button type="button" aria-label="Close" data-dismiss="modal" class="btn btn-primary btn-outline">Cancel</button>
				</div>
				<div class="col-xs-6 col-md-6">
				<button  type="button" style="text-decoration:none;float:right;" name="submitButton" value="1" onclick="remove_question();" class="btn btn-primary"  id="validatelllButton1" >ok</button>
				</div>
			 </div>
		  </div>
					
          </form>
		  
        </div>
        
      </div>
    </div>
	<script type="text/javascript">
	
	function remove_queastion(val){
	$("#exampleFormModal").show();
	var data=val;
		
		$("#q_id").empty();
		$("#q_id").val(data);		
}
	function remove_question(){
		var id=$("#q_id").val();
		if(id!=''){
			jQuery.ajax({
					url: "<?php echo site_url('exam/remove_exam_question');?>",
					data: {
						q_id: id,
						exam_id: $("#exam_id").val(),
					},
					dataType: 'json',
					type: 'POST',
					success: function (data) {
					if(data.msg==1){
					$('#modalwindow').modal('hide');
						$("#exampleFormModal").modal('hide');
						jQuery('#question_num'+id).hide();
						location.reload(); 
					}
					}
				});
			}
			
		}
		
	
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

   

