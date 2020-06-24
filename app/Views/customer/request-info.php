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
									<?php
									if(isset($EditJob)){
?>
	<form action="<?= base_url('request/edit') ?>" enctype='multipart/form-data' method="post">
									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												 <?= $subcate->Name ?>
												</h3>
											</div>
										</div>
                                        
                                        
										<div class="kt-portlet__body">
                                        
											<div class="form-group">
												<label>Project Name *</label>
												<input type="text" class="form-control"  placeholder="Project Name" value="<?= $EditJob->Title ?>" name="Title" required="">
												<input type="hidden" name="JobId" value="<?= $EditJob->JobId ?>">
											</div>
											
                                            <div class="form-group">
                                                
													<div class="kt-checkbox-list">Project Output *
                                                    <div class="row">
                                                    	<?php 
                                                    	$output=explode(',', $subcate->ProjectOutput);
                                                    	$editProjectOutput=explode(',', $EditJob->ProjectOutput);
                                                    	foreach ($output as $item) {
                                                    		if(in_array($item, $editProjectOutput)){
                                                    			?>
                                                    		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-1">
														<label class="kt-checkbox" style=" margin:0 0 0 0;">
															<input type="checkbox" name="ProjectOutput[]" value="<?= $item ?>" checked ><?= $item ?>
															<span></span>
														</label>
                                                        </div>	<?php
                                                    		}else{
                                                    			?>
                                                    		<div class="col-xs-12 col-sm-2 col-md-2 col-lg-1">
														<label class="kt-checkbox" style=" margin:0 0 0 0;">
															<input type="checkbox" name="ProjectOutput[]" value="<?= $item ?>" ><?= $item ?>
															<span></span>
														</label>
                                                        </div>	<?php
                                                    		}
                                                    	?>
                                                    	
                                                        <?php
                                                    	}

                                                    	?>
                                                        </div>
												</div> 
                                                </div>
                                            <div class="form-group">
												<label>Project Description *</label>
												<textarea class="form-control" name="Description"  placeholder="Project Description"><?= $EditJob->Description ?></textarea>
											</div>
	                                     <div class="">
                                           Dimensions? Digital or Print? What's the copy / text? What elements do you want in there? Any preferred colors, style, feel? Do you have samples, pegs, links?
                                            </div> <br/><br/>
                                             <div class="form-group">
												<label>Project Assets </label>
												<input type="file" name="File[]" multiple="" class="form-control" />
										</div> 
											<div class="form-group">
												<label>SPECIAL REQUESTS *</label>
												<textarea class="form-control" name="SpecialRequest"  placeholder="Project Description"><?= $EditJob->SpecialRequest ?>"</textarea>
											</div>
            								<div class="">
                                           <p>Is this urgent? Do you have special instructions with regard to format / delivery of final output or fonts you are allergic to? </p>
                                            </div><br/>
                                                
                                                <br/>
                                                <div class="kt-form__actions">
													<button type="submit" name="submit" class="btn btn-primary">Edit Job</button>
											        <br>
												</div>
                                                
                                                    </div>
                                        
                                        <br/>
                                        
                              				<!--end::Form-->
									</div>
                                    
                                    </form>
								
<?php
									}else{
										?>
									<form action="<?= base_url('request') ?>" enctype='multipart/form-data' method="post">
									<!--begin::Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												 <?= $subcate->Name ?>
												</h3>
											</div>
										</div>
                                        
                                        
										<div class="kt-portlet__body">
                                        
											<div class="form-group">
												<label>Project Name *</label>
												<input type="text" class="form-control"  placeholder="Project Name" name="Title" required="">
												<input type="hidden" name="SubCateId" value="<?= $subcate->SubCateId ?>">
											</div>
											
                                            <div class="form-group">
                                                
													<div class="kt-checkbox-list">Project Output *
                                                    <div class="row">
                                                    	<?php 
                                                    	$output=explode(',', $subcate->ProjectOutput);
                                                    	foreach ($output as $item) {
                                                    	?>
                                                    	<div class="col-xs-12 col-sm-2 col-md-2 col-lg-1">
														<label class="kt-checkbox" style=" margin:0 0 0 0;">
															<input type="checkbox" name="ProjectOutput[]" value="<?= $item ?>" ><?= $item ?>
															<span></span>
														</label>
                                                        </div>
                                                        <?php
                                                    	}

                                                    	?>
                                                        </div>
												</div> 
                                                </div>
                                            <div class="form-group">
												<label>Project Description *</label>
												<textarea class="form-control" name="Description"  placeholder="Project Description">Project Description</textarea>
											</div>
	                                     <div class="">
                                           Dimensions? Digital or Print? What's the copy / text? What elements do you want in there? Any preferred colors, style, feel? Do you have samples, pegs, links?
                                            </div> <br/><br/>
                                             <div class="form-group">
												<label>Project Assets </label>
												<input type="file" name="File[]" multiple="" class="form-control" />
										</div> 
											<div class="form-group">
												<label>SPECIAL REQUESTS *</label>
												<textarea class="form-control" name="SpecialRequest"  placeholder="Project Description">SPECIAL REQUESTS</textarea>
											</div>
            								<div class="">
                                           <p>Is this urgent? Do you have special instructions with regard to format / delivery of final output or fonts you are allergic to? </p>
                                            </div><br/>
                                    	<div class="kt-portlet__head" style="padding: 0px;">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												 Job Questions
												</h3>
											</div>
										</div><br/><br/>
									    		<?php
									    		foreach($question as $item){
									    			?>
									    	<div class="form-group">
												<div>
													<h5 class="kt-portlet__head-title">
														<?= $item->Title ?>
													</h5><br/>
													<p>
														<input type="text" name="answer[]" class="form-control" required="" />
														<input type="hidden" name="QuestionId[]" value="<?= $item->QuestionId ?>"  />
													</p>
												</div>
                                       		</div>
                                        			<?php
									    		}
									    		?>
									    
                                                
                                                
                                                
                                                <br/>
                                                <div class="kt-form__actions">
													<button type="submit" name="submit" value="Hangar" class="btn btn-primary">Save to Hangar</button>
													<button type="submit" name="submit" value="RequestNow" class="btn btn-secondary">Request Now</button>
                                                    <br>
												</div>
                                                
                                                    </div>
                                        
                                        <br/>
                                        
                              				<!--end::Form-->
									</div>
                                    
                                    </form>
								
                                    		<?php
									}
									?>
								
                                    

									<!--end::Portlet-->

									
								</div>
								
							</div>
						</div>

						<!-- end:: Content -->
					</div>

				<?php
	include "footer.php";
?>