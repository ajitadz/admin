<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sub Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sub Category</li>
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
                <h3 class="card-title">Sub Category List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sub Category Name</th>
					<th>Product Count</th>
					<th>Added Date</th>
                    <th width="10%">Status</th>
					<th width="5%">---</th>
					<th width="5%">---</th>
					
                  </tr>
                  </thead>
                  <tbody>
				 <?php foreach($subcat_list as $row)
						{
					?>		<tr>
							<td><?php echo $row->childcategory ?></td>
					  		<td><?php echo $row->pcount ?></td>
							<td><?php echo $row->sdate ?></td>
					  		<td class="project-state"><?php if($row->status=='1') { echo '<span class="badge badge-success">Active</span>'; } else { echo '<span class="badge badge-danger">Inactive</span>'; } ?></td>
							<td><a class="btn btn-block bg-gradient-info btn-xs"><i class="fas fa-edit"></i></a></td>
					  		<td><?php if($row->status=='1') { echo '<a class="btn btn-block bg-gradient-danger btn-xs"><i class="fas fa-trash"></i></a>'; } else { echo '<a class="btn btn-block bg-gradient-success btn-xs"><i class="fas fa-check"></i></a>'; } ?></td>
					  		</tr>
					  <?php
						}
					  	?>			 
					
                  
                  </tbody>
                  <tfoot>
                  <tr>
					<th>Sub Category Name</th>
					<th>Product Count</th>
					<th>Added Date</th>
                    <th>Status</th>
					<th width="5%">---</th>
					<th width="5%">---</th>
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