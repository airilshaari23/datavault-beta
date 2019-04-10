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
												<?php if ($this->input->get('conid')) { ?>
												<i class="fa fa-gift"></i>Edit Contact List
												<?php } else { ?>
												<i class="fa fa-gift"></i>Add Contact List
												<?php } ?>
											</div>
										</div>
										<div class="portlet-body form">
										<span class="error"><?php echo validation_errors(); ?></span>
											<!-- BEGIN FORM-->
											<?php echo form_open('contact_list_ctrl','class="form-horizontal"');?>
												
												<div class="form-body">
													<div class="form-group">
														<label class="col-md-3 control-label">Name</label>
														<div class="col-md-4">
															<input type="text" class="form-control input-circle" placeholder="Enter Contact Name" value="<?php echo set_value('c_name',isset($record[0]->c_name) ? $record[0]->c_name : '')?>" name="c_name"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Telephone No.</label>
														<div class="col-md-4">
															<input type="text" class="form-control input-circle" placeholder="Enter Contact Telephone No." value="<?php echo set_value('c_phone',isset($record[0]->c_phone) ? $record[0]->c_phone : '')?>" name="c_phone"/>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Email Address</label>
														<div class="col-md-4">
															<div class="input-group">
																<span class="input-group-addon input-circle-left">
																<i class="fa fa-envelope"></i>
																</span>
																<input type="email" class="form-control input-circle-right" placeholder="Enter Contact Email Address" value="<?php echo set_value('c_email',isset($record[0]->c_email) ? $record[0]->c_email : '')?>" name="c_email">
															</div>
														</div>
													</div>
												</div>
												<?php echo form_hidden('conid',$this->input->get('conid')) ?>
												<div class="form-actions">
													<div class="row">
														<div class="col-md-offset-3 col-md-9">
															<button type="submit" class="btn btn-circle blue">Submit</button>
															<?php if ($error <> ''){ ?>
															<button type="button" class="btn btn-circle default" onclick="location.href = '<?php base_url();?>MainPage/contactlist';">Cancel</button>
															<?php } else { ?>
															<button type="button" class="btn btn-circle default" onclick="location.href = '<?php base_url();?>contactlist';">Cancel</button>
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