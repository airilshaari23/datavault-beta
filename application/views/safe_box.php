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
								<div class="caption">
									<i class="fa fa-globe"></i>Safety Box
								</div>
									
							</div>
							<div class="portlet-body">
								<div class="table-toolbar">
									<div class="row">
										<div class="col-md-6">
											<div class="btn-group">
												<a href="<?php echo base_url();?>index.php/MainPage/add_safebox" ><button id="sample_editable_1_new" class="btn green">
												Add New <i class="fa fa-plus"></i>
												</button></a>
											</div>
										</div>
									</div>
								</div>
								<table class="table table-striped table-bordered table-hover">
								<thead>
								<tr>
									<th>
										No
									</th>
									<th>
										 Type
									</th>
									<th>
										 Description
									</th>
								</tr>
								</thead>
								<tbody>
								<?php  if (!empty($record)) {?>
								<?php $numrow = ($this->input->get('per_page')) ? $this->input->get('per_page') + 1 : 1; foreach($record as $row):?>
									<tr class="odd gradeX">
										<td><?= $numrow++ ?></td>
										<td><?= isset($row->sf_type) ? $row->sf_type : '' ?></td>
										<td><?= isset($row->sf_desc) ? anchor('MainPage/disp_safebox?sfid='.$row->id,$row->sf_desc) : '' ?></td>
										<td style="text-align:center;"><a href="<?php echo base_url();?>index.php/MainPage/add_safebox?sfid=<?= $row->id ?>" style="text-decoration: none;"><span class="label label-sm label-success">Edit</span></a></td>
										<td style="text-align:center;"><a href="<?php echo base_url();?>index.php/MainPage/del_safebox?sfid=<?= $row->id ?>" style="text-decoration: none;"><span class="label label-sm label-danger">Delete</span></a></td>
									</tr>
								<?php endforeach; ?>
								<?php } else { ?>
									<tr class="odd gradeX">
										<td colspan="7" height="200px" style="color:red; text-align:center; padding-top:8%;">No Information</td>
									</tr>
								<?php } ?>
								</tbody>
								</table>
								<ul class="pagination">
								<?php foreach ($links as $link) {
								echo "<li>". $link."</li>";
								} ?>
								</ul>
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