<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>SMS Config</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">SMS Config</li>
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
                <h3 class="card-title">SMS Details</h3>
				  <button type="button" style="width:100px; float: right;" onclick="location.href='sms_add'" class="btn btn-block bg-gradient-success">ADD</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th width="8%">Status</th>
                    <th width="8%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
					    <?php foreach($report as $row)
							{
						?>
					  		<tr>
							<td><?php echo $row->name; ?></td>
							<td><?php echo $row->number; ?></td>
							<td><?php if($row->status=='1'){echo'<span class="btn btn-block bg-gradient-success btn-xs" style="width:100%;">Active</span>';}else{echo'<span class="btn btn-block bg-gradient-danger btn-xs" style="width:100%;">Inactive</span>';}; ?></td>
							<td><a href="sms_del/<?php echo $row->id ?>" class="btn btn-block bg-gradient-danger btn-xs" style="width: 100%;float: right"><i class="fas fa-trash"></i></a></td>
						  </tr>
						<?php
							}
					  	?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Status</th>
                    <th>Action</th>
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
<!--<script>
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
</script>-->