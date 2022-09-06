<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tickets</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tickets</li>
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
                <h3 class="card-title">Tickets List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    					<th> # </th>
										<th> Customer ID </th>
										<th> Customer Name </th>
										<th> Subject </th>
										<th> Department </th>
										<th > Description </th>
										<th class="text-center"> Ticket Date </th>
										<th class="text-center"> Status </th>
										<th> </th>
					
                  </tr>
                  </thead>
                  <tbody>
				 <?php
									foreach ( $tickets as $row ) {
										?>
									<tr>
										<td><?php echo $row->id; ?></td>
										<td><?php echo $row->c_username; ?></td>
										<td><?php echo $row->C_FNAME; ?></td>
										<td><?php echo $row->subject; ?></td>
										<td><?php echo $row->department; ?></td>
										<td><?php echo substr($row->description,0,80) ?>...</td>
										<td><?php echo $row->t_date_time; ?></td>
										<td><span class="badge badge-danger"><?php echo $row->status; ?></span></td>
										<td class="project-actions text-right"><a class="btn btn-primary btn-sm" href="<?php echo base_url('tickets'); ?>/view/<?php echo $row->id; ?>"> <i class="fas fa-eye"> </i> View </a></td>
									</tr>
									<?php
									}
									?>		 
					
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th> # </th>
										<th> Customer ID </th>
										<th> Customer Name </th>
										<th> Subject </th>
										<th> Department </th>
										<th > Description </th>
										<th class="text-center"> Ticket Date </th>
										<th class="text-center"> Status </th>
										<th> </th>
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
