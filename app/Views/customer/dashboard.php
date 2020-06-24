<?php
	include "header.php";
?>
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Subheader -->
						

						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<!-- <div class="row">
								<div class="col">
									<div class="alert alert-light alert-elevate fade show" role="alert">
										
										<div class="alert-text">
											<strong>Your trial ended:</strong> 22 days ago (Expiration: May 3, 2020)
											<br>
											<strong>Click</strong> here to Activate your Subscription.
										</div>
									</div>
								</div>
							</div> -->
							<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												 ACTIVE JOBS
												</h3>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin::Section-->
											<div class="kt-section">
												
												<div class="kt-section__content">
													<table class="datatable table-striped table-hover">
														<thead>
															<tr>
																<th>JOB NO.</th>
																<th>JOB TYPE</th>
																<th>JOB TITLE</th>
																<th>STATUS</th>
                                                                <th>CURRENTLY AT</th>
                                                                <th>JOB DETAILS</th>
                                                           	</tr>
														</thead>
														<tbody>
															<?php
		                                                    foreach ($ActiveJob as $single) {
		                                                    ?>
		                                                  	<tr class="ds_link">
		                                                  		<td>#<?= $single->JobId ?></td>
		                                                  		<td><?= $single->SubCateName ?></td>
		                                                  		<td><?= $single->Title ?></td>
		                                                  		<td>
		                                                        <span class="badge badge-primary">Active</span>
                                                                <!-- <span class="badge badge-warning">Queued</span> -->
                                                                <!-- <span class="badge badge-success">Completed</span> -->
                                                          		</td>
		                                                  		<td><?= $single->CreatedAt ?></td>
		                                                  		<td><a href='<?= base_url("jobs/details/$single->JobId") ?>'><span class="badge badge-success">Job Details</span></a></td>
		                                                  	</tr></a>
		                                                  	<?php
		                                                  	}
		                                                  	?>
														</tbody>
														
													</table>
												</div>
											</div>

											<!--end::Section-->


										</div>
                                        
                                        
                                        
                                        <div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												  QUEUED JOBS

												</h3>
											</div>
										</div>
                                        
                                        <div class="kt-portlet__body">

											<!--begin::Section-->
											<div class="kt-section">
												
												<div class="kt-section__content">
													<table class="datatable table-striped table-hover">
														<thead>
															<tr>
																<th>JOB NO.</th>
																<th>JOB TYPE</th>
																<th>JOB TITLE</th>
																<th>STATUS</th>
                                                                <th>CURRENTLY AT</th>
                                                            	<th>JOB DETAILS</th>
                                                            </tr>
														</thead>
														<tbody>
															<?php
		                                                    foreach ($QueueJob as $single) {
		                                                    ?>
		                                                  	<tr class="ds_link">
		                                                  		<td>#<?= $single->JobId ?></td>
		                                                  		<td><?= $single->SubCateName ?></td>
		                                                  		<td><?= $single->Title ?></td>
		                                                  		<td>
                                                                <span class="badge badge-warning">Queued</span>
                                                          		</td>
		                                                  		<td><?= $single->CreatedAt ?></td>
		                                                  		<td><a href='<?= base_url("jobs/details/$single->JobId") ?>'><span class="badge badge-success">Job Details</span></a></td>
		                                                  	</tr>
		                                                  	<?php
		                                                  	}
		                                                  	?>
														</tbody>
														
													</table>
												</div>
											</div>

											<!--end::Section-->


										</div>
                                        <!-- <div class="kt-portlet__body">

											<div class="kt-section">
                                            
                                            <div class="kt-section__content">
													<form class="kt-form">
												<div class="form-group row">
													
													<div class="col-1">
														<span class="kt-switch kt-switch--success">
															<label>
																<input type="checkbox" checked="checked" name="">
																<span></span>
															</label>
														</span>
													</div>
                                                    <label class="col-4 col-form-label">Auto Deploy Queued Jobs: ON </label>
													
												</div>
												
											</form>
												</div>
												<span class="kt-section__info">
												No queued jobs..
												</span>
												
											</div>
										</div> -->
                                        
                                        
                                        <div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												  COMPLETED JOBS
 
												</h3>
											</div>
										</div>
                                        
                                        <div class="kt-portlet__body">

											<!--begin::Section-->
											<div class="kt-section">
												
												<div class="kt-section__content">
													<table class="datatable table-striped table-hover">
														<thead>
															<tr>
																<th>JOB NO.</th>
																<th>JOB TYPE</th>
																<th>JOB TITLE</th>
																<th>Status</th>
																<th>DATE COMPLETED</th>
                                                                <th>DOWNLOAD LINK</th>
                                                             	<th>JOB DETAILS</th>
                                                            </tr>
														</thead>
														<tbody>
															<?php
		                                                    foreach ($CompletedJob as $single) {
		                                                    ?>
		                                                  	<tr class="ds_link">
		                                                  		<td>#<?= $single->JobId ?></td>
		                                                  		<td><?= $single->SubCateName ?></td>
		                                                  		<td><?= $single->Title ?></td>
		                                                  		<td>
		                                                  			<span class="badge badge-success">Completed</span>
																</td>
		                                                  		<td><?= $single->JobCompletedDate ?></td>
		                                                  		<td>
		                                                  			 <?php
                                                            if(empty($single->DownloadLink)){
                                                                ?>
                                                                <i class="feather icon-minus"></i>
                                                                <?php
                                                            }else{
                                                            ?>
                                                            <a class="badge badge-success" style="color: white" target="_black" href='<?= base_url("public/owner/images/job/completed/$single->DownloadLink") ?>'>Open</a>
                                                            <a  class="badge badge-primary"  style="color: white" href='<?= base_url("public/owner/images/job/completed/$single->DownloadLink") ?>' download>Download</a>
                                                            <?php
                                                            }
                                                            ?>
		                                                  		</td>
		                                                  		<td><a href='<?= base_url("jobs/details/$single->JobId") ?>'><span class="badge badge-success">Job Details</span></a></td>
		                                                  	</tr>
		                                                  	<?php
		                                                  	}
		                                                  	?>
														</tbody>
													</table>
												</div>
											</div>

											<!--end::Section-->

											<!--begin::Section-->
											

											<!--end::Section-->
										</div>

										<!--end::Form-->
									</div>
                                    
                                    
                                    
                                    

									<!--end::Portlet-->

									
								</div>
								
							</div>
						</div>

						<!-- end:: Content -->
					</div>

					<?php
	include "footer.php";
?>
