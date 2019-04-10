<body class="page-md login">
<div class="container" >
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12" style="margin-top:30px;">
						<div class="tabbable tabbable-custom tabbable-noborder  tabbable-reversed">
							<ul class="nav nav-tabs" style="background:#eee;">
								<li class="active">
									<a href="<?php echo base_url();?>index.php/Select?depart=<?=$this->session->userdata('User')['Department']?>">Home</a>
								</li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="tab_0">
									<div class="portlet box green">
										<div class="portlet-title">
											<div class="caption">
												<?php if ($this->input->get('usid')) { ?>
												<i class="fa fa-gift"></i>Edit User Profile
												<?php } else { ?>
												<i class="fa fa-gift"></i>Add User Profile
												<?php } ?>
											</div>
										</div>
										<div class="portlet-body form">
										<span class="error"><?php echo validation_errors(); ?></span>
											<!-- BEGIN FORM-->
											<?php echo form_open('user_list_ctrl','class="form-horizontal"');?>
												
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-3 control-label">User ID </label>
														<div class="col-md-4">
															<input type="text" class="form-control input-circle" placeholder="Enter User ID" value="<?php echo set_value('Tk_Id', isset($record[0]->Username) == TRUE ? $record[0]->Username : '')?>" name="Tk_Id"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Name </label>
														<div class="col-md-4">
															<input type="text" class="form-control input-circle" placeholder="Enter Your Name" value="<?php echo set_value('Tk_Name', isset($record[0]->Name) == TRUE ? $record[0]->Name : '')?>" name="Tk_Name"/>
														</div>
													</div>

													<?php if ($this->input->get('usid') == "") {?>
													<div class="form-group">
														<label class="col-md-3 control-label">Password</label>
														<div class="col-md-4">
															<div class="input-group">
																<input type="password" class="form-control input-circle-left" placeholder="Password" value="<?php echo set_value('Tk_Password', isset($record[0]->Password) == TRUE ? $record[0]->Password : '')?>" name="Tk_Password"/>
																<span class="input-group-addon input-circle-right">
																<i class="fa fa-user"></i>
																</span>
															</div>
														</div>
													</div>
													<?php } ?>

													<div class="form-group">
														<label class="col-md-3 control-label">Email Address</label>
														<div class="col-md-4">
															<div class="input-group">
																<span class="input-group-addon input-circle-left">
																<i class="fa fa-envelope"></i>
																</span>
																<input type="email" class="form-control input-circle-right" placeholder="Email Address" value="<?php echo set_value('Tk_Email', isset($record[0]->Email) == TRUE ? $record[0]->Email : '')?>" name="Tk_Email">
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-md-3">Department</label>
														<div class="col-md-4">
															<?php 
																$dept = array(
																'' => '',
																'Admin' => 'Admin',
																'User' => 'User'
															 );
															?>
															<?php echo form_dropdown('Tk_Department', $dept, set_value('Tk_Department',isset($record[0]->Department) ? $record[0]->Department : '') , 'style="width: 150px;" class="form-control input-circle"'); ?>
														</div>
													</div>
												</div>
												<?php echo form_hidden('usid',$this->input->get('usid')) ?>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn btn-circle blue">Submit</button>
															<button type="button" class="btn btn-circle default" onclick="location.href = '<?php base_url();?>MainPage';">Cancel</button>
														</div>
													</div>
												</div>
											</form>
											
											<!-- END FORM-->
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE CONTENT-->
			</div>
		</div>
		<!-- END CONTENT -->
		<!-- BEGIN QUICK SIDEBAR -->
		<!--Cooming Soon...-->
		<!-- END QUICK SIDEBAR -->
	</div>
	<!-- END CONTAINER -->
</div>