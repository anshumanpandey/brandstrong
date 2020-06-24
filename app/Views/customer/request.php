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
												 Create a job request
												</h3><br>
                                                
											</div>
                                            
										</div>
                                        <div class="ds_header3">
											<div class="ds_header"><p>Load that job and let's get rolling! </p> </div>
                                            
										</div>
                                        
										
                                       <div class="kt-portlet">
										
										<div class="kt-portlet__body">
											<ul class="nav nav-tabs nav-fill" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#ds_tab">ALL</a>
												</li>
												<?php
                                                foreach ($maincate as $single) {
                                                    ?>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#ds_tab<?= $single->MainCateId ?>"><?= $single->Name ?></a>
                                                    </li>
                                                
                                                    <?php
                                                }
                                                ?>
                                         	</ul>
											<div class="tab-content">
												<div class="tab-pane active" id="ds_tab" role="tabpanel">
													<div class="ds_tab">
                                                    <ul>
                                                        <?php
                                                     foreach ($subcate as $item) {
                                                        ?>
                                                    <li><a href='<?= base_url("request/info/$item->SubCateId") ?>'>
                                                    <img src='<?= base_url("public/owner/images/category/$item->Logo") ?>' alt="">
                                                    <p style="height: 40px;overflow: hidden;"><?= $item->Name ?></p></a>
                                                    </li>
                                                    <?php
                                                        }
                                                    ?>
                                                    </ul>
                                                    </div>
												</div>

												<?php
                                                foreach ($maincate as $single) {
                                                    ?>
                                                <div class="tab-pane" id="ds_tab<?= $single->MainCateId ?>" role="tabpanel">
													<div class="ds_tab">
                                                    <ul>
                                                        <?php
                                                            $db=\Config\Database::connect();
                                                            $subcate=$db->table('subcate')->where('MainCateId',$single->MainCateId)->get()->getResult();
                                                            foreach ($subcate as $item) {
                                                        ?>
                                                    <li><a href='<?= base_url("request/info/$item->SubCateId") ?>'>
                                                    <img src='<?= base_url("public/owner/images/category/$item->Logo") ?>' alt="">
                                                    <p style="height: 40px;overflow: hidden;"><?= $item->Name ?></p></a>
                                                    </li>
                                                    <?php
                                                        }
                                                    ?>
                                                  </ul>
                                                    </div>
												</div>
											         <?php
                                                }
                                                ?>
                                            
											</div>
										</div>
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