<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Shopping Wallet</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Shopping Wallet</li>
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
                <h3 class="card-title">Wallet Topup Requests</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>UNIQUE ID</th>
                    <th>Date</th>
					<th>NAME</th>
					<th>USERNAME</th>
                    <th>AMOUNT</th>
                    <th>BANK NAME</th>
					<th>TRANSFER TYPE</th>
                    <th>METHOD</th>
					<th>BANK TXN ID</th>
					<th>ACTION DATE</th>
					<th>STATUS</th>
					
                  </tr>
                  </thead>
                  <tbody>
					  <?php foreach($shopping_wallet_topup_req as $row)
								{
					   ?>
					  				<tr>
										<td><?php echo base64_encode($row->sl_no); ?></td>
										<td><?php echo $row->date; ?></td>
										<td><?php echo $row->C_FNAME; ?></td>
										<td><?php echo $row->c_username; ?></td>
										<td><?php echo $row->amount; ?></td>
										<td><?php echo $row->bank_name; ?></td>
										<td><?php echo $row->transfer_type; ?></td>
										<td><?php echo $row->online_transfer_type; ?></td>
										<td><?php if($row->transaction_id!='0'){ echo $row->transaction_id; } if($row->cheque_no!='0') {echo $row->cheque_no;} ?></td>
										<td><?php echo $row->transaction_date; ?></td>
										<td align="center" class="project-state"><?php
										if($row->status=='1'){
						   				echo'<span class="badge badge-success">Approved</span>';
					   					}
										if($row->status=='2'){
						   				echo'<span class="badge badge-danger">Rejected</span>';
					   					}	
						   					
						   				?>
             							</td>
									</tr>

					<?php
								}
					  ?>
					
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>UNIQUE ID</th>
                    <th>Date</th>
					<th>NAME</th>
                    <th>USERNAME</th>
                    <th>AMOUNT</th>
                    <th>BANK NAME</th>
					<th>TRANSFER TYPE</th>
                    <th>METHOD</th>
					<th>BANK TXN ID</th>
					<th>ACTION DATE</th>
					<th>STATUS</th>
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