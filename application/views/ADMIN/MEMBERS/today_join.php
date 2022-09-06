<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Members</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Members</li>
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
                <h3 class="card-title">Today Join List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>INT ID</th>
                    <th>USERNAME</th>
					<th>NAME</th>
                    <th>STATE</th>
					<th>EMAIL</th>
					<th>REG ON</th>
					<th>MOBILE</th>
					<th>KYC</th>
					<th>STATUS</th>
					<th></th>
					<th></th>
					
					
                  </tr>
                  </thead>
                  <tbody>
					  <?php 
					  	$sl=0;
					  foreach($users as $row)
								{
					   ?>
					  				<tr>
										<td><?php echo $row->pn_id; ?></td>
										<td><?php echo $row->c_username; ?></td>
										<td><?php echo $row->C_FNAME; ?></td>
										<td><?php echo $row->C_STATE; ?></td>
										<td><?php echo $row->C_EMAIL; ?></td>
										<td><?php echo $row->D_JOIN_TIME; ?></td>
										<td><?php echo $row->C_MOBILE; ?></td>
										<td><?php echo $row->C_APPROVE; ?></td>
										<td class="project-state"><?php if($row->user_status=='1') { echo '<span class="badge badge-success">Active</span>'; } else { echo '<span class="badge badge-danger">Inactive</span>'; } ?></td>
										<td><a class="btn btn-block bg-gradient-info btn-xs"><i class="fas fa-eye"></i></a></td>
										<td><a class="btn btn-block bg-gradient-danger btn-xs"><i class="fas fa-trash"></i></a></td>
									</tr>

					<?php
								}
					  ?>
					
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>INT ID</th>
                    <th>USERNAME</th>
					<th>NAME</th>
                    <th>STATE</th>
					<th>EMAIL</th>
					<th>REG ON</th>
					<th>MOBILE</th>
					<th>KYC</th>
					<th>STATUS</th>
					<th></th>
					<th></th>
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