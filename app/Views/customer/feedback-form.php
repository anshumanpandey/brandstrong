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
												 My Feedback
												</h3>
											</div>
										</div>
										<form  method="post"  action="<?= base_url('feedback') ?>" enctype='multipart/form-data' >
										<div class="kt-portlet__body">
											<div class="form-group row">
											<label class="col-form-label col-lg-2 col-sm-12">Title</label>
											<div class="col-lg-6 col-md-9 col-sm-12">
											<input type="text" class="form-control" name="Title" id="kt_maxlength_2" placeholder="" required="" />
											</div>
										</div>
											
                                           <div class="form-group row">
											<label class="col-form-label col-lg-2 col-sm-12">Note</label>
											<div class="col-lg-6 col-md-9 col-sm-12">
											<textarea class="form-control" rows="3" name="Note" required="">Note</textarea>
											</div>
										</div> 
                                            
                                         <div class="form-group row">
											<label class="col-form-label col-lg-2 col-sm-12">Atachments</label>
											<div class="col-lg-6 col-md-9 col-sm-12">
											<input name="File" type="file">
											</div>
										</div>   
                                            
                                          <div class="form-group row">
											<label class="col-form-label col-lg-2 col-sm-12">Tags(Multiple,Comma Seperated)</label>
											<div class="col-lg-6 col-md-9 col-sm-12">
											<input type="text" class="form-control" placeholder="eg. graphic,design,UI,etc." required="" name="Tags" />
											</div>
										</div>  
                                          <div class="kt-form__actions">
													<button type="submit" class="btn btn-primary">Submit</button>
													
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