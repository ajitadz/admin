<div class="content-wrapper" style="min-height: 1665.19px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		  <!-- form start -->
		  <form>
			<div class="row">
				  <!-- left column -->
				  <div class="col-md-6">
					<!-- general form elements -->
					<div class="card card-secondary">
					  <div class="card-header">
						<h3 class="card-title">Product Details</h3>
					  </div>
					  <!-- /.card-header -->

						<div class="card-body">
						   <div class="form-group">
							<label for="exampleInputEmail1">Product Type</label>
							<select class="form-control">
							  <option>Select</option>
							  <option>Single</option>
							  <option>Combo</option>
							  </select>
						  </div>
						  <div class="form-group">
							<label for="prod_name">Product Name</label>
							<input type="text" class="form-control" id="prod_name" placeholder="Product Name">
						  </div>
						  <div class="form-group">
							<label for="hsn">Product HSN Code</label>
							<input type="text" class="form-control" id="hsn" placeholder="HSN code">
						  </div>
						  <div class="form-group">
							<label for="prod_desc">Product Description</label>
							<textarea class="form-control" id="prod_desc" placeholder="Product Description"> </textarea>
						  </div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

					<!-- general form elements -->
					<div class="card card-secondary">
					  <div class="card-header">
						<h3 class="card-title">Category Details</h3>
					  </div>
					  <!-- /.card-header -->
					  <!-- form start -->
						<div class="card-body">
						  <div class="form-group">
							<label for="exampleInputEmail1">Parent Category</label>
							 <select id="mastercategory" class="form-control">
							  <option>Select</option>
							  <?php
								foreach($maincat as $row)
								{
									echo'<option value="'.$row->cid.'">'.$row->category.'</option>'; 
								}
							   ?>
							  </select>
						  </div>
						  <div class="form-group">
							<label for="exampleInputPassword1">Category</label>
							<select id="category" class="form-control">
							  <option>Select</option>
							  </select>
						  </div>
						  <div class="form-group">
							<label for="exampleInputFile">Sub Category</label>
							<select id="subcategory" class="form-control">
							  <option>Select</option>
							  </select>
						  </div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				  </div>
				  <!--/.col (left) -->
				  <!-- right column -->
				  <div class="col-md-6">
					<!-- general form elements -->
					<div class="card card-secondary">
					  <div class="card-header">
						<h3 class="card-title">Price Details</h3>
					  </div>
					  <!-- /.card-header -->
					  <!-- form start -->
						<div class="card-body">
						  <div class="form-group">
							<label for="landing_price">Landing Cost</label>
							<input type="text" class="form-control" id="landing_price" placeholder="Landing Price">
						  </div>
						  <div class="form-group">
							<label for="selling_price">Selling Price</label>
							<input type="text" class="form-control" id="selling_price" placeholder="Selling Price">
						  </div>
						  <div class="form-group">
							<label for="mrp">MRP Price</label>
							<input type="text" class="form-control" id="mrp" placeholder="Maximum Retail Price">
						  </div>
						 <div class="form-group">
							<label for="bv">BV</label>
							<input type="text" class="form-control" id="bv" placeholder="BV">
						  </div>
						<div class="form-group">
							<label for="tax">TAX</label>
							<input type="text" class="form-control" id="tax" placeholder="Tax">
						 </div>
						 
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->

					<!-- general form elements -->
					<div class="card card-secondary">
					  <div class="card-header">
						<h3 class="card-title">Extra Details</h3>
					  </div>
					  <!-- /.card-header -->
					  <!-- form start -->
						<div class="card-body">
					      <div class="form-group">
							<label for="exampleInputPassword1">Stock Details (Single)</label>
							<input type="number" class="form-control" placeholder="Stock">
						  </div>
						  <div class="form-group">
							<label for="exampleInputFile">Product Image</label>
							<div class="input-group">
							  <div class="custom-file">
								<input type="file" class="custom-file-input" id="exampleInputFile">
								<label class="custom-file-label" for="exampleInputFile">Choose file</label>
							  </div>
							  <div class="input-group-append">
								<span class="input-group-text">Upload</span>
							  </div>
							</div>
						</div>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				  </div>

			  <!--/.col (right) -->
			</div>
		<!-- form end -->
		</form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script>
	$('.hide').hide();


	jQuery(document).ready(function() {
		$("#mastercategory").change(function() {
			var cid = $(this).val();
			$.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>get_brand',
				data: {
					selectcat: cid,
					'isAjax': true
				},
				dataType: 'json',
				success: function(data) {
					if (data) {
						var select = $("#category"),
							options = '';
						select.empty();
						options += "<option value=''>Select category</option>";
						for (var i = 0; i < data.length; i++) {
							options += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
						}
						select.append(options);
					}
				}
			});
		});


		$("#category").change(function() {
			var cid = $(this).val();
			$.ajax({
				type: "POST",
				url: '<?php echo base_url(); ?>get_subcategory',
				data: {
					selectcat: cid,
					'isAjax': true
				},
				dataType: 'json',
				success: function(data) {
					if (data) {
						var select = $("#subcategory"),
							options = '';
						select.empty();
						options += "<option value=''>Select subcategory</option>";
						for (var i = 0; i < data.length; i++) {
							options += "<option value='" + data[i].id + "'>" + data[i].name + "</option>";
						}
						select.append(options);
					}
				}
			});
		});

	});
</script>