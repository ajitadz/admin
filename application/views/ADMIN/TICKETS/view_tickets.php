<?php foreach($tickets as $row) {
$subject = $row->subject;
$department = $row->department;
$t_date_time = $row->t_date_time;
$description = $row->description;
$image_url = $row->image_url;
$id = $row->id;
}
?>
<?php if($subject)
{
?>

<div class="content-wrapper">
	<section class="content">

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card card-widget">
					<div class="card-header">
						<div class="user-block"> <img class="img-circle" src="/assets/membersarea/images/ticket/q.png" alt="Query"> <span class="username"><a href="#"><?php echo $subject; ?></a></span> <span class="description"><?php echo $department; ?> - <?php echo date("l jS \of F Y h:i:s A",strtotime($t_date_time)) ; ?></span>
							<div class="form-group">
								<form action="" method="post">
								<label>Update Status</label>
								<input type="hidden" name="ticket_id" value="<?php echo $id; ?>">
								<select name="tick_stat" class="form-control">
								  		<option>--Select--</option>
										<option value="Open">Open</option>
										<option value="Closed">Closed</option>
										<option value="Resolved">Resolved</option>
										<option value="Deleted">Deleted</option>
								</select>
								<div style="padding-top: 10px;"><input type="submit" name="update" class="btn btn-info" value="Update"></div>	
								
								</form>
							</div>
						</div>
					</div>
					<div class="card-body"> 
						<!--<p>
							<?php echo $description; ?>
						</p>-->
						<div class="attachment-block clearfix">
							<div class="row">
								<div class="col-md-12"> <img class="attachment-img" src="" style="max-width: 300px;max-height: 300px;" alt="Attachment Image"> </div>
							</div>
							<div class="row" style="padding-top: 20px">
								<div class="col-md-12">
									<div class="attachment">
										<h4 class="attachment-heading"><?php echo $subject; ?></h4>
										<div class="attachment-text"> <?php echo $description; ?></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card card-primary card-outline direct-chat direct-chat-primary">
						<div class="card-body">
							<div class="direct-chat-messages">
								<?php foreach($messageajax as $row)
									{
										if($row->from_id!='1')
										{
											?>
											<div class="direct-chat-msg">
												<div class="direct-chat-infos clearfix"> <span class="direct-chat-name float-left" >Customer : </span> <span class="direct-chat-timestamp float-right"><?php echo $row->date_time; ?></span>  </div>
												<img class="direct-chat-img" src="https://phpstack-806316-2763125.cloudwaysapps.com/assets/membersarea/images/ticket/user-icon.png" alt="Message User Image">
												<div class="direct-chat-text "><?php echo $row->message; ?></div>
											</div>
											<?php
										}
										else
										{
											?>
											<div class="direct-chat-msg right">
												<div class="direct-chat-infos clearfix"> <span class="direct-chat-timestamp float-left" style="float:right"><?php echo' '. $row->date_time; ?></span><span class="direct-chat-name float-right" style="float:right">Me : </span></div>
												<img class="direct-chat-img" src="https://phpstack-806316-2763125.cloudwaysapps.com/assets/membersarea/images/ticket/user-icon.png" alt="Message User Image">
												<div class="direct-chat-text"> <?php echo $row->message; ?> </div>
											</div>
								<?php
										}

									}
								?>


							</div>
						</div>
						<p id="chat_id"></p>
						<p id="ticket_id"></p>
						<p id="date_time"></p>
						<p id="to_id"></p>
						<div class="card-footer">
							<form action="" method="post">
								<div class="input-group">
									<input type="hidden" name="ticket_id" value="<?php echo $id; ?>">
									<textarea name="message" rows="3" placeholder="Type Message ..." class="form-control"></textarea>
									<span class="input-group-append">
									<input type="submit" name="submit" class="btn btn-primary" value="Reply">
									</span> </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php }
else
{
?>
	<meta http-equiv="refresh" content="0;url=<?php base_url(''); ?>/ticket">
<?php
}
?>
</div>