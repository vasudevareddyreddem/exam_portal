<?php include("admin-header.php"); ?>
	<div class="container content-start">
		<div class="row">
				<section class="content">
      <div class="row">
        <div class="col-md-9">
		<div class="box-data">
              <div class="box-header">
              <h3 class="box-title pull-left">Start Exam</h3>
              <h3 class="btn btn-warning btn-lg pull-right" id="demo"></h3>
            </div>
			<div class="clearfix"></div>
		
			<hr>
            <!-- /.box-header -->
            <div class="box-body table-responsive "  style="padding:20px;">
		<form>
					<h4> <strong>Question  1 :</strong> Which style is used for font bold?</h4> 
				<div class="form-check">
					<label>
						<input type="radio" name="radio" checked> <span class="label-text">Option 01</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" name="radio"> <span class="label-text">Option 02</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" name="radio"> <span class="label-text">Option 03</span>
					</label>
				</div>
				<div class="form-check">
					<label>
						<input type="radio" name="radio"> <span class="label-text">Option 03</span>
					</label>
				</div>
				
			
			<div class="clearfix">&nbsp;</div>
			<div class="clearfix">&nbsp;</div>
	<div class="row">
		<div class="col-md-6">
			<button type="submit"  class="btn btn-primary">
			<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp; Next</button> 
		</div>
		<div class="col-md-6">
			<a href="result.php"  class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</a>
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
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2019 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<?php include("footer.php"); ?>
   