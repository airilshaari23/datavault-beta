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
												<?php if ($this->input->get('sfid')) { ?>
												<i class="fa fa-gift"></i>Edit Safety Box
												<?php } else { ?>
												<i class="fa fa-gift"></i>Add Safety Box
												<?php } ?>
											</div>
										</div>
										<div class="portlet-body form">
										<span class="error"><?php echo validation_errors(); ?></span>
											<!-- BEGIN FORM-->
											<?php echo form_open('safe_box_ctrl','class="form-horizontal"');?>
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-3 control-label">Type</label>
														<div class="col-md-4">
															<?php 
																$sftype = array(
																'Email' => 'Email',
																'Website' => 'Website',
																'Online Banking' => 'Online Banking',
																'Other' => 'Other'
															 );
															?>
															<?php echo form_dropdown('sf_type', $sftype, set_value('sf_type',isset($record[0]->sf_type) ? $record[0]->sf_type : '') , 'style="width: 150px;" class="form-control input-circle"'); ?>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Description</label>
														<div class="col-md-4">
															<input type="text" class="form-control input-circle" value="<?php echo set_value('sf_desc',isset($record[0]->sf_desc) ? $record[0]->sf_desc : '') ?>" name="sf_desc"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Username</label>
														<div class="col-md-4">
															<input type="text" class="form-control input-circle" value="<?php echo set_value('sf_username',isset($record[0]->sf_username) ? $record[0]->sf_username : '') ?>" name="sf_username"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Password</label>
														<div class="col-md-4">
															<input type="text" class="form-control input-circle" value="<?php echo set_value('sf_password',isset($record[0]->sf_password) ? $record[0]->sf_password : '') ?>" name="sf_password"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Additional Information</label>
														<div class="col-md-4">
															<textarea rows="4" cols="50" name="sf_addinfo" class="form-control input-circle"><?php echo set_value('sf_addinfo',isset($record[0]->sf_addinfo) ? $record[0]->sf_addinfo : '') ?></textarea>
															<!--<input type="text" class="form-control input-circle" value="" name="sf_addinfo"/>-->
														</div>
													</div>
												</div>
												<?php echo form_hidden('sfid',$this->input->get('sfid')) ?>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn btn-circle blue">Submit</button>
															<?php if ($error <> ''){ ?>
															<button type="button" class="btn btn-circle default" onclick="location.href = '<?php base_url();?>MainPage/safe_box';">Cancel</button>
															<?php } else { ?>
															<button type="button" class="btn btn-circle default" onclick="location.href = '<?php base_url();?>safe_box';">Cancel</button>
															<?php } ?>
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