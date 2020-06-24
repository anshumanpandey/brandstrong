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
										<div class="kt-portlet__body">
											<div class="job_top_area">
												<div class="row">
													<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
														<h2><?= $Job->Title ?></h2>
														<p>JOB #<?= $Job->JobId ?> Created on <?= $Job->CreatedAt ?></p>

													</div>
													<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

														<h3>JOB STATUS</h3>
															<?php
															if($Job->Hanger==0){

															if($Job->JobStatus==1){
																?>
																<span class="badge badge-primary">Active</span>
																<?php
															}elseif($Job->JobStatus==2){
																?>
																<span class="badge badge-warning">Queued</span>
																<?php
															}elseif($Job->JobStatus==3){
																?>
																<span class="badge badge-success">Completed</span>
																<?php
															}

															}else{
															?>
																<span class="badge badge-danger">Hangar</span>
																<?php	
															}
															?>

													

													</div>

												</div>
											</div>

											<br/>
														<?php if (isset($status)) : ?>
                                            <?php if ($status['status']==1) : ?>
                                                <div class="alert alert-success"><?= $status['message'] ?></div>
                                            <?php else : ?>
                                                <div class="alert alert-danger"><?= $status['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
							
											<br/>
											<!-- <div class=".ds_dropdown">

												<div class="kt-section__content" style="margin:0 0 30px 0;">
													<div class="row">
														<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
															<div class="dropdown">
																<button class="btn btn-secondary dropdown-toggle ds_drop" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	JOB BRIEF 
																</button>
																<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																	<a class="dropdown-item" href="#" data-toggle="kt-tooltip" title="Tooltip title" data-placement="right" data-skin="dark" data-container="body">First Draft</a>
																	
																</div>
															</div>
														</div>
														<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
															<div class="dropdown">
																<button class="btn dropdown-toggle ds_dropdown1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	JOB BRIEF 
																</button>
																<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
																	<a class="dropdown-item" href="#">Job Brief </a>
																	<a class="dropdown-item" href="#">Client Brief</a>
																	
																</div>
															</div>
														</div>
														
													</div>
												</div>

											</div> -->

											<div class="job_btn_area">
												<div class="row">
													<?php
														if($Job->JobStatus==3){
															?>
															<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
																	<a href='<?= base_url("jobs/status/$Job->JobId/5") ?>' class="ds_drop5">Duplicate Job</a> </div>
															<?php
														}elseif($Job->Hanger==1){
															?>
<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
														<a href='<?= base_url("jobs/status/$Job->JobId/1") ?>' class="ds_drop1">Set to Active</a> </div>
														<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
														<a href='<?= base_url("jobs/status/$Job->JobId/2") ?>' class="ds_drop2"  style="    background-color: #fcc433;">Set to Queued</a> </div>
														<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
															<a href='<?= base_url("request/edit/$Job->JobId") ?>' class="ds_drop3">Edit Job Info</a> </div>
															<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
																<a href='<?= base_url("jobs/status/$Job->JobId/4") ?>' class="ds_drop4">Cancel Request</a> </div>
																<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
																	<a href='<?= base_url("jobs/status/$Job->JobId/5") ?>' class="ds_drop5">Duplicate Job</a> </div>
															<?php
														}else{
															if($Job->JobStatus==1){
															?>
														<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
														<a href='<?= base_url("jobs/status/$Job->JobId/2") ?>' class="ds_drop2" style="    background-color: #fcc433;">Set to Queued</a> </div>
													<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
														<a href='<?= base_url("jobs/status/$Job->JobId/3") ?>' class="ds_drop2">Set to Hangar</a> </div>
														<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
															<a href='<?= base_url("request/edit/$Job->JobId") ?>' class="ds_drop3">Edit Job Info</a> </div>
															<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
																<a href='<?= base_url("jobs/status/$Job->JobId/4") ?>' class="ds_drop4">Cancel Request</a> </div>
																<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
																	<a href='<?= base_url("jobs/status/$Job->JobId/5") ?>' class="ds_drop5">Duplicate Job</a> </div>
															<?php
															}
															if($Job->JobStatus==2){
															?>
													<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
														<a href='<?= base_url("jobs/status/$Job->JobId/1") ?>' class="ds_drop1">Set to Active</a> </div>
													<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
														<a href='<?= base_url("jobs/status/$Job->JobId/3") ?>' class="ds_drop2">Set to Hangar</a> </div>
														<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
															<a href='<?= base_url("request/edit/$Job->JobId") ?>' class="ds_drop3">Edit Job Info</a> </div>
															<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
																<a href='<?= base_url("jobs/status/$Job->JobId/4") ?>' class="ds_drop4">Cancel Request</a> </div>
																<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
																	<a href='<?= base_url("jobs/status/$Job->JobId/5") ?>' class="ds_drop5">Duplicate Job</a> </div>
															<?php
															}
														}
													?>
													
													
																</div>
															</div>                                    

															
														</div>
<br/>

														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">
																	Assigned Team

																</h3>
															</div>

														</div>

														<div class="kt-portlet__body">

															<!--begin::Section-->
															<div class="kt-section">

																<div class="kt-section__content">
																	<table width="70%" border="0" cellspacing="0" cellpadding="0">
																		 <?php
                                                    foreach ($jobassign as $single) {
                                                    ?>
                                                   
																
																				<tr>
																					<td width="23%" style="padding: 10px"><img src='<?= base_url("public/owner/images/owner/$single->ProfilePic") ?>' width="80" height="79" alt=""></td>
																					<td width="75%" style="padding: 10px"> <strong><?= $single->FirstName." ".$single->LastName ?></strong><br>
																					<?= $single->Designation ?></td>

																				</tr>
   													<?php
                                                    }
                                                    if(empty($jobassign)){
                                                    	?>
                                                    	<span class="badge badge-danger">Not Assign Team</span>
                                                    	<?php
                                                    }
                                                    ?>

																			</table>
																			
																</div>
															</div>

															<!--end::Section-->

															<!--begin::Section-->


															<!--end::Section-->
														</div>                                       


														<div class="kt-portlet__head">
															<div class="kt-portlet__head-label">
																<h3 class="kt-portlet__head-title">
																	General Information

																</h3>
																<!-- <div class="ds_tjb">Trial Job</div> --> </div>

															</div>                                      

														<div class="kt-portlet__body">
																<div class="kt-section">
																	<div class="kt-section__content">

																		<strong>Job Type</strong> <span class="ds_line"><strong>|</strong> </span> <span class="ds_line2"><?= $Job->SubCateName ?></span>    
																	</div>

																</div>

															</div>
															<div class="kt-portlet__body">
																<div class="kt-section">
																	<div class="kt-section__content">

																		<strong>Project Output</strong> <span class="ds_line"><strong>|</strong> </span> <span class="ds_line2"><?= $Job->ProjectOutput ?></span>    
																	</div>

																</div>

															</div>
															

															<div class="kt-portlet__head">
																<div class="kt-portlet__head-label">
																	
																	<h3 class="kt-portlet__head-title">
																		Job Content

																	</h3>
																</div>



																<!--end::Portlet-->


															</div>

															<div class="kt-portlet__body">
																<div class="kt-section">
																	<div class="kt-section__content">    
											<div class="form-group">
												<div>
													<h6 class="kt-portlet__head-title">
														Description :
													</h6><br/>
													<p>
														<?= $Job->Description ?>
													</p>
												</div>
                                       		</div>					
                                       		<div class="form-group">
												<div>
													<h6 class="kt-portlet__head-title">
														Special Request :
													</h6><br/>
													<p>
														<?= $Job->SpecialRequest ?>
													</p>
												</div>
                                       		</div>                           

																			<?php
									    		foreach($questionanswer as $item){
									    			?>
									    	<div class="form-group">
												<div>
													<h6 class="kt-portlet__head-title">
														<?= $item->Title ?> :
													</h6><br/>
													<p>
														<?= $item->Answer ?>
													</p>
												</div>
                                       		</div>
                                        			<?php
									    		}
									    		?>

																	</div>
																</div>
															</div>          

											


														</div>
													</div>

													<!-- end:: Content -->
												</div>
												<?php
												include "footer.php";
												?>
