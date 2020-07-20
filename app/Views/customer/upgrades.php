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
                        PLAN UPGRADE
                     </h3>
                     <br>
                  </div>
               </div>
               <div class="ds_header3">
                  <div class="ds_header">
                     <p>We want you to feel happy with our work. Upgrading would be an awesome choice!</p>
                  </div>
               </div>
               <div class="kt-portlet__head">
                  <div class="kt-portlet__head-label ds_header2">
                     <h2 class="kt-portlet__head-title ds_header">
                        Your trial ended: 26 days ago
                     </h2>
                  </div>
               </div>
               <div class="kt-portlet__head">
                  <div class="kt-portlet__head-label ds_header2">
                     <div class="row" style="width:100%;">
                        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                           <table class="" width="100%">
                              <tr>
                                 <!-- <td width="25%"><button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="modal" data-target="#kt_modal_1" style="background-color:#1b1c38; border:1px #1b1c38 solid; color:#FFF; "> Add Payment Source</button></td>
                                    <td width="25%">
                                    	<button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="" data-target="" style="background-color:#517b24; border:1px #517b24 solid; color:#FFF; ">Activate Subscription</button>
                                    </td>
                                                                     <td width="30%">
                                    	<button type="button" class="btn btn-bold btn-label-brand btn-sm" data-toggle="" data-target="" style="background-color:#fcc433; border:1px #fcc433 solid; color:#FFF; ">Reactivate Subscription </button>
                                    </td> -->
                                 <td width="20%">
                                 </td>
                              </tr>
                           </table>
                        </div>
                        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                           <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                 <td>
                                    <div class="form-group ">
                                       <div class="input-group">
                                          <input type="text" class="form-control" placeholder="Add Coupon here..">
                                          <div class="input-group-append">
                                             <button class="btn btn-secondary" type="button" style="background-color:#fcc433; border:1px #fcc433 solid; color:#FFF; ">Add Coupon</button>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               	<div class="kt-portlet">
                  	<div class="kt-portlet__body">
                    	<div class="row" style="width:100%;">
							<?php foreach ($subscriptions as $key => $subscription) { 
								$isPlanPurchased = (session('CustomerSubscriptionID') == $subscription['plan_id']) ? 1 : 0; 
							?>
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
									<div class="ds_ser_img"><img src="<?=base_url('public/customer/assets/images/up1.png')?>" alt=""></div>
									<div class="<?php echo ($isPlanPurchased) ? 'ds_ser' : 'bs-white'; ?>">                              
									<div class="<?php echo ($isPlanPurchased) ? 'bs-yellow' : 'bs-white2'; ?>"><strong><?php echo $subscription['name'] ?></strong></div>
									<div class="<?php echo ($isPlanPurchased) ? 'bs-yellow2' : 'bs-white3'; ?>">
										<h3>USD $<?php echo $subscription['price']; ?></h3>
										<p>Every Month</p>
									</div>
									<div class="<?php echo ($isPlanPurchased) ? 'bs-yellow3' : 'bs-white4'; ?>">
										<ul>
											<?php echo ($subscription['access_to_training_tools'] == 1) ? '<li>Access to Training & Tools</li>' : ''; ?>
											<?php echo '<li>'.$subscription['no_active_marketing_request'].' Active Marketing Requests</li>'; ?>
											<?php echo ($subscription['marketing_review'] == 1) ? '<li>Marketing Review</li>' : ''; ?>
											<?php echo ($subscription['brand_style_guide'] == 1) ? '<li>Brand Style Guide</li>' : ''; ?>
											<?php echo ($subscription['monthly_website_analytics'] == 1) ? '<li>Monthly Website Analytics</li>' : ''; ?>
											<?php echo ($subscription['rush_job_access'] == 1) ? '<li>Rush Job Access</li>' : ''; ?>
											<?php echo ($subscription['team_accounts'] == 1) ? '<li>Team Accounts</li>' : ''; ?>
											<?php echo ($subscription['paid_stock_photos'] == 1) ? '<li>Paid Stock Photos</li>' : ''; ?>
											<?php echo ($subscription['dedicated_support'] == 1) ? '<li>Dedicated Support</li>' : ''; ?>
										</ul>
									</div>
								</div>
								<?php if ($isPlanPurchased) { ?>
									<button style="background-color:#fcc433; border:1px #fcc433 solid; color:#FFF; padding: 9px 33px;border-radius: 5px;" class="btn btn-info btn-block">Subscription Activated</button>
								<?php } else { ?>
									<button style="background-color:#fcc433; border:1px #fcc433 solid; color:#FFF; padding: 9px 33px;border-radius: 5px;" class="btn btn-info btn-block" onclick="pay(<?php echo $subscription['price'] ?>, <?php echo "'".$subscription['stripe_plan_id']."'"; ?>, <?php echo $subscription['plan_id'] ?>)">Activate Subscription</button>
								<?php } ?>
								
								</div>
							<?php } ?>
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
<div class="container">
<div class="row">
<div class="col-md-12">
   <pre id="token_response"></pre>
</div>
<?php
include "footer.php";
?>