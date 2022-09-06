<div class="content-wrapper" style="min-height: 1665.19px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Add Sub Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
				  <div class="form-group">
                        <label>Choose Main Category</label>
                        <select name="main_cat" class="form-control">
							<option>--SELECT--</option>
                          <?php foreach($mastercat_list as $row)
								{
									echo '<option value="'.$row->cid.'">'.$row->category.'</option>';
								}
							?>
                        </select>
                      </div>
					<div class="form-group">
                        <label>Choose Child Category</label>
                        <select name="childcategory" class="form-control">
							<option>--SELECT--</option>
                          <?php foreach($childcat_list as $row1)
								{
									echo '<option value="'.$row1->sid.'">'.$row1->scategory.'</option>';
								}
							?>
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sub Category Name</label>
                    <input type="text" class="form-control" name="subcategory" id="exampleInputEmail1" placeholder="Child Category Name" required>
                  </div>
                </div>
				  <?php if($this->session->flashdata('success'))
					{
					?>
						<div class="alert alert-success alert-dismissible">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						  <?php echo $this->session->flashdata('success'); ?>
						</div>
					<?php
					}
				  	if($this->session->flashdata('error'))
					{
					?>
						<div class="alert alert-danger alert-dismissible">
						  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						  <?php echo $this->session->flashdata('error'); ?>
						</div>
				  <?php
					}
				  ?>
				
				<div class="card-footer">
                  <input type="submit" value="Add" name="submit" class="btn btn-primary">
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>