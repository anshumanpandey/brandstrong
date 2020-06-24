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
												 MY FEEDBACK
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
												<a href="<?= base_url('feedback/form') ?>" class="ds_add">Add new feedback</a>
											</div>
										</div>
                                        
                                        <div class="kt-portlet__body">

											<!--begin::Section-->
											<div class="kt-section">
												
												<div class="kt-section__content">
													<table class="datatable table-striped table-hover">
														<thead>
															<tr>
																<th>ID</th>
																<th>TITLE</th>
																<th>NOTE</th>
																<th>TAGS</th>
																<th>FEEDBACK DATE</th>
																<th>ATTACHMENT</th>
                                                                <th>ACTION</th>
                                                                
															</tr>
														</thead>
														<tbody>
															<?php
                                                    foreach ($feedback as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->FeedbackId ?>">
                                                        <td>#<?= $single->FeedbackId ?></td>
                                                        <td><?= $single->Title ?></td>
                                                        <td><?= $single->Note ?></td>
                                                        <td><?= $single->Tags ?></td>
                                                        <td><?= $single->CreatedAt ?></td>
                                                        <td  class="text-center">
                                                        	<?php
                                                        	if(!empty($single->File)){
                                                        		?>
                                                        		 <a class="badge badge-success" target="_black" href='<?= base_url("public/owner/images/feedback/$single->File") ?>'>Open</a>
                                                            	<a  class="badge badge-primary" href='<?= base_url("public/owner/images/feedback/$single->File") ?>' download>Download</a>
                                                        		<?php
                                                        	}else{
                                                                echo "-";
                                                            }
                                                        	?>
                                                           
                                                        </td>
                                                        
                                    					<td><span class="delete-data badge badge-danger"  onclick="deleteData('feedback',<?= $single->FeedbackId ?>);">Delete</span></td>
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