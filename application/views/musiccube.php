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
						                <div class="form-group" style="color:red;">
						                    Supported format: Audio - MP3 and Video - MP4<br><?php echo $error ?>
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
										<div class="row" style="text-align:center;">
											<?php if($musicfile): foreach($musicfile as $row): ?>
											<div class="col-lg-12">
												<div class="row" style="margin-bottom:5px;">
													<?php if ($row->type == "audio/mp3") { ?>
													<audio preload="auto" style="width: 500px;" id="audio" controls>
												  		<source src="<?php echo base_url('uploadmusic/'.$row->file_name); ?>">
													</audio>
													</br>
													<?php } else { ?>
													<video width="500" height="300" controls>
													  	<source src="<?php echo base_url('uploadmusic/'.$row->file_name); ?>">
													</video>
													</br>
													<?php } ?>
													<b><?=isset($row->file_name) ? $row->file_name : ''?></b></br></br>
												</div>
											</div>
											<?php endforeach; else: ?>
											<div class="col-lg-12">
												<div class="row" style="color:red;text-align:center;margin-top:10px;">
													<b>NO MEDIA FOUND</b>
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