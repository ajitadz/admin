<!-- jQuery -->
<script src="<?php echo base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<div class="content-wrapper"> 
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Reports</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url('admin'); ?>">Home</a></li>
						<li class="breadcrumb-item active">Reports</li>
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
						<form action="prod_report" method="post">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Validation Type</label>
									<select class="form-control" id="val_type" name="val_type">
										<option value="valve_1">Test 1</option>
										<option value="valve_2">Test 2</option>
									</select>
								</div>
								<!--<div class="form-group">
									<label for="exampleInputEmail1">Valve Size</label>
									<select class="form-control" id="val_size">
										<option>--Default--</option>
										<?php foreach($valveSize as $row)
										{
											echo'<option value="'.$row->valve_size.'">'.$row->valve_size.'</option>';
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">SL Number</label>
									<select class="form-control" id="slno">
										<option>--Default--</option>
										<?php foreach($slNumber as $row)
										{
											echo'<option value="'.$row->slno.'">'.$row->slno.'</option>';
										}
										?>
									</select>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">HT Number</label>
									<select class="form-control" id="htno">
										<option>--Default--</option>
										<?php foreach($htNumber as $row)
										{
											echo'<option value="'.$row->htno.'">'.$row->htno.'</option>';
										}
										?>
									</select>
								</div>-->
								<div class="form-group">
									<label for="exampleInputEmail1">Period</label>
									<select class="form-control" id="period_id" name="period_id">
										<option value="p_today">Today</option>
										<option value="sel_date">Date</option>
										<option value="from_to">From To</option>
									</select>
								</div>
								<div id="period_dtl" style="display:none;">
									<div class="form-group from_date">
										<label id="lbl_from_date">Date:</label>
										<div class="input-group date" id="fromdate" data-target-input="nearest">
											<input type="date" class="form-control datetimepicker-input"  data-target="#fromdate" name="fromdate">
										</div>
									</div>
									<div id="div_to_date" style="display:none;">
										<div class="form-group">
											<label>To Date:</label>
											<div class="input-group date" id="fromdate" data-target-input="nearest">
												<input type="date" class="form-control datetimepicker-input"  data-target="#fromdate" name="todate">
											</div>
										</div>
									</div
								</div>
								
								<!-- End .control-group --> 
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
