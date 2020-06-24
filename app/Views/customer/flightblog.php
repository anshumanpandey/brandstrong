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
										
										<?php
										foreach ($flightblog as $single) {
										?>

                                        <div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												  <?= $single->Title ?>
												</h3>
											</div>
										</div>
                                        <div class="kt-portlet__body">
											<div class="kt-section">
	                                            <p><span class="label label-success"><?= $single->Version ?></span></p>
												<p><?= $single->Description ?></p>
	                        					<p>RELEASED: <?= $single->CreatedAt ?></p>
                        					</div>
										</div>
                                        <?php
										}
										?>
                                     
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