<body class="page-md login">
<div class="container" >
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
		<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12" style="margin-top:50px;">
						<!-- BEGIN EXAMPLE TABLE PORTLET-->
						<div class="portlet box grey-cascade">
							<ul class="nav nav-tabs" style="background:#eee;">
								<li class="active">
									<a href="<?php echo base_url();?>index.php/Select?depart=<?=$this->session->userdata('User')['Department']?>">Home</a>
								</li>
							</ul>
							<div class="portlet-title">
								<div class="table-toolbar">
									<form enctype="multipart/form-data" action="" method="post">
						            <div class="col-lg-4">
						                <div class="form-group">
						                    <input type="file" class="form-control" style="display:inline-block;" name="userFiles" multiple/>
						                </div>
						            </div>
									<div class="col-lg-2">
						                <div class="form-group">
						                    <input class="btn green form-control" type="submit" style="display:inline-block;" name="fileSubmit" value="UPLOAD"/>
						                </div>
						            </div>
						            </form>
						        </div>
							</div>
							<div class="portlet-body">
						        <div class="table-toolbar">
									<div class="col-lg-12">
										<div class="row">
											<?php if($imagefile): foreach($imagefile as $row): ?>
											<div class="col-lg-3">
												<div class="row" style="margin-bottom:5px; ">
													<img src="<?php echo base_url('uploadimage/'.$row->file_name); ?>" alt="" class="col-lg-12" style="height:200px; width :100%;box-shadow: 5px 5px 1px #888888;">
												</div>
												<p style="text-align:center;">Uploaded On <?php echo date("j M Y",strtotime($row->create_date)); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url();?>index.php/MainPage/delimg?imgid=<?= $row->id ?>" style="text-decoration: none;"><span class="label label-sm label-danger">Delete</span></a></p>
											</div>
											<?php endforeach; else: ?>
											<div class="col-lg-3">
												<div class="row" style="margin-bottom:5px;">
													<img src="<?php echo base_url('uploadimage/no-image.jpg'); ?>" alt="" class="col-lg-10" style="height:200px; box-shadow: 5px 5px 1px #888888;">
												</div>
											</div>
											<?php endif; ?>
										</div>
									</div>
						        </div>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
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