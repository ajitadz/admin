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
					<th>SL NO</th>
					<th>NAME</th>
                    <th>USERNAME</th>
                    <th>AMOUNT</th>
					
                  </tr>
                  </thead>
                  <tbody>
					  <?php 
					  	$sl=0;
					  foreach($user_wallet_details as $row)
								{
						  	$sl=$sl+1;
					   ?>
					  				<tr>
										<td><?php echo $sl; ?></td>
										<td><?php echo $row->C_FNAME; ?></td>
										<td><?php echo $row->c_username; ?></td>
										<td><?php echo $row->n_amount; ?></td>
									</tr>

					<?php
								}
					  ?>
					
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>SL NO</th>
					<th>NAME</th>
                    <th>USERNAME</th>
                    <th>AMOUNT</th>
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