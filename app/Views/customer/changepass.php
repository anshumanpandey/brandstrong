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
												 Change Password
												</h3>
											</div>
										</div>
										<form  method="post"  action="<?= base_url('changepass') ?>" enctype='multipart/form-data'>
										<div class="kt-portlet__body">
											<?php if (isset($status)) : ?>
                                            <?php if ($status['status']==1) : ?>
                                                <div class="alert alert-success"><?= $status['message'] ?></div>
                                            <?php else : ?>
                                                <div class="alert alert-danger"><?= $status['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
											<div class="form-group row">
												<label class="col-form-label col-lg-2 col-sm-12">Old Password</label>
												<div class="col-lg-6 col-md-9 col-sm-12">
												<input type="password" class="form-control" name="opass" placeholder="Old Password" required=""  pattern=".{5,}" title="minimum 5 character password"/>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-2 col-sm-12">New Password</label>
												<div class="col-lg-6 col-md-9 col-sm-12">
												<input type="password" class="form-control" name="npass" placeholder="New Password" required=""  pattern=".{5,}" title="minimum 5 character password"/>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-form-label col-lg-2 col-sm-12">Confirm Password</label>
												<div class="col-lg-6 col-md-9 col-sm-12">
												<input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required=""  pattern=".{5,}" title="minimum 5 character password"/>
												</div>
											</div>
											
                                          	<div class="kt-form__actions">
												<button type="submit" class="btn btn-primary">Change Password</button>
											</div>  
										</div>
                                        </form>
                                        <br/>
                                        
                                        

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