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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
			  <!-- card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">production Report</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>SlNo</th>
                    <th>Date Time</th>
                    <th>Valve Size</th>
                    <th>Pressure Rate</th>
                    <th>HT No</th>
					<th>Report No</th>
					<th>Valve Type</th>
					<th>Cum Cycle</th>
					<th>Flow Meter(IN)</th>
					<th>Flow Meter(OUT)</th>
					<th>Pressure (IN)</th>
					<th>Pressure (OUT)</th>
					<th>Close Dowel Time</th>
					<th>Open Dowel Time</th>
					<th>Close Time</th>
					<th>Open Time</th>
					<th>Temp 1</th>
					<th>Temp 2</th>
					<th>Temp 3</th>
					<th>sv1_1</th>
					<th>sv2_1</th>
					<th>heater_1</th>
					<th>cycle_time_1</th>
					<th>air_flowmeter_in_act_1</th>
					<th>water_flowmeter_in_set_1</th>
					<th>pressure_in_set_1</th>
					<th>pressure_out_set_1</th>
					<th>water_flowmeter_out_set_1</th>
					<th>air_flowmeter_set_1</th>
					<th>validation_pressure_set_1</th>
					<th>temp_1_set_1</th>
					<th>temp_2_set_1</th>
					<th>temp_3_set_1</th>
                  </tr>
                  </thead>
                  <tbody>
					    <?php foreach($report as $row)
							{
						?>
					  		<tr>
							<td><?php echo $row->s_no_1; ?></td>
							<td><?php echo $row->date_time; ?><!--Date Time--></td>
							<td><?php echo $row->valve_Size_1; ?><!--Valve Size--></td>
							<td><?php echo $row->prssure_Rate_1; ?><!--Pressure Rate--></td>
							<td><?php echo $row->ht_no_1; ?><!--HT No--></td>
							<td><?php echo $row->report_no_1; ?><!--Report No--></td>
							<td><?php echo $row->valve_type_1; ?><!--Valve Type--></td>
							<td><?php echo $row->cum_cycle_1; ?><!--Cum Cycle--></td>
							<td><?php echo $row->flow_meter_in_1; ?><!--Flow Meter(IN)--></td>
							<td><?php echo $row->flow_meter_out_1; ?><!--Flow Meter(OUT)--></td>
							<td><?php echo $row->pressure_in_1; ?><!--Pressure (IN)--></td>
							<td><?php echo $row->pressure_out_1; ?><!--Pressure (OUT)--></td>
							<td><?php echo $row->close_dowel_time_1; ?><!--Close Dowel Time--></td>
							<td><?php echo $row->open_dowel_time_1; ?><!--Open Dowel Time--></td>
							<td><?php echo $row->close_time_1; ?><!--Close Time--></td>
							<td><?php echo $row->open_time_1; ?><!--Open Time--></td>
							<td><?php echo $row->temp1_1; ?><!--Temp 1--></td>
							<td><?php echo $row->temp2_1; ?><!--Temp 2--></td>
							<td><?php echo $row->temp3_1; ?><!--Temp 3--></td>
							<td><?php echo $row->sv1_1; ?><!--sv1_1--></td>
							<td><?php echo $row->sv2_1; ?><!--sv2_1--></td>
							<td><?php echo $row->heater_1; ?><!--heater_1--></td>
							<td><?php echo $row->cycle_time_1; ?><!--cycle_time_1--></td>
							<td><?php echo $row->air_flowmeter_in_act_1; ?><!--air_flowmeter_in_act_1--></td>
							<td><?php echo $row->water_flowmeter_in_set_1; ?><!--water_flowmeter_in_set_1--></td>
							<td><?php echo $row->pressure_in_set_1; ?><!--pressure_in_set_1--></td>
							<td><?php echo $row->pressure_out_set_1; ?><!--pressure_out_set_1--></td>
							<td><?php echo $row->water_flowmeter_out_set_1; ?><!--water_flowmeter_out_set_1--></td>
							<td><?php echo $row->air_flowmeter_set_1; ?><!--air_flowmeter_set_1--></td>
							<td><?php echo $row->validation_pressure_set_1; ?><!--validation_pressure_set_1--></td>
							<td><?php echo $row->temp_1_set_1; ?><!--temp_1_set_1--></td>
							<td><?php echo $row->temp_2_set_1; ?><!--temp_2_set_1--></td>
							<td><?php echo $row->temp_3_set_1; ?><!--temp_3_set_1--></td>
						  </tr>
						<?php
							}
					  	?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SlNo</th>
                    <th>Date Time</th>
                    <th>Valve Size</th>
                    <th>Pressure Rate</th>
                    <th>HT No</th>
					<th>Report No</th>
					<th>Valve Type</th>
					<th>Cum Cycle</th>
					<th>Flow Meter(IN)</th>
					<th>Flow Meter(OUT)</th>
					<th>Pressure (IN)</th>
					<th>Pressure (OUT)</th>
					<th>Close Dowel Time</th>
					<th>Open Dowel Time</th>
					<th>Close Time</th>
					<th>Open Time</th>
					<th>Temp 1</th>
					<th>Temp 2</th>
					<th>Temp 3</th>
					<th>sv1_1</th>
					<th>sv2_1</th>
					<th>heater_1</th>
					<th>cycle_time_1</th>
					<th>air_flowmeter_in_act_1</th>
					<th>water_flowmeter_in_set_1</th>
					<th>pressure_in_set_1</th>
					<th>pressure_out_set_1</th>
					<th>water_flowmeter_out_set_1</th>
					<th>air_flowmeter_set_1</th>
					<th>validation_pressure_set_1</th>
					<th>temp_1_set_1</th>
					<th>temp_2_set_1</th>
					<th>temp_3_set_1</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>