<script src="<?php echo base_url('assets'); ?>/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/knockout.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/sevenSeg.js"></script>
<!-- Content Wrapper. Contains page content -->
<style>
    #fabriclengthdata{
		
		font-family: tahoma;
		font-size: 20px;
		text-align: center;
		border: 3px solid #6D6D6D;
		padding: 10px 0px 10px 5px;
		color: red;
		background-color: black;
	}
</style>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        <div class="card-body">
          <div class="container" style="max-width: 100%;">
			<div class="row" style="padding:10px; position: relative; display: -ms-flexbox;    display: flex;    min-width: 0;    word-wrap: break-word;    background-color: #fff;    background-clip: border-box;    border: 0 solid rgba(0,0,0,.125);    border-radius: .25rem;">
				<div class="col-md-4">
					<div class="">
                        <div class="bg-secondary">
							<?php 
							foreach ($getMachineByID as $row)
							{
								echo'<h2 align="center">'.$row->machine_name.'-'.$row->machine_code.'</h2>';
							}
							?>
                        </div>
                    </div>
					<br/>
					<br/>
					<br/>
						<div id="fabriclengthdata"> 
							<div id="testResizableDiv2">
								<div id="testResizableArray"></div>
							</div>
						</div>
					
					<!--<div class="counter-box colored"><strong><span style="text-align: center;border: 3px solid #6D6D6D;color: red;background-color: black;padding-left:10px; padding-right:10px; text-shadow: -2px 2px 0 rgba(0, 0, 0, 0.2); font-size: 62px;">3134.34</span></strong>
					</div>-->
				</div>
				<div class="col-md-6">
					<div class="card-body">
						<table class="table table-bordered">
					<thead>
						<tr>
							<th>
								Roll No
							</th>
							<th>
								<input class="form-control" type="text" name="h_roll_no" id="h_roll_no" class="jQKeyboard" disabled value=""/>
							</th>
							<th>
								Defects
							</th>
							<th>
								<input class="form-control" type="text" name="h_defects" id="h_defects" disabled class="jQKeyboard" value=""/>
							</th>
							
						</tr>
						<tr>
							<th>
								Inspector
							</th>
							<th>
								<input class="form-control" type="text" name="h_inspector" id="h_inspector" disabled class="jQKeyboard" value=""/>
								
							</th>
							<th>
								Weaver ID
							</th>
							<th>
								<input class="form-control" type="text" name="h_viewer_id" id="h_viewer_id" disabled class="jQKeyboard" value=""/>
							</th>
						</tr>
						<tr>
							<th>
								Loom No
							</th>
							<th>
								<input class="form-control" type="text" name="loom_no" id="loom_no" disabled class="jQKeyboard" value=""/>
							</th>
							<th>
								Loom Type
							</th>
							<th>
								<input class="form-control" type="text" name="loom_type" id="loom_type" disabled class="jQKeyboard" value=""/>
							</th>
						</tr>
                  </thead>
                </table>
					</div>
				</div>
				<div class="col-md-2">
					<button type="button"  data-toggle="modal" data-target="#modal-update" class="btn btn-block btn-secondary" style="width: 150px; float: right">Change</button>
					<button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-default" style="width: 150px; float: right">Roll Entry</button>
					<button type="button" id="start" class="btn btn-block btn-success" style="width: 150px;float: right">Start</button>
					<button type="button" class="btn btn-block btn-danger" style="width: 150px;float: right">Stop</button>
					<button type="button" id="reset" class="btn btn-block btn-warning" style="width: 150px;float: right">Reset</button>
				</div>
			</div>
			<div class="row " style="padding:10px; position: relative; display: -ms-flexbox;    display: flex;    min-width: 0;    word-wrap: break-word;    background-color: #fff;    background-clip: border-box;    border: 0 solid rgba(0,0,0,.125);    border-radius: .25rem;" >
				<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-xl-6" style="padding:5px;">
				</div>
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 col-xl-3"style="padding:5px;">
						<div class="icheck-primary d-inline">
							<input type="radio" id="radioPrimary1" name="radio" checked="checked" value="unmarked">
							<label for="radioPrimary1">
								KLM Faults
							</label>
						</div>
					</div>
					<div class="col-md-3 col-lg-3 col-sm-3 col-xs-3 col-xl-3" style="padding:5px;">
						
						<div class="icheck-primary d-inline">
							<input type="radio" id="radioPrimary2" name="radio" value="marked">
							<label for="radioPrimary2">
								CUMI Faults
							</label>
						</div>
					</div>
			</div>
		  </div>
        </div>
        <!-- /.card-body -->
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<section class="content">
      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <?php
		$count = 1;
		//print_r($getFaultCode);
		//exit();
		
		foreach($getFaultCode as $row)
		{
			if ($count%12 == 1)
				{  
					echo '<div class="row" style="padding-left:20px; padding-right:20px; padding-bottom:10px;">';
				}
			if($row->fault_name=="ROLLEND")
			{
				
				echo '<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 col-xl-1 ajin "  style="padding-left:6px"><button type="button" id="'.$row->fault_code.'" class="btn btn-sm btn-danger" style="width: 100px; height:50px;float: right">'.$row->fault_name.'</button></div>';
			}
			else
			{
				echo '<div class="col-md-1 col-lg-1 col-sm-1 col-xs-1 col-xl-1 ajin"  style="padding-left:6px"><button type="button" id="'.$row->fault_code.'" class="btn btn-sm btn-secondary" style="width: 100px;height:50px;float: right">'.$row->fault_name.'</button></div>';
			}
			
			if ($count%12 == 0)
				{
					echo "</div>";
				}
			$count++;
		}
		if ($count%12 != 1) echo "</div>";
	?>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
  </div>
  <!-- /.content-wrapper -->
<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">ROLL ENTRY</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<div class="modal-body">
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Roll No.</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="roll_no" id="roll_no" placeholder="Roll#">
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Loom Type</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="aloom_type" id="aloom_type">
								<option value="TPM">TPM</option>
								<option value="NON TPM">NON TPM</option>
							</select>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Loom No</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="aloom_no" id="aloom_no">
								<option value="">-- Select --</option>
							</select>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Short No</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="style_no" id="style_no">
									 <option value="">-- Select --</option>
									  <?php foreach($getDesign as $row)
									  {

										echo'<option value='.$row->design_code.'>'.$row->design_code.'</option>';
									  }
									  ?>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">EPI X PPI</label>
						<div class="col-sm-10">
						  <input type="text" name="fabric_gsm" id="fabric_gsm" class="form-control" placeholder="EPI X PPI">
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Fabric Width</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="fabric_width" id="fabric_width" placeholder="Fabric Width">
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Inspector</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="inspector" id="inspector">
									  <option value="">-- Select --</option>
									  <?php foreach($getInspector as $row)
									  {

										echo'<option value='.$row->employee_code.'>'.$row->employee_name.' ('.$row->employee_code.')</option>';
									  }
									  ?>
								</select>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Weaver ID</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="viewer_id" id="viewer_id">
									<option value="">-- Select --</option>
									  <?php foreach($getWeaver as $row)
									  {

										echo'<option value='.$row->employee_code.'>'.$row->employee_name.' ('.$row->employee_code.')</option>';
									  }
									  ?>
								</select>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Side</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="side" id="side" required>
								<option value="">-- Select --</option>
								<option value='pside'>P Side</option>
								<option value='rside'>R Side</option>
							</select>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Beam No.</label>
						<div class="col-sm-10">
						  <input type="text" class="form-control" name="beam_no" id="beam_no" placeholder="Beam#">
						</div>
				</div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<div class="modal fade" id="modal-update">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">ROLL UPDATE</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<div class="modal-body">
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Loom Type</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="h_loom_type" id="h_loom_type">
								<option value="TPM">TPM</option>
								<option value="NON TPM">NON TPM</option>
							</select>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Loom No</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="h_loom_no" id="h_loom_no">
								<option value="">-- Select --</option>
							</select>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Inspector</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="inspector" id="inspector">
									  <option value="">-- Select --</option>
									  <?php foreach($getInspector as $row)
									  {

										echo'<option value='.$row->employee_code.'>'.$row->employee_name.' ('.$row->employee_code.')</option>';
									  }
									  ?>
								</select>
						</div>
				</div>
				<div class="form-group row">
						<label for="inputEmail3" class="col-sm-2 col-form-label">Weaver ID</label>
						<div class="col-sm-10">
						  	<select class="form-control" name="viewer_id" id="viewer_id">
									<option value="">-- Select --</option>
									  <?php foreach($getWeaver as $row)
									  {

										echo'<option value='.$row->employee_code.'>'.$row->employee_name.' ('.$row->employee_code.')</option>';
									  }
									  ?>
								</select>
						</div>
				</div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" id="change_data">Update</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<script>
$(document).ready(function(){
	var faulttype='0';
	var faultcode='0';
	var faultdepth='0';
	var rollno='0';
	
	 $("#leftcontent").hide();
    $("#roll_details_hide").click(function(){
    	$("#leftcontent").toggle();
    });
	
	$(".ajin").click(function(){
		faultcode=$(this).text();
		radbut=$('input[name=radio]:checked').val();
		//alert(radbut);
		savefault();
		//alert(faultcode); 
	});
	
	/////////////////////////START////////////////////////
	
	$("#start").click(function()
	{
		var roll_no = $("#roll_no").val();
		var buyer_order_no = 0;
		var invoice_no = 0;
		var lot_no = 0;
		var color = 0;
		var style_no = $("#style_no").val();
		var loom_type = $("#loom_type").val();
		var loom_no = $("#loom_no").val();
		var viewer_id = $("#viewer_id").val();
		var side = $("#side").val();
		var inspector = $("#inspector").val();
		var fabric_gsm = $("#fabric_gsm").val();
		var fabric_width = $("#fabric_width").val();
		var fabric_id = 0;
		var beam_no = $("#beam_no").val();
		var siz = 50;
		var orientation = 'horizontal';
		var codetype = 'Code128';
		if(roll_no == "")
		{
			alert("Please Enter the Roll No...");
			return false;
		}
		if(style_no == "")
		{
			alert("Please Enter the Style No...");
			return false;
		}
		
		if(loom_type == "")
		{
			alert("Please Select the Loom Type...");
			return false;
		}
		
		if(loom_no == "")
		{
			alert("Please Select the Loom No...");
			return false;
		}
		
		if(fabric_width == "")
		{
			alert("Please Enter the Loom No...");
			return false;
		}
		
		if(fabric_gsm == "")
		{
			alert("Please Enter the Loom No...");
			return false;
		}
		
		if(inspector == "")
		{
			alert("Please Select the Inspector...");
			return false;
		}
		
		if(viewer_id == "")
		{
			alert("Please Select the Viewer Id...");
			return false;
		}
		if(side == "")
		{
			alert("Please Select the Side...");
			return false;
		}
		
		if(beam_no == "")
		{
			alert("Please Select the Beam No...");
			return false;
		}
		
		$("input[type=text]").css('background','yellow');
		$("select").css('background','yellow');
		
		$("#h_roll_no").val($("#roll_no").val());
		$("#h_loom_type").val($("#loom_type").val());
		$("#h_loom_no").val($("#loom_no").val());
		$("#h_viewer_id").val($("#viewer_id").val());
		$("#h_inspector").val($("#inspector").val());
		jQuery.post('savedata.php', 
       	{ 
           	'roll_no' : roll_no,
			'buyer_order_no' : buyer_order_no,
			'invoice_no' : invoice_no,
			'lot_no' : lot_no,
			'color' : color,
			'style_no' : style_no,
			'loom_type' : loom_type,
			'loom_no' : loom_no,
			'fabric_width' : fabric_width,
			'fabric_gsm' : fabric_gsm,
			'viewer_id' : viewer_id,
			'side' : side,
			'inspector' : inspector,
			'fabric_id' : fabric_id,
			'beam_no' : beam_no,
           	'size':siz,
           	'orientation':orientation,
           	'codetype':codetype
       	},
    	function(data)
       	{
       		alert(data);
       		return false;
       	});
		
	});
	
	//////////////////////////////////SAVE FAULT
	
	function savefault(){
		
		rollno = $("#roll_no").val();
		if(rollno==""){
			alert("No Roll");
		}else{
			
			jQuery.post('savefault.php', 
       		{ 
      	     	'roll_no' : rollno,
				'faulttype' : faulttype,
				'faultcode' : faultcode,
				'faultdepth' : faultdepth,
				'radbut' : radbut
    	   	},
   		 	function(data)
    	   	{
   	        	faulttype=0;
				faultcode=0;
				faultdepth=0;
   	    	});
       	
       	}
		
	}
	
	////////////////RESET/////////////////
	
	$("#reset").click(function(){
    	rollno = $("#roll_no").val();
    	if(rollno=='')
		{
			alert("NO Roll no is entered");
		}else{
	    	jQuery.post('resetmeter.php',
	    	{
				"roll_no":rollno
			},
		 	function(data)
	   		{
	   			alert(data);
	    		return false
	    	});
    	}
    });
	
	//////////////////UPDATE DATA//////////////////////
	
	 $("#change_data").click(function(){
    	var roll_no = $("#h_roll_no").val();
    	var loom_type = $("#h_loom_type").val();
    	var loom_no = $("#h_loom_no").val();
    	var inspector = $("#h_inspector").val();
    	var viewer_id = $("#h_viewer_id").val();
    	
    	if(roll_no=='')
		{
			alert("NO Roll no is entered");
		}else{
    	
	    	jQuery.post('savechange.php', 
	       	{ 
      	     	'roll_no' : roll_no,
				'loom_type' : loom_type,
				'loom_no' : loom_no,
				'inspector' : inspector,
				'viewer_id' : viewer_id
    	   	},
   		 	function(data)
    	   	{
    	   		alert(data);
   	    		getalldata();
   	    	});
   	    }
    });
	
	/////////////////////////////////////////////////////
	
	getalldata();
	
	$("#testResizableArray").sevenSegArray({ digits: 7 });
    var iArrayValue = 0;
    $("#testResizableArray").sevenSegArray({ value: iArrayValue });
	setInterval(function()
    {
        getmeterdetail();
    },500);
	function getalldata()
	{
		var loom_type=$("#loom_type").val();
    	
    	$.ajax({
        	   type: "POST",
               url: "<?php echo base_url('admin'); ?>/getdata/<?php echo $getMachineID; ?>", 
			   success: function(data)
               {
                    data = JSON.parse(data);
                    $("#roll_no").val(data.roll_no);
					$("#grn_no").val(data.grn_no);
					$("#buyer_order_no").val(data.buyer_order_no);
					$("#supplier").val(data.supplier);
					$("#invoice_no").val(data.invoice_no);
					$("#lot_no").val(data.lot_no);
					$("#color").val(data.color);
					$("#style_no").val(data.style_no);
					$("#fabric_desc").val(data.fabric_desc);
					$("#fabric_len").val(data.fabric_len);
					$("#loom_no").html(data.loom_no_for_loom_type);
					$("#h_loom_no").html(data.loom_no_for_loom_type);
					$("#loom_type").val(data.loom_type);
					$("#loom_no").val(data.loom_no);
					$("#viewer_id").val(data.viewer_id);
					$("#inspector").val(data.inspector);
					$("#fabric_id").val(data.fabric_id);
					$("#fabric_gsm").val(data.fabric_gsm);
					$("#fabric_width").val(data.fabric_width);
					$("#h_loom_no").val(data.loom_no);
					$("#h_viewer_id").val(data.viewer_id);
					$("#h_inspector").val(data.inspector);
					$("#h_loom_type").val(data.loom_type);
					$("#beam_no").val(data.beam_no);
                }
        }); 
    }
	function getmeterdetail(){
	$("#h_roll_no").val($("#roll_no").val());
	$.ajax({
        	   type: "POST",
               url: "<?php echo base_url('admin'); ?>/getdata/<?php echo $getMachineID; ?>",
               success: function(data)
               {
                    data = JSON.parse(data);
                                               
                    var meter = data.meter;
                    var count = data.count;
                    $("#h_defects").val(data.f_count);
                    
                    if(count>0){
						
                    	$("#testResizableArray").sevenSegArray({ digits: 7 });
    					var iArrayValue = meter;
    					$("#testResizableArray").sevenSegArray({ value: iArrayValue });
    					
    				}else{
						
						$("#testResizableArray").sevenSegArray({ digits: 7 });
    					var iArrayValue = 0;
    					$("#testResizableArray").sevenSegArray({ value: iArrayValue });
						
					}
					
                }
        }); 
        
    }
	$("#leftcontent").hide();
    $("#roll_details_hide").click(function(){
    	$("#leftcontent").toggle();
    });
    
   
    
    
    
    $("#aloom_type").change(function(){
    	var loom_type=$("#aloom_type").val();
    	jQuery.post('<?php echo base_url('admin'); ?>/GetLoomNo_FromLoomType',
    	{
			"loom_type":loom_type
		},
	 	function(data)
   		{
   			data = JSON.parse(data);
   			$("#aloom_no").html(data);
   			$("#h_loom_no").html(data);
    	});
    });
    
    $("#h_loom_type").change(function(){
    	var loom_type=$("#h_loom_type").val();
    	jQuery.post('<?php echo base_url('admin'); ?>/GetLoomNo_FromLoomType',
    	{
			"loom_type":loom_type
		},
	 	function(data)
   		{
   			data = JSON.parse(data);
   			$("#h_loom_no").html(data);
    	});
    });
	$("#style_no").change(function()
	{
		var design_code=$(this).val();
			jQuery.post('<?php echo base_url('admin'); ?>/design_details',
    	{
			"design_code":design_code
		},
	 	function(data)
   		{
   			data = JSON.parse(data);
			var update_data=data.datas;
			if(data.status=="success")
			{
				$("#fabric_gsm").val(update_data.ends_per_inch+"/"+update_data.picks_per_inch);
				$("#fabric_width").val(update_data.fabric_width_1);
			}
			
    	});
		
	});
   
});
</script>
