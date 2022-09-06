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
                <h3 class="card-title">Products List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Product Name</th>
					<th>Product Desc</th>
                    <th>Pur Price</th>
                    <th>Sell Price</th>
                    <th>MRP</th>
					<th>GST</th>
                    <th>BV</th>
					<th>Stock</th>
					<th>Category</th>
					<th>Added On</th>
					<th>Status</th>
					<th width="5%">---</th>
					<th width="5%">---</th>
					
                  </tr>
                  </thead>
                  <tbody>
				 <?php foreach($products as $row)
						{
					?>		<tr>
							<td><?php echo $row->productname; ?></td>
					  		<td><?php echo $row->productdesc; ?></td>
							<td><?php echo $row->landingcost; ?></td>
							<td><?php echo $row->sellingprice; ?></td>
							<td><?php echo $row->mrp; ?></td>
					  		<td><?php echo $row->tax; ?></td>
							<td><?php echo $row->pv; ?></td>
					  		<td><?php echo $row->mstock; ?></td>
							<td><?php echo $row->master_cat.'->'.$row->child_cat.'->'.$row->sub_cat; ?></td>
							<td><?php echo $row->mdate; ?></td>
					  		<td class="project-state"><?php if($row->status=='1') { echo '<span class="badge badge-success">Active</span>'; } else { echo '<span class="badge badge-danger">Inactive</span>'; } ?></td>
							<td><a class="btn btn-block bg-gradient-info btn-xs"><i class="fas fa-edit"></i></a></td>
					  		<td><?php if($row->status=='1') { echo '<a class="btn btn-block bg-gradient-danger btn-xs"><i class="fas fa-trash"></i></a>'; } else { echo '<a class="btn btn-block bg-gradient-success btn-xs"><i class="fas fa-check"></i></a>'; } ?></td>					  		</tr>
					  <?php
						}
					  	?>			 
					
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Product Name</th>
					<th>Product Desc</th>
                    <th>Pur Price</th>
                    <th>Sell Price</th>
                    <th>MRP</th>
					<th>GST</th>
                    <th>BV</th>
					<th>Stock</th>
					<th>Category</th>
					<th>Added On</th>
					<th>Status</th>
					<th>---</th>
					<th>---</th>
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