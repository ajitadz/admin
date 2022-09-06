<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper"> 
	<!-- Content Header (Page header) --> 
	<!-- Main content -->
	<section class="content">
		<div class="container-fluid"> 
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-6 col-6"> 
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>TYPE OF VALIDATION: <span id="validation_1"></span></h3>
							<div class='row' style="padding:20px;">
								<div class="col-lg-12 col-12" id="c_ms_1"></div>
							</div>
							<div class='row' style="padding:20px;">
								<div class="col-lg-3 col-3" style="color: red" id="c_water_level_1"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_air_flow_1"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_low_pressure_1"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_limit_switch_1"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_ground_loop_1"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_water_body_temp_1"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_short_circuit_1"> </div>
							</div>
							<div class='row' style="padding:20px;" id="butt1">
								<div class="col-lg-4 col-4" >
									<button type="button" id="start_1" class="btn btn-block btn-success btn-sm"><i class="fas fa-play"></i></button>
								</div>
								<div class="col-lg-4 col-4">
									<button type="button" class="btn btn-block btn-warning btn-sm" id="pause_1"><i class="fas fa-pause"></i></button>
								</div>
								<div class="col-lg-4 col-4">
									<button type="button" class="btn btn-block btn-danger btn-sm" id="stop_1"><i class="fas fa-stop"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="small-box">
						<div class="inner">
							<div class="row">
								<div class="col-lg-12 col-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Units</th>
												<th>Planned</th>
												<th>Actual</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>AIR FLOW</td>
												<td><span id="air_flowmeter_set_1"></span></td>
												<td><span id="air_flowmeter_in_act_1"></span></td>
											</tr>
											<tr>
												<td>WATER FLOWMETER (IN)</td>
												<td><span id="water_flowmeter_in_set_1"></span></td>
												<td><span id="flow_meter_in_1"></span></td>
											</tr>
											<tr>
												<td>WATER FLOWMETER (OUT)</td>
												<td><span id="water_flowmeter_out_set_1"></span></td>
												<td><span id="flow_meter_out_1"></span></td>
											</tr>
											<tr>
												<td>PRESSURE (IN)</td>
												<td><span id="pressure_in_set_1"></span></td>
												<td><span id="pressure_in_1"></span></td>
											</tr>
											<tr>
												<td>PRESSURE (OUT)</td>
												<td><span id="pressure_out_set_1"></span></td>
												<td><span id="pressure_out_1"></span></td>
											</tr>
											<tr>
												<td>PRESSURE RATE</td>
												<td><span id="validation_pressure_set_1"></span></td>
												<td><span id="prssure_Rate_1"></span></td>
											</tr>
											<tr>
												<td>TEMP 1</td>
												<td><span id="temp_1_set_1"></span></td>
												<td><span id="temp1_1"></span></td>
											</tr>
											<tr>
												<td>TEMP 2</td>
												<td><span id="temp_2_set_1"></span></td>
												<td><span id="temp2_1"></span></td>
											</tr>
											<tr>
												<td>TEMP 3</td>
												<td><span id="temp_3_set_1"></span></td>
												<td><span id="temp3_1"></span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="small-box bg-success">
						<div class="inner">
							<div class="row">
								<div class="col-lg-6 col-6">
									<p>VALVE SIZE: <span id="valve_Size_1"></span></p>
									<p>AUTO / MANUAL: <span id="mode_1"></span></p>
									<p>TEST VALVE CHANGE: <span id="valve_change_1"></span></p>
									<p>SL. NO: <span id="s_no_1"></span></p>
									<p>HT.NO: <span id="ht_no_1"></span></p>
									<p>REPORT NO: <span id="report_no_1"></span></p>
									<p>VALVE TYPE: <span id="valve_type_1"></span></p>
									<p>CUMULATIVE CYCLE: <span id="cum_cycle_1"></span></p>
								</div>
								<div class="col-lg-6 col-6">
									<p>CLOSE DOWEL TIME: <span id="close_dowel_time_1"></span></p>
									<p>OPEN DOWEL  TIME: <span id="open_dowel_time_1"></span></p>
									<p>CLOSE TIME: <span id="close_time_1"></span></p>
									<p>OPEN TIME: <span id="open_time_1"></span></p>
									<p>SV1: <span id="sv1_1"></span></p>
									<p>SV2: <span id="sv2_1"></span></p>
									<p>HEATER : <span id="heater_1"></span></p>
									<p>DATE TIME: <span id="date_time_1"></span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-6 col-6"> 
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>TYPE OF VALIDATION: <span id="validation_2"></span></h3>
							<div class='row' style="padding:20px;">
								<div class="col-lg-12 col-12" id="c_ms_2"></div>
							</div>
							<div class='row' style="padding:20px;">
								<div class="col-lg-3 col-3" style="color: red" id="c_water_level_2"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_air_flow_2"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_low_pressure_2"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_limit_switch_2"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_ground_loop_2"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_water_body_temp_2"> </div>
								<div class="col-lg-3 col-3" style="color: red" id="c_short_circuit_2"> </div>
							</div>
							<div class='row' style="padding:20px;" id="butt2">
								<div class="col-lg-4 col-4" >
									<button type="button" id="start_2" class="btn btn-block btn-success btn-sm"><i class="fas fa-play"></i></button>
								</div>
								<div class="col-lg-4 col-4">
									<button type="button" class="btn btn-block btn-warning btn-sm" id="pause_2"><i class="fas fa-pause"></i></button>
								</div>
								<div class="col-lg-4 col-4">
									<button type="button" class="btn btn-block btn-danger btn-sm" id="stop_2"><i class="fas fa-stop"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="small-box">
						<div class="inner">
							<div class="row">
								<div class="col-lg-12 col-12">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Units</th>
												<th>Planned</th>
												<th>Actual</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>AIR FLOW</td>
												<td><span id="air_flowmeter_set_2"></span></td>
												<td><span id="air_flowmeter_in_act_2"></span></td>
											</tr>
											<tr>
												<td>WATER FLOWMETER (IN)</td>
												<td><span id="water_flowmeter_in_set_2"></span></td>
												<td><span id="flow_meter_in_2"></span></td>
											</tr>
											<tr>
												<td>WATER FLOWMETER (OUT)</td>
												<td><span id="water_flowmeter_out_set_2"></span></td>
												<td><span id="flow_meter_out_2"></span></td>
											</tr>
											<tr>
												<td>PRESSURE (IN)</td>
												<td><span id="pressure_in_set_2"></span></td>
												<td><span id="pressure_in_2"></span></td>
											</tr>
											<tr>
												<td>PRESSURE (OUT)</td>
												<td><span id="pressure_out_set_2"></span></td>
												<td><span id="pressure_out_2"></span></td>
											</tr>
											<tr>
												<td>PRESSURE RATE</td>
												<td><span id="validation_pressure_set_2"></span></td>
												<td><span id="prssure_Rate_2"></span></td>
											</tr>
											<tr>
												<td>TEMP 1</td>
												<td><span id="temp_1_set_2"></span></td>
												<td><span id="temp1_2"></span></td>
											</tr>
											<tr>
												<td>TEMP 2</td>
												<td><span id="temp_2_set_2"></span></td>
												<td><span id="temp2_2"></span></td>
											</tr>
											<tr>
												<td>TEMP 3</td>
												<td><span id="temp_3_set_2"></span></td>
												<td><span id="temp3_2"></span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="small-box bg-success">
						<div class="inner">
							<div class="row">
								<div class="col-lg-6 col-6">
									<p>VALVE SIZE: <span id="valve_Size_2"></span></p>
									<p>AUTO / MANUAL: <span id="mode_2"></span></p>
									<p>TEST VALVE CHANGE: <span id="valve_change_2"></span></p>
									<p>SL. NO: <span id="s_no_2"></span></p>
									<p>HT.NO: <span id="ht_no_2"></span></p>
									<p>REPORT NO: <span id="report_no_2"></span></p>
									<p>VALVE TYPE: <span id="valve_type_2"></span></p>
									<p>CUMULATIVE CYCLE: <span id="cum_cycle_2"></span></p>
								</div>
								<div class="col-lg-6 col-6">
									<p>CLOSE DOWEL TIME: <span id="close_dowel_time_2"></span></p>
									<p>OPEN DOWEL  TIME: <span id="open_dowel_time_2"></span></p>
									<p>CLOSE TIME: <span id="close_time_2"></span></p>
									<p>OPEN TIME: <span id="open_time_2"></span></p>
									<p>SV1: <span id="sv1_2"></span></p>
									<p>SV2: <span id="sv2_2"></span></p>
									<p>HEATER : <span id="heater_2"></span></p>
									<p>DATE TIME: <span id="date_time_2"></span></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ./col --> 
			</div>
			<!-- /.row --> 
		</div>
		<!-- /.container-fluid --> 
	</section>
</div>

<!-- /.content-wrapper --> 
<script src="<?php echo base_url('assets'); ?>/js/jquery.ajax.js"></script> 
<script>
	$(document).ready(function()
{
$("#start_1").click(function()
{
		jQuery.post('admin/savemachinestatus', 
       	{ 
           	'start_1':1
       	},
    	function(data)
       	{
       		alert(data);
       		return false;
           	//jQuery('#save').html(data)
       	});
});
$("#stop_1").click(function()
{
		jQuery.post('admin/savemachinestatus', 
       	{ 
           	'stop_1':1,
       	},
    	function(data)
       	{
       		alert(data);
       		return false;
           	//jQuery('#save').html(data)
       	});
});
$("#pause_1").click(function()
{
		jQuery.post('admin/savemachinestatus', 
       	{ 
           	'pause_1':1
       	},
    	function(data)
       	{
       		alert(data);
       		return false;
           	//jQuery('#save').html(data)
       	});
});
$("#start_2").click(function()
{
	jQuery.post('admin/savemachinestatus', 
	{ 
    	'start_2':1,
        'stop_2':0,
        'pause_2':0
    },
    function(data)
    {
       alert(data);
       return false;
    });
});
$("#stop_2").click(function()
{
		jQuery.post('admin/savemachinestatus', 
       	{ 
           	'start_2':0,
           	'stop_2':1,
           	'pause_2':0
       	},
    	function(data)
       	{
       		alert(data);
       		return false;
           	//jQuery('#save').html(data)
       	});
});
$("#pause_2").click(function()
{
	jQuery.post('admin/savemachinestatus', 
    { 
    	'start_2':0,
        'stop_2':0,
        'pause_2':1
    },
    function(data)
    {
       alert(data);
       return false;
    });
});	
setInterval(function()
{
	//alert('ajin');
  //location.reload();
  startcall();
  alertcall();
},1000);
function startcall()
{
	var req =  new Request();
	req.isneedblock = false;
	req.url = 'admin/dashboardajax';
	RequestHandler(req,assigndata);
}
function alertcall()
{
	var req =  new Request();
	req.isneedblock = false;
	req.url = 'admin/alertajax';
	RequestHandler(req,alertdata);
}
assigndata(data='');
function assigndata(data)
{
	
	
	var res = data;
	res = JSON.parse(res);
	//alert(res);
	console.log(res);

	for(i= 0;i<=2;i++)
	{
		//
		
		//$("#valve_1").html(res[i].c_type);
		if(res[i].c_type=='1')
			{
				$("#validation_1").html(res[i].validation_1);
				$("#valve_Size_1").html(res[i].valve_Size_1);
				$("#valve_change_1").html(res[i].valve_change_1);
				$("#valve_type_1").html(res[i].valve_type_1);
				$("#mode_1").html(res[i].mode_1);
				$("#prssure_Rate_1").html(res[i].prssure_Rate_1);
				$("#validation_pressure_set_1").html(res[i].validation_pressure_set_1);
				$("#s_no_1").html(res[i].s_no_1);
				$("#ht_no_1").html(res[i].ht_no_1);
				$("#report_no_1").html(res[i].report_no_1);
				$("#cum_cycle_1").html(res[i].cum_cycle_1);
				$("#flow_meter_in_1").html(res[i].flow_meter_in_1);
				$("#water_flowmeter_in_set_1").html(res[i].water_flowmeter_in_set_1);
				$("#pressure_in_1").html(res[i].pressure_in_1);
				$("#pressure_in_set_1").html(res[i].pressure_in_set_1);
				$("#pressure_out_1").html(res[i].pressure_out_1);
				$("#pressure_out_set_1").html(res[i].pressure_out_set_1);
				$("#close_dowel_time_1").html(res[i].close_dowel_time_1);
				$("#open_dowel_time_1").html(res[i].open_dowel_time_1);
				$("#close_time_1").html(res[i].close_time_1);
				$("#open_time_1").html(res[i].open_time_1);
				$("#temp1_1").html(res[i].temp1_1);
				$("#temp2_1").html(res[i].temp2_1);
				$("#temp3_1").html(res[i].temp3_1);
				$("#temp_1_set_1").html(res[i].temp_1_set_1);
				$("#temp_2_set_1").html(res[i].temp_2_set_1);
				$("#temp_3_set_1").html(res[i].temp_3_set_1);
				$("#flow_meter_out_1").html(res[i].flow_meter_out_1);
				$("#water_flowmeter_out_set_1").html(res[i].water_flowmeter_out_set_1);
				$("#sv1_1").html(res[i].sv1_1);
				$("#sv2_1").html(res[i].sv2_1);
				$("#heater_1").html(res[i].heater_1);
				$("#cycle_time_1").html(res[i].cycle_time_1);
				$("#date_time_1").html(res[i].date_time);
				$("#air_flowmeter_in_act_1").html(res[i].air_flowmeter_in_act_1);
				$("#air_flowmeter_set_1").html(res[i].air_flowmeter_set_1);
				if(res[i].cycle_time_1 == "1"){
					$("#c_ms_1").html('<span style="background-color:green;padding:10px;"><i class="fas fa-play"></i> Running</span>');
				}else{
					$("#c_ms_1").html('<span style="background-color:red;padding:10px;"><i class="fas fa-stop"></i> Stopped</span>');
				}
			}
		else
			{
				$("#validation_2").html(res[i].validation_1);
				$("#valve_Size_2").html(res[i].valve_Size_1);
				$("#valve_change_2").html(res[i].valve_change_1);
				$("#valve_type_2").html(res[i].valve_type_1);
				$("#mode_2").html(res[i].mode_1);
				$("#prssure_Rate_2").html(res[i].prssure_Rate_1);
				$("#validation_pressure_set_2").html(res[i].validation_pressure_set_1);
				$("#s_no_2").html(res[i].s_no_1);
				$("#ht_no_2").html(res[i].ht_no_1);
				$("#report_no_2").html(res[i].report_no_1);
				$("#cum_cycle_2").html(res[i].cum_cycle_1);
				$("#flow_meter_in_2").html(res[i].flow_meter_in_1);
				$("#water_flowmeter_in_set_2").html(res[i].water_flowmeter_in_set_1);
				$("#pressure_in_2").html(res[i].pressure_in_1);
				$("#pressure_in_set_2").html(res[i].pressure_in_set_1);
				$("#pressure_out_2").html(res[i].pressure_out_1);
				$("#pressure_out_set_2").html(res[i].pressure_out_set_1);
				$("#close_dowel_time_2").html(res[i].close_dowel_time_1);
				$("#open_dowel_time_2").html(res[i].open_dowel_time_1);
				$("#close_time_2").html(res[i].close_time_1);
				$("#open_time_2").html(res[i].open_time_1);
				$("#temp1_2").html(res[i].temp1_1);
				$("#temp2_2").html(res[i].temp2_1);
				$("#temp3_2").html(res[i].temp3_1);
				$("#temp_1_set_2").html(res[i].temp_1_set_1);
				$("#temp_2_set_2").html(res[i].temp_2_set_1);
				$("#temp_3_set_2").html(res[i].temp_3_set_1);
				$("#flow_meter_out_2").html(res[i].flow_meter_out_1);
				$("#water_flowmeter_out_set_2").html(res[i].water_flowmeter_out_set_1);
				$("#sv1_2").html(res[i].sv1_1);
				$("#sv2_2").html(res[i].sv2_1);
				$("#heater_2").html(res[i].heater_1);
				$("#cycle_time_2").html(res[i].cycle_time_1);
				$("#date_time_2").html(res[i].date_time);
				$("#air_flowmeter_in_act_2").html(res[i].air_flowmeter_in_act_1);
				$("#air_flowmeter_set_2").html(res[i].air_flowmeter_set_1);
				if(res[i].cycle_time_1 == "1"){
					$("#c_ms_2").html('<span style="background-color:green;padding:10px;"><i class="fas fa-play"></i> Running</span>');
				}else{
					$("#c_ms_2").html('<span style="background-color:red;padding:10px;"><i class="fas fa-stop"></i> Stopped</span>');
				}
			}
		
	}
}
alertdata(data='');
function alertdata(data)
{
	var res = data;
	res = JSON.parse(res);
	//alert(res);
	console.log(res);

	for(i= 0;i<=2;i++)
	{
		//
		/*if(res[i].machine_status == "0"){
			
		}else{
			$("#c_ms").html('<i class="fa fa-play-circle-o"></i>');
		}*/
		//$("#valve_1").html(res[i].c_type);
		
		if(res[i].water_level_1 == "1")
		{
			$("#c_water_level_1").html('<i class="fas fa-tint"></i>Water Level');
		}
		if(res[i].air_flow_1 == "1")
		{
			$("#c_air_flow_1").html('<i class="fas fa-wind"></i>Air Flow');
		}
		if(res[i].low_pressure_1 == "1")
		{
			$("#c_low_pressure_1").html('<i class="fas fa-tachometer-alt"></i>Pressure');
		}
		if(res[i].limit_switch_1 == "1")
		{
			$("#c_limit_switch_1").html('<i class="fas fa-hand-paper"></i>Limit Switch');
		}
		if(res[i].water_level_2 == "1")
		{
			$("#c_water_level_2").html('<i class="fas fa-tint"></i>Water Level');
		}
		if(res[i].air_flow_2 == "1")
		{
			$("#c_air_flow_2").html('<i class="fas fa-wind"></i>Air Flow');
		}
		if(res[i].low_pressure_2 == "1")
		{
			$("#c_low_pressure_2").html('<i class="fas fa-tachometer-alt"></i>Pressure');
		}
		if(res[i].limit_switch_2 == "1")
		{
			$("#c_limit_switch_2").html('<i class="fas fa-hand-paper"></i>Limit Switch');
		}
		if(res[i].ground_loop == "1")
		{
			$("#c_ground_loop_1").html('<i class="fas fa-globe-asia"></i>Ground Loop');
			$("#c_ground_loop_2").html('<i class="fas fa-globe-asia"></i>Ground Loop');
		}
		if(res[i].water_body_temp == "1")
		{
			$("#c_water_body_temp_1").html('<i class="fas fa-temperature-high"></i>Water Temp');
			$("#c_water_body_temp_2").html('<i class="fas fa-temperature-high"></i>Water Temp');
		}
		if(res[i].short_circuit == "1")
		{
			$("#c_short_circuit_1").html('<i class="fas fa-bolt"></i>Short Circuit');
			$("#c_short_circuit_2").html('<i class="fas fa-bolt"></i>Short Circuit');
		}
		
	}
}



		
});		

</script> 
