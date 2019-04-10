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
												<i class="fa fa-gift"></i>Safety Box Details
											</div>
										</div>
										<div class="portlet-body form">
											<!-- BEGIN FORM-->
											<?php echo form_open('safe_box_ctrl','class="form-horizontal"');?>
												<div class="form-body">
													<!--<?php //if ($this->input->get('id')){?>-->
													<!--<div class="form-group has-error">
														<label class="control-label col-md-3">User ID</label>
														<div class="col-md-4">
															<div class="input-icon right">
																<i class="fa fa-warning tooltips" data-original-title="Already Register User ID"></i>
																<input type="text" class="form-control input-circle" placeholder="Enter User ID" value="<?php echo set_value('Tk_Id', isset($record[0]->Username) == TRUE ? $record[0]->Username : '')?>" name="Tk_Id"/>
															</div>
														</div>
													</div>-->
													<!--<?php //}else{ ?>-->
													<div class="form-group">
														<label class="col-md-6 control-label">Type : </label>
														<div class="col-md-4">
															<label class="col-md-6 control-label" style="text-align:left;"><?php echo set_value('sf_desc',isset($record[0]->sf_type) ? $record[0]->sf_type : '') ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-6 control-label">Description : </label>
														<div class="col-md-4">
															<label class="col-md-6 control-label" style="text-align:left;"><?php echo set_value('sf_desc',isset($record[0]->sf_desc) ? $record[0]->sf_desc : '') ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-6 control-label">Username : </label>
														<div class="col-md-4">
															<label class="col-md-6 control-label" style="text-align:left;"><?php echo set_value('sf_username',isset($record[0]->sf_username) ? $record[0]->sf_username : '') ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-6 control-label">Password : </label>
														<div class="col-md-4">
															<label class="col-md-6 control-label" style="text-align:left;"><?php echo set_value('sf_password',isset($record[0]->sf_password) ? $record[0]->sf_password : '') ?></label>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-6 control-label">Additional Information : </label>
														<div class="col-md-4">
															<label class="col-md-6 control-label" style="text-align:left;"><?php echo set_value('sf_addinfo',isset($record[0]->sf_addinfo) ? $record[0]->sf_addinfo : '') ?></label>
														</div>
													</div>
												</div>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-11 col-md-9">
															<button type="button" class="btn btn-circle default" onclick="location.href = '<?php base_url();?>safe_box';">Back</button>
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