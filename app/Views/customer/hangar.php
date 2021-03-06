<?php
	include "header.php";
?>
					<!-- end:: Header -->
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
												 Hanger JOBS
												</h3>
											</div>
										</div>
										<div class="kt-portlet__body">

											<!--begin::Section-->
											

											<!--end::Section-->

											<!--begin::Section-->
											

											<!--end::Section-->
										</div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												 Hangar
 
												</h3>
											</div>
										</div>
                                        
                                        <div class="kt-portlet__body">

											<!--begin::Section-->
											<div class="kt-section">
												
												<div class="kt-section__content">
										<?php if (isset($status)) : ?>
                                            <?php if ($status['status']==1) : ?>
                                                <div class="alert alert-success"><?= $status['message'] ?></div>
                                            <?php else : ?>
                                                <div class="alert alert-danger"><?= $status['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
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
		                                                    foreach ($Hangar as $single) {
		                                                    ?>
		                                                  	<tr class="ds_link">
		                                                  		<td>#<?= $single->JobId ?></td>
		                                                  		<td><?= $single->SubCateName ?></td>
		                                                  		<td><?= $single->Title ?></td>
		                                                  		<td>
		                                                  		        <span class="badge badge-danger">Hangar</span>
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