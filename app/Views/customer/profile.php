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
											<div class="kt-portlet__head-label ds_header2">
												<h3 class="kt-portlet__head-title ds_header">
												 <?= $profile->FirstName ?> <?= $profile->LastName ?> - <?= $profile->Company ?>
												</h3><br>
                                                
											</div>
                                            
										</div>
                                        <div class="ds_header3"><br/>
											<div class="ds_header"><p>Joined on <?= $profile->CreatedAt ?></p> </div><br/>
                                            
										</div>
                                        <div class="ds_header3">
											<div class="kt-portlet__head-label ds_header2" style="border:0px;">
												 <a href="<?= base_url('profile/edit') ?>" class="ds_add">Edit Profile</a>
                                                
											</div>
                                            
                                           
										</div>
										<div class="kt-portlet__body">

											<!--begin::Section-->
											

											<!--end::Section-->

											<!--begin::Section-->
											

											<!--end::Section-->
										</div>
                                        
                                        
                                        
                                        
                                        <div class="kt-container">
                                        <?php if (isset($status)) : ?>
                                            <?php if ($status['status']==1) : ?>
                                                <div class="alert alert-success"><?= $status['message'] ?></div>
                                            <?php else : ?>
                                                <div class="alert alert-danger"><?= $status['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
                                        </div>
                                        
                                        <div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												 Client Profile
 
												</h3>
											</div>
                                            
										</div>
                                        
                                        <div class="kt-portlet__body">

											<!--begin::Section-->
											<div class="kt-section">
												
												<div class="kt-section__content">
													<table class="table2">
													
															<tr>
																<td width="23%"><img src="<?= base_url('public/owner/images/customer') ?><?php echo "/".$profile->ProfilePic ?>" width="80" height="79" alt="">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                                                <td width="35%"> <strong><?= $profile->FirstName ?> <?= $profile->LastName ?></strong><br>
<?= $profile->Position ?><br>
<?= $profile->City ?>, <?= $profile->CountryName ?> </td>
                                                                <td>
                                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />
																	<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />
																</g>
															</svg></td>
    <td><?= $profile->EmailId ?></td>
  </tr>
  <tr>
    <td><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M11.914857,14.1427403 L14.1188827,11.9387145 C14.7276032,11.329994 14.8785122,10.4000511 14.4935235,9.63007378 L14.3686433,9.38031323 C13.9836546,8.61033591 14.1345636,7.680393 14.7432841,7.07167248 L17.4760882,4.33886839 C17.6713503,4.14360624 17.9879328,4.14360624 18.183195,4.33886839 C18.2211956,4.37686904 18.2528214,4.42074752 18.2768552,4.46881498 L19.3808309,6.67676638 C20.2253855,8.3658756 19.8943345,10.4059034 18.5589765,11.7412615 L12.560151,17.740087 C11.1066115,19.1936265 8.95659008,19.7011777 7.00646221,19.0511351 L4.5919826,18.2463085 C4.33001094,18.1589846 4.18843095,17.8758246 4.27575484,17.613853 C4.30030124,17.5402138 4.34165566,17.4733009 4.39654309,17.4184135 L7.04781491,14.7671417 C7.65653544,14.1584211 8.58647835,14.0075122 9.35645567,14.3925008 L9.60621621,14.5173811 C10.3761935,14.9023698 11.3061364,14.7514608 11.914857,14.1427403 Z" fill="#000000" />
																</g>
															</svg></td>
    <td><?= $profile->Phone ?></td>
  </tr>
</table>

                                                                </td>
                                                                </tr>
														
													</table>
												</div>
											</div>

											<!--end::Section-->

											<!--begin::Section-->
											

											<!--end::Section-->
										</div>

										<!--end::Form-->
                                        
                                        
                                        
                                        <div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												 Client Brief 
 
												</h3>
											</div>
										</div>
                                        
                                        <div class="kt-portlet__body">

											<!--begin::Section-->
											<div class="kt-section">
												<table class="client-brief col-md-8 col-sm-9 col-xm-12 table">
													<tr>
														<td>
															<strong>User Name : </strong>
															<div class="kt-section__content">
																<?= $profile->UserName ?>
															</div>
														</td>
														<td>
															<strong>Position : </strong>
															<div class="kt-section__content">
																<?= $profile->Position ?>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<strong>Time Zone : </strong>
															<div class="kt-section__content">
																<?= $profile->TimeZone ?>
															</div>
														</td>
														<td>
															<strong>Birth Of Date : </strong>
															<div class="kt-section__content">
																<?= $profile->BOD ?>
															</div>
														</td>
													</tr>
													<tr>
														<td colspan="2">
															<strong>Address : </strong>
															<div class="kt-section__content">
																<?= $profile->Address ?>
															</div>
														</td>
													</tr>
													<tr><td></td><td></td></tr>
												</table>
												
												<!-- <div class="kt-section__content">
                                                <div class="ds_click">
													<a href="#">Click here</a> to complete your client brief </div>
												</div> -->
											</div>

											<!--end::Section-->

											<!--begin::Section-->
											

											<!--end::Section-->
										</div>
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