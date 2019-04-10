<body class="page-md login">
<div class="container" >
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
		<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12" style="margin-top:10%;">
					<!-- BEGIN DASHBOARD STATS -->
						<div class="row">
							<?php if ($this->input->get('depart') == 'Admin') { ?>
							<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light green-soft" href="<?php echo base_url();?>index.php/MainPage">
								<div class="visual">
									<i class="fa fa-user-plus"></i>
								</div>
								<div class="details">
									<div class="number">
									</div>
									<div class="desc">
										 User List ( Admin )
									</div>
								</div>
								</a>
							</div>
							<?php } ?>
							<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light blue-soft" href="<?php echo base_url();?>index.php/MainPage/contactlist">
								<div class="visual">
									<i class="fa fa-users"></i>
								</div>
								<div class="details">
									<div class="number">
									</div>
									<div class="desc">
										 Contact List ( User )
									</div>
								</div>
								</a>
							</div>
							<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light purple-soft" href="<?php echo base_url();?>index.php/MainPage/safe_box">
								<div class="visual">
									<i class="fa fa-lock"></i>
								</div>
								<div class="details">
									<div class="number">
										
									</div>
									<div class="desc">
										 Safety Box
									</div>
								</div>
								</a>
							</div>
							<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light red-soft" href="<?php echo base_url();?>index.php/MainPage/image_gallery">
								<div class="visual">
									<i class="fa fa-image"></i>
								</div>
								<div class="details">
									<div class="number">
									</div>
									<div class="desc">
										 Photo Gallery
									</div>
								</div>
								</a>
							</div>
							<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light light-gray" href="<?php echo base_url();?>index.php/MainPage/music_cube">
								<div class="visual">
									<i class="fa fa-music"></i>
								</div>
								<div class="details">
									<div class="number">
										
									</div>
									<div class="desc">
										 Music Cube
									</div>
								</div>
								</a>
							</div>
							<div class="col-lg-6 col-md-3 col-sm-6 col-xs-12">
								<a class="dashboard-stat dashboard-stat-light " href="<?php echo base_url();?>index.php/login_ctrl/logout">
								<div class="visual">
									<i class="fa fa-power-off"></i>
								</div>
								<div class="details">
									<div class="number">
										
									</div>
									<div class="desc">
										 Log Out
									</div>
								</div>
								</a>
							</div>
						</div>
					<!-- END DASHBOARD STATS -->
					</div>
				</div>
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
</div>