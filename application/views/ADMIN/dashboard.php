<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Dashboard</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Dashboard</li>
				</ol>
			</div>
			<!-- /.col --> 
		</div>
		<!-- /.row --> 
	</div>
	<!-- /.container-fluid --> 
</div>
<!-- /.content-header --> 

<!-- Main content -->
<section class="content">
	<div class="container-fluid"> 
		<!-- Info boxes -->
		<div class="row">
			<div class="col-lg-6 col-12"> 
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3 id="total_members">0</h3>
						<p>Total Members</p>
					</div>
					<div class="icon"> <i class="ion-android-people"></i> </div>
					<a href="<?php echo base_url('members'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
			<div class="col-lg-6 col-12"> 
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3 id="total_sales">0</h3>
						<p>Total Sales</p>
					</div>
					<div class="icon"> <i class="ion ion-bag"></i> </div>
					<a href="<?php echo base_url('members'); ?>/total_sales" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-12"> 
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3 id="total_wallet">0</h3>
						<p>Pending Payouts Amount</p>
					</div>
					<div class="icon"> <i class="ion ion-cash"></i> </div>
					<a href="<?php echo base_url('swallet'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
			<div class="col-lg-3 col-12"> 
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3 id="total_swallet">0</h3>
						<p>Shopping Wallet Amount</p>
					</div>
					<div class="icon"> <i class="ion ion-cash"></i> </div>
					<a href="<?php echo base_url('shopwallet'); ?>/wallet_amount" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
			<div class="col-lg-3 col-12"> 
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3 id="total_tds">0</h3>
						<p>TDS Amount</p>
					</div>
					<div class="icon"> <i class="ion ion-cash"></i> </div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
			<div class="col-lg-3 col-12"> 
				<!-- small box -->
				<div class="small-box bg-danger">
					<div class="inner">
						<h3 id="bbm">0</h3>
						<p>Bank Balance To Be Maintain</p>
					</div>
					<div class="icon"> <i class="ion ion-android-home"></i> </div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
		</div>
		<div class="row">
			
				<div class="col-12 col-sm-6 col-md-3">
					<div class="info-box">
						 <span class="info-box-icon bg-info elevation-1"><a href="<?php echo base_url('members'); ?>/today_join"><i class="fas fa-users"></i></a></span>
						<div class="info-box-content"> <span class="info-box-text">Today Members</span> <span class="info-box-number" id="new_members"> 0 </span> </div>

						<!-- /.info-box-content --> 
					</div>
				<!-- /.info-box --> 
				</div>
			<!-- /.col -->
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3"> <span class="info-box-icon bg-danger elevation-1"><a href="<?php echo base_url('members'); ?>/today_sales"><i class="fas fa-shopping-cart"></i></a></span>
					<div class="info-box-content"> <span class="info-box-text">Today Sales</span> <span class="info-box-number" id="today_sales">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
			<!-- /.col --> 
			
			<!-- fix for small devices only -->
			<div class="clearfix hidden-md-up"></div>
			
			<!-- /.col -->
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3"> <span class="info-box-icon bg-warning elevation-1"><a href="<?php echo base_url('members'); ?>/today_act"><i class="fas fa-users"></i></a></span>
					<div class="info-box-content"> <span class="info-box-text">Today Activated Members</span> <span class="info-box-number" id="today_members">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
			<!-- /.col -->
			
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3"> <span class="info-box-icon bg-success elevation-1"><a href="<?php echo base_url('members'); ?>/today_act"><i class="fas fa-shopping-cart"></i></a></span>
					<div class="info-box-content"> <span class="info-box-text">Today Activation</span> <span class="info-box-number" id="today_activations">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box"> <span class="info-box-icon bg-info elevation-1"><a href="<?php echo base_url('members'); ?>/yesterday_join"><i class="fas fa-users"></i></a></span>
					<div class="info-box-content"> <span class="info-box-text">Yesterday Members</span> <span class="info-box-number" id="y_members"> 0 </span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
			<!-- /.col -->
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3"> <span class="info-box-icon bg-danger elevation-1"><a href="<?php echo base_url('members'); ?>/yesterday_sales"><i class="fas fa-shopping-cart"></i></a></span>
					<div class="info-box-content"> <span class="info-box-text">Yesterday Sales</span> <span class="info-box-number" id="y_sales">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
			<!-- /.col --> 
			
			<!-- fix for small devices only -->
			<div class="clearfix hidden-md-up"></div>
			
			<!-- /.col -->
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3"> <span class="info-box-icon bg-warning elevation-1"><a href="<?php echo base_url('members'); ?>/yesterday_act"><i class="fas fa-users"></i></a></span>
					<div class="info-box-content"> <span class="info-box-text">Yesterday Activated Members</span> <span class="info-box-number" id="y_a_members">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
			<!-- /.col -->
			
			<div class="col-12 col-sm-6 col-md-3">
				<div class="info-box mb-3"> <span class="info-box-icon bg-success elevation-1"><a href="<?php echo base_url('members'); ?>/yesterday_act"><i class="fas fa-shopping-cart"></i></a></span>
					<div class="info-box-content"> <span class="info-box-text">Yesterday Activation</span> <span class="info-box-number" id="y_activation">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 col-12">
				<div class="info-box shadow"> <span class="info-box-icon bg-success"><i class="fas fa-money-bill"></i></span>
					<div class="info-box-content"> <span class="info-box-text">Yesterday Payout Generated</span> <span class="info-box-number" id="yesterday_payout">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
			<div class="col-md-3 col-sm-6 col-12">
				<div class="info-box shadow"> <span class="info-box-icon bg-warning"><i class="fas fa-money-bill"></i></span>
					<div class="info-box-content"> <span class="info-box-text">Yesterday Withdrawal</span> <span class="info-box-number" id="yesterday_withdrawal" >0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
			<div class="col-md-3 col-sm-6 col-12">
				<div class="info-box shadow"> <span class="info-box-icon bg-success"><i class="fas fa-money-bill"></i></span>
					<div class="info-box-content"> <span class="info-box-text">Last 7 days Payout Generated</span> <span class="info-box-number" id="seven_payout">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
			<div class="col-md-3 col-sm-6 col-12">
				<div class="info-box shadow"> <span class="info-box-icon bg-warning"><i class="fas fa-money-bill"></i></span>
					<div class="info-box-content"> <span class="info-box-text">Last 7 days Withdrawal</span> <span class="info-box-number" id="seven_withdrawal">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
				<!-- /.info-box --> 
			</div>
		</div>
		<!-- /.row -->
		<div class="row">
			<div class="col-lg-3 col-12"> 
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3 id="new_orders">0</h3>
						<p>New Orders</p>
					</div>
					<div class="icon"> <i class="ion ion-bag"></i> </div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-12"> 
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3 id="total_payout">0</h3>
						<p>Total Payout</p>
					</div>
					<div class="icon"> <i class="fas fa-rupee-sign"></i> </div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-12"> 
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3 id="total_admin">0</h3>
						<p>Admin Serv</p>
					</div>
					<div class="icon"> <i class="fas fa-rupee-sign"></i> </div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
			<!-- ./col -->
			<div class="col-lg-3 col-12"> 
				<!-- small box -->
				<div class="small-box bg-info">
					<div class="inner">
						<h3 id="total_tdss">0</h3>
						<p>TDS </p>
					</div>
					<div class="icon"> <i class="fas fa-rupee-sign"></i> </div>
					<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> </div>
			</div>
			<!-- ./col --> 
		</div>
		
		<!-- /.row --> 
		
		<!-- Main row -->
		<div class="row">
			<div class="col-md-3"> 
				<!-- Info Boxes Style 2 -->
				<div class="info-box mb-3 bg-warning"> <span class="info-box-icon"><i class="fas fa-tag"></i></span>
					<div class="info-box-content"> <span class="info-box-text">Inventory</span> <span class="info-box-number" id="total_products">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
			</div>
			<!-- /.info-box -->
			<div class="col-md-3">
				<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><i class="fas fa-wallet"></i></span>
					<div class="info-box-content"> <span class="info-box-text">Pending Payouts</span> <span class="info-box-number" id="total_wallets">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
			</div>
			<!-- /.info-box -->
			<div class="col-md-3">
				<div class="info-box mb-3 bg-danger"> <span class="info-box-icon"><i class="fas fa-ban"></i></span>
					<div class="info-box-content"> <span class="info-box-text">Inactive Users</span> <span class="info-box-number" id="inactive_users">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
			</div>
			<!-- /.info-box -->
			<div class="col-md-3">
				<div class="info-box mb-3 bg-info"> <span class="info-box-icon"><i class="far fa-comment"></i></span>
					<div class="info-box-content"> <span class="info-box-text">Open Tickets</span> <span class="info-box-number" id="total_tickets">0</span> </div>
					<!-- /.info-box-content --> 
				</div>
			</div>
			<!-- /.info-box --> 
			<!-- /.card --> 
		</div>
		<div class="row">
			<div class="col-12">
				<div class="card card-primary">
					<div class="card-header">
						<h3 class="card-title">SW Ranks List</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<div class="row">
							<div class="col-md-2"> 
								<!-- Info Boxes Style 2 -->
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/active.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Active</span> <span class="info-box-number" id="active">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							
							<!-- /.info-box -->
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/star.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Star+</span> <span class="info-box-number" id="star">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/ruby.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Ruby+</span> <span class="info-box-number" id="ruby">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/pearl.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Pearl+</span> <span class="info-box-number" id="pearl">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<div class="col-md-2"> 
								<!-- Info Boxes Style 2 -->
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/garnet.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Garnet+</span> <span class="info-box-number" id="garnet">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<!-- /.info-box -->
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/sapphire.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Sapphire+</span> <span class="info-box-number" id="sapphire">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<!-- /.info-box --> 
							<!-- /.card --> 
						</div>
						<div class="row"> 
							
							<!-- /.info-box -->
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/diamond.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Diamond+</span> <span class="info-box-number" id="diamond">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<!-- /.info-box -->
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/double diamond.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Double Dia</span> <span class="info-box-number" id="ddiamond">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/triple diamond.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Tripple Dia</span> <span class="info-box-number" id="tdiamond">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/roayal diamond.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Royal Dia</span> <span class="info-box-number" id="rdiamond">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<div class="col-md-2"> 
								<!-- Info Boxes Style 2 -->
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/crown diamond.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Crown Dia</span> <span class="info-box-number" id="cdiamond">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<!-- /.info-box -->
							<div class="col-md-2">
								<div class="info-box mb-3 bg-success"> <span class="info-box-icon"><img src="<?php echo base_url('assets'); ?>/dist/img/rank/crown ambassador.png"></span>
									<div class="info-box-content"> <span class="info-box-text">Crown Amb</span> <span class="info-box-number" id="ambassador">0</span> </div>
									<!-- /.info-box-content --> 
								</div>
							</div>
							<!-- /.info-box --> 
							<!-- /.card --> 
						</div>
					</div>
					<!-- /.card-body --> 
				</div>
				<!-- /.card --> 
			</div>
			<!-- /.col --> 
		</div>
		
		<!-- /.col --> 
	</div>
	<!-- /.row -->
	</div>
	<!--/. container-fluid --> 
</section>
<!-- /.content -->
</div>

<!-- /.content-wrapper --> 

<script src="<?php echo base_url('assets'); ?>/js/jquery.ajax.js"></script> 
<script>
	$(document).ready(function()
	{
		startcall();
		rankcall();
		setInterval(function()
		{
		  startcall();
		},30000);
		function startcall()
		{
			var req =  new Request();
			req.isneedblock = false;
			req.url = 'admin/dashboardajax';
			RequestHandler(req,assigndata);
		}
		function rankcall()
		{
			var req =  new Request();
			req.isneedblock = false;
			req.url = 'admin/rankajax';
			RequestHandler(req,rankdata);
		}
		assigndata(data='');
		function assigndata(data)
		{
			var res = data;
			res = JSON.parse(res);
			console.log(res);


				$("#total_members").html(res[0].total_members);
				$("#total_sales").html(res[0].total_sales);
				$("#total_bv").html(res[0].total_bv);
				$("#new_members").html(res[0].new_members);
				$("#today_activations").html(res[0].today_activations);
				$("#today_sales").html(res[0].today_sales);
				$("#inactive_users").html(res[0].inactive_users);
				$("#total_products").html(res[0].total_products);
				$("#total_tickets").html(res[0].total_tickets);
				$("#new_orders").html(res[0].new_orders);
				$("#total_payout").html(res[0].total_payout);
				$("#total_admin").html(res[0].total_admin);
				$("#total_tds").html(res[0].total_tds);
				$("#total_tdss").html(res[0].total_tds);
				$("#yesterday_payout").html(res[0].yesterday_payout);
				$("#yesterday_withdrawal").html(res[0].yesterday_withdrawal);
				$("#seven_payout").html(res[0].seven_payout);
				$("#seven_withdrawal").html(res[0].seven_withdrawal);
				$("#total_wallet").html(res[0].total_wallet);
				$("#total_wallets").html(res[0].total_wallet);
				$("#y_members").html(res[0].y_members);
				$("#y_sales").html(res[0].y_sales);
				$("#y_a_members").html(res[0].y_a_members);
				$("#y_activation").html(res[0].y_activation);
				$("#today_members").html(res[0].today_members);
				$("#total_swallet").html(res[0].total_swallet);
				var bbm = parseFloat(res[0].total_tds)+parseFloat(res[0].total_wallet)+parseFloat(res[0].total_swallet);
				$("#bbm").html(bbm);
				
		}
		rankdata(data='');
		function rankdata(data)
		{
			var res = data;
			res = JSON.parse(res);
			console.log(res);
			$("#active").html(res.active);
			$("#star").html(res.star);
			$("#ruby").html(res.ruby);
			$("#pearl").html(res.pearl);
			$("#garnet").html(res.garnet);
			$("#sapphire").html(res.sapphire);
			$("#diamond").html(res.diamond);
			$("#ddiamond").html(res.ddiamond);
			$("#tdiamond").html(res.tdiamond);
			$("#rdiamond").html(res.rdiamond);
			$("#cdiamond").html(res.cdiamond);
			$("#ambassador").html(res.ambassador);
		}
	});
</script>