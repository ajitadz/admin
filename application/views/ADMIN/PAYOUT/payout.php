<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payout Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payout Details</li>
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
                <h3 class="card-title">Payout Details</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Date</th>
					<th>Name</th>
					<th>Username</th>
                    <th>Gross Amount</th>
                    <th>Deduction</th>
					<th>Net Amount</th>
                    
                  </tr>
                  </thead>
                  <tbody>
					  <?php 
					  foreach($payout as $row)
								{
					   ?>
					  				<tr>
										<td><?php echo $row->D_FROM; ?></td>
										<td><?php echo $row->C_FNAME; ?></td>
										<td><?php echo $row->c_username; ?></td>
										<td><?php echo $row->n_gross_amt; ?></td>
										<td><?php echo $row->N_DEDUCTION_AMT; ?></td>
										<td><?php echo $row->N_NET_PAYABLE; ?></td>
									</tr>

					<?php
								}
					  ?>
					
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Date</th>
					<th>Name</th>
					<th>Username</th>
                    <th>Gross Amount</th>
                    <th>Deduction</th>
					<th>Net Amount</th>
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