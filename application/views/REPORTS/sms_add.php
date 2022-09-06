<!-- jQuery -->
<script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<div class="content-wrapper"> 
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Add SMS Details</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>">Home</a></li>
						<li class="breadcrumb-item active">Add SMS</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid --> 
	</section>
	<!-- Main content -->
	
	<section class="content">
		<div class="container-fluid">
			<div class="row"> 
				<!-- left column -->
				<div class="col-md-12"> 
					<!-- general form elements -->
					<div class="card card-primary">
						
						<!-- /.card-header --> 
						<!-- form start -->
						<form action="sms_add" method="post">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6">
									  <!-- text input -->
									  <div class="form-group">
										<label>Name</label>
										<input type="text" class="form-control" name="name" placeholder="Enter Name">
									  </div>
									</div>
									<div class="col-sm-6">
									  <div class="form-group">
										<label>Mobile</label>
										<input type="text" class="form-control" name="number" placeholder="Enter Mobile Number">
									  </div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							
							<div class="card-footer">
								<input type="submit" class="btn btn-primary" value="Submit">
							</div>
						</form>
					</div>
					<!-- /.card --> 
				</div>
				<!--/.col (left) --> 
			</div>
			<!-- /.row --> 
		</div>
		<!-- /.container-fluid --> 
	</section>
	
	<!-- /.content --> 
</div>
<!-- /.content-wrapper --> 
<script>
$(document).ready(function()
{
	
	$("#period_id").change(function()
	{
		if($("#period_id").val() == "p_today")
		{
			$("#period_dtl").css("display","none");
		}
		else if($("#period_id").val() == "sel_date")
		{
			$("#period_dtl").css("display","block");
			$("#from_date").css("display","block");
			$("#div_to_date").css("display","none");
		}
		else if($("#period_id").val() == "from_to")
		{
			 $("#period_dtl").css("display","block");
			 $("#lbl_from_date").html("From Date");
			 $("#from_date").css("display","block");
			 $("#div_to_date").css("display","block");
			 //$("#lbl_to_shift").html("Shift");
			 //$("#lbl_to_shift").html("");
		}
	});
});
</script> 
