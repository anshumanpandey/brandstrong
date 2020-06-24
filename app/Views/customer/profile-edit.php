<?php
	include "header.php";
?>

					<!-- end:: Header -->
					<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

						<!-- begin:: Subheader -->
						

						<!-- end:: Subheader -->

						<!-- begin:: Content -->
						<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
							<div class="row">
								<div class="col-xl-12">

									<!--begin::Portlet-->
									<div class="kt-portlet">
									    
                                        <div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
												 Edit Profile
 
												</h3>
											</div>
                                            
										</div>
                                     
                                        
                                        <div class="kt-portlet__body">
                                        	<form class="kt-form" action="<?= base_url('profile') ?>" method="post" enctype='multipart/form-data' >
											<!--begin::Section-->
											<div class="kt-section">
												
												<div class="kt-section__content">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        
                                                <?php if (isset($status)) : ?>
                                            <?php if ($status['status']==1) : ?>
                                                <div class="alert alert-success"><?= $status['message'] ?></div>
                                            <?php else : ?>
                                                <div class="alert alert-danger"><?= $status['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
                                                
                                                    </div>
                                                </div>
                                                <div class="row">

                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" placeholder="First Name" required="" name="FirstName" pattern="[a-zA-Z ]+" value="<?= $profile->FirstName ?>" title="Please Enter Valid Name" >
												</div>
                                                </div>
                                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name" required="" value="<?= $profile->LastName ?>"  name="LastName" pattern="[a-zA-Z ]+" title="Please Enter Valid Name" >
												</div>
                                                </div>
                                                
                                                
                                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Company Name</label>
													<input type="text" class="form-control" placeholder="Company Name" value="<?= $profile->Company ?>" name="Company" required="">
																									</div>
                                                </div>
                                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Position</label>
													<input type="text" class="form-control" placeholder="Position" value="<?= $profile->Position ?>" name="Position" required="" >
																									</div>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="input-group">
                                                <label style="width: 100%;font-weight: 400;">Birthday</label>
													<input type="date" class="form-control" placeholder="Select date" value="<?= $profile->BOD ?>" name="BOD" required="" />
													
												</div>
                                                </div>
                                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Address</label>
													<input type="text" class="form-control" placeholder="Enter Address" value="<?= $profile->Address ?>" name="Address" required="">
																									</div>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>City</label>
													<input type="text" class="form-control" name="City" placeholder="City Name" required=""  pattern="[a-zA-Z ]+" value="<?= $profile->City ?>" title="Enter Valid City Name" >
																									</div>
                                                </div>
                                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Country</label>
													<select class="form-control" name="CountryId" required="">
													<option value="">--Country--</option>
													 <?php
		                                                   foreach ($country as $single) {
		                                                   		if($single->CountryId==$profile->CountryId){
		                                                   			?>
		                                                <option value="<?= $single->CountryId ?>" selected><?= $single->Name ?></option>
		                                                   			<?php
		                                                   		}else{
		                                                   			?>
		                                                <option value="<?= $single->CountryId ?>"><?= $single->Name ?></option>
		                                                   			<?php
		                                                   		}
		                                                ?>
		                                                <?php
		                                               }
		                                           ?>				
												</select>
																									</div>
                                                </div>
                                                
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Phone Number</label>
													<input class="form-control" type="text" placeholder="Username" name="Phone" autocomplete="off" required="" value="<?= $profile->Phone ?>" pattern="[0-9]{10}" title="Please Enter 10 digit phone no">
																									</div>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>User Name</label>
													<input type="text" value="<?= $profile->UserName ?>" class="form-control" placeholder="User Name" disabled>
																									</div>
                                                </div>
                                                
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">
													<label>Email Address</label>
													<input class="form-control" type="email" placeholder="Email Address" name="EmailId" autocomplete="off" value="<?= $profile->EmailId ?>"  required="">
												</div>
                                                 <div class="form-group">
                                                <label>Timezone</label>
                                                    <select class="form-control" name="TimeZone" required="">
                                                    <option value="">--Timezone--</option>
                                                                  <option value="Pacific/Midway" <?php if('Pacific/Midway'==$profile->TimeZone){ echo "selected"; }?>>(GMT-11:00) Midway Island</option>
                                                                    <option <?php if('US/Samoa'==$profile->TimeZone){ echo "selected"; }?> value="US/Samoa">(GMT-11:00) Samoa</option>
                                                                    <option <?php if('US/Hawaii'==$profile->TimeZone){ echo "selected"; }?> value="US/Hawaii">(GMT-10:00) Hawaii</option>
                                                                    <option <?php if('US/Alaska'==$profile->TimeZone){ echo "selected"; }?> value="US/Alaska">(GMT-09:00) Alaska</option>
                                                                    <option <?php if('US/Pacific'==$profile->TimeZone){ echo "selected"; }?> value="US/Pacific">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                                    <option <?php if('America/Tijuana'==$profile->TimeZone){ echo "selected"; }?> value="America/Tijuana">(GMT-08:00) Tijuana</option>
                                                                    <option <?php if('US/Arizona'==$profile->TimeZone){ echo "selected"; }?> value="US/Arizona">(GMT-07:00) Arizona</option>
                                                                    <option <?php if('US/Mountain'==$profile->TimeZone){ echo "selected"; }?> value="US/Mountain">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                                    <option <?php if('America/Chihuahua'==$profile->TimeZone){ echo "selected"; }?> value="America/Chihuahua">(GMT-07:00) Chihuahua</option>
                                                                    <option <?php if('America/Mazatlan'==$profile->TimeZone){ echo "selected"; }?> value="America/Mazatlan">(GMT-07:00) Mazatlan</option>
                                                                    <option <?php if('America/Mexico_City'==$profile->TimeZone){ echo "selected"; }?> value="America/Mexico_City">(GMT-06:00) Mexico City</option>
                                                                    <option <?php if('America/Monterrey'==$profile->TimeZone){ echo "selected"; }?> value="America/Monterrey">(GMT-06:00) Monterrey</option>
                                                                    <option <?php if('Canada/Saskatchewan'==$profile->TimeZone){ echo "selected"; }?> value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                                    <option <?php if('US/Central'==$profile->TimeZone){ echo "selected"; }?> value="US/Central">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                                    <option <?php if('US/Eastern'==$profile->TimeZone){ echo "selected"; }?> value="US/Eastern">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                                    <option <?php if('US/East-Indiana'==$profile->TimeZone){ echo "selected"; }?> value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                                                                    <option <?php if('America/Bogota'==$profile->TimeZone){ echo "selected"; }?> value="America/Bogota">(GMT-05:00) Bogota</option>
                                                                    <option <?php if('America/Lima'==$profile->TimeZone){ echo "selected"; }?> value="America/Lima">(GMT-05:00) Lima</option>
                                                                    <option <?php if('America/Caracas'==$profile->TimeZone){ echo "selected"; }?> value="America/Caracas">(GMT-04:30) Caracas</option>
                                                                    <option <?php if('Canada/Atlantic'==$profile->TimeZone){ echo "selected"; }?> value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                                                                    <option <?php if('America/La_Paz'==$profile->TimeZone){ echo "selected"; }?> value="America/La_Paz">(GMT-04:00) La Paz</option>
                                                                    <option <?php if('America/Santiago'==$profile->TimeZone){ echo "selected"; }?> value="America/Santiago">(GMT-04:00) Santiago</option>
                                                                    <option <?php if('Canada/Newfoundland'==$profile->TimeZone){ echo "selected"; }?> value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
                                                                    <option <?php if('America/Buenos_Aires'==$profile->TimeZone){ echo "selected"; }?> value="America/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                                                                    <option <?php if('Greenland'==$profile->TimeZone){ echo "selected"; }?> value="Greenland">(GMT-03:00) Greenland</option>
                                                                    <option <?php if('Atlantic/Stanley'==$profile->TimeZone){ echo "selected"; }?> value="Atlantic/Stanley">(GMT-02:00) Stanley</option>
                                                                    <option <?php if('Atlantic/Azores'==$profile->TimeZone){ echo "selected"; }?> value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                                    <option <?php if('Atlantic/Cape_Verde'==$profile->TimeZone){ echo "selected"; }?> value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                                    <option <?php if('Africa/Casablanca'==$profile->TimeZone){ echo "selected"; }?> value="Africa/Casablanca">(GMT) Casablanca</option>
                                                                    <option <?php if('Europe/Dublin'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Dublin">(GMT) Dublin</option>
                                                                    <option <?php if('Europe/Lisbon'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Lisbon">(GMT) Lisbon</option>
                                                                    <option <?php if('Europe/London'==$profile->TimeZone){ echo "selected"; }?> value="Europe/London">(GMT) London</option>
                                                                    <option <?php if('Africa/Monrovia'==$profile->TimeZone){ echo "selected"; }?> value="Africa/Monrovia">(GMT) Monrovia</option>
                                                                    <option <?php if('Europe/Amsterdam'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Amsterdam">(GMT+01:00) Amsterdam</option>
                                                                    <option <?php if('Europe/Belgrade'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Belgrade">(GMT+01:00) Belgrade</option>
                                                                    <option <?php if('Europe/Berlin'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Berlin">(GMT+01:00) Berlin</option>
                                                                    <option <?php if('Europe/Bratislava'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Bratislava">(GMT+01:00) Bratislava</option>
                                                                    <option <?php if('Europe/Brussels'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Brussels">(GMT+01:00) Brussels</option>
                                                                    <option <?php if('Europe/Budapest'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Budapest">(GMT+01:00) Budapest</option>
                                                                    <option <?php if('Europe/Copenhagen'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Copenhagen">(GMT+01:00) Copenhagen</option>
                                                                    <option <?php if('Europe/Ljubljana'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Ljubljana">(GMT+01:00) Ljubljana</option>
                                                                    <option <?php if('Europe/Madrid'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Madrid">(GMT+01:00) Madrid</option>
                                                                    <option <?php if('Europe/Paris'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Paris">(GMT+01:00) Paris</option>
                                                                    <option <?php if('Europe/Prague'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Prague">(GMT+01:00) Prague</option>
                                                                    <option <?php if('Europe/Rome'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Rome">(GMT+01:00) Rome</option>
                                                                    <option <?php if('Europe/Sarajevo'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Sarajevo">(GMT+01:00) Sarajevo</option>
                                                                    <option <?php if('Europe/Skopje'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Skopje">(GMT+01:00) Skopje</option>
                                                                    <option <?php if('Europe/Stockholm'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Stockholm">(GMT+01:00) Stockholm</option>
                                                                    <option <?php if('Europe/Vienna'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Vienna">(GMT+01:00) Vienna</option>
                                                                    <option <?php if('Europe/Warsaw'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Warsaw">(GMT+01:00) Warsaw</option>
                                                                    <option <?php if('Europe/Zagreb'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Zagreb">(GMT+01:00) Zagreb</option>
                                                                    <option <?php if('Europe/Athens'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Athens">(GMT+02:00) Athens</option>
                                                                    <option <?php if('Europe/Bucharest'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Bucharest">(GMT+02:00) Bucharest</option>
                                                                    <option <?php if('Africa/Cairo'==$profile->TimeZone){ echo "selected"; }?> value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                                    <option <?php if('Africa/Harare'==$profile->TimeZone){ echo "selected"; }?> value="Africa/Harare">(GMT+02:00) Harare</option>
                                                                    <option <?php if('Europe/Helsinki'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Helsinki">(GMT+02:00) Helsinki</option>
                                                                    <option <?php if('Europe/Istanbul'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Istanbul">(GMT+02:00) Istanbul</option>
                                                                    <option <?php if('Asia/Jerusalem'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                                    <option <?php if('Europe/Kiev'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Kiev">(GMT+02:00) Kyiv</option>
                                                                    <option <?php if('Europe/Minsk'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                                    <option <?php if('Europe/Riga'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Riga">(GMT+02:00) Riga</option>
                                                                    <option <?php if('Europe/Sofia'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Sofia">(GMT+02:00) Sofia</option>
                                                                    <option <?php if('Europe/Tallinn'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Tallinn">(GMT+02:00) Tallinn</option>
                                                                    <option <?php if('Europe/Vilnius'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Vilnius">(GMT+02:00) Vilnius</option>
                                                                    <option <?php if('Asia/Baghdad'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Baghdad">(GMT+03:00) Baghdad</option>
                                                                    <option <?php if('Asia/Kuwait'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Kuwait">(GMT+03:00) Kuwait</option>
                                                                    <option <?php if('Africa/Nairobi'==$profile->TimeZone){ echo "selected"; }?> value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                                                                    <option <?php if('Asia/Riyadh'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Riyadh">(GMT+03:00) Riyadh</option>
                                                                    <option <?php if('Europe/Moscow'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Moscow">(GMT+03:00) Moscow</option>
                                                                    <option <?php if('Asia/Tehran'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                                    <option <?php if('Asia/Baku'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Baku">(GMT+04:00) Baku</option>
                                                                    <option <?php if('Europe/Volgograd'==$profile->TimeZone){ echo "selected"; }?> value="Europe/Volgograd">(GMT+04:00) Volgograd</option>
                                                                    <option <?php if('Asia/Muscat'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Muscat">(GMT+04:00) Muscat</option>
                                                                    <option <?php if('Asia/Tbilisi'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Tbilisi">(GMT+04:00) Tbilisi</option>
                                                                    <option <?php if('Asia/Yerevan'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                                    <option <?php if('Asia/Kabul'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                                    <option <?php if('Asia/Karachi'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Karachi">(GMT+05:00) Karachi</option>
                                                                    <option <?php if('Asia/Tashkent'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
                                                                    <option <?php if('Asia/Kolkata'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Kolkata">(GMT+05:30) Kolkata</option>
                                                                    <option <?php if('Asia/Kathmandu'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Kathmandu">(GMT+05:45) Kathmandu</option>
                                                                    <option <?php if('Asia/Yekaterinburg'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Yekaterinburg">(GMT+06:00) Ekaterinburg</option>
                                                                    <option <?php if('Asia/Almaty'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Almaty">(GMT+06:00) Almaty</option>
                                                                    <option <?php if('Asia/Dhaka'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Dhaka">(GMT+06:00) Dhaka</option>
                                                                    <option <?php if('Asia/Novosibirsk'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                                    <option <?php if('Asia/Bangkok'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Bangkok">(GMT+07:00) Bangkok</option>
                                                                    <option <?php if('Asia/Jakarta'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Jakarta">(GMT+07:00) Jakarta</option>
                                                                    <option <?php if('Asia/Krasnoyarsk'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Krasnoyarsk">(GMT+08:00) Krasnoyarsk</option>
                                                                    <option <?php if('Asia/Chongqing'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Chongqing">(GMT+08:00) Chongqing</option>
                                                                    <option <?php if('Asia/Hong_Kong'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Hong_Kong">(GMT+08:00) Hong Kong</option>
                                                                    <option <?php if('Asia/Kuala_Lumpur'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                                    <option <?php if('Australia/Perth'==$profile->TimeZone){ echo "selected"; }?> value="Australia/Perth">(GMT+08:00) Perth</option>
                                                                    <option <?php if('Asia/Singapore'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Singapore">(GMT+08:00) Singapore</option>
                                                                    <option <?php if('Asia/Taipei'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Taipei">(GMT+08:00) Taipei</option>
                                                                    <option <?php if('Asia/Ulaanbaatar'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Ulaanbaatar">(GMT+08:00) Ulaan Bataar</option>
                                                                    <option <?php if('Asia/Urumqi'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Urumqi">(GMT+08:00) Urumqi</option>
                                                                    <option <?php if('Asia/Irkutsk'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Irkutsk">(GMT+09:00) Irkutsk</option>
                                                                    <option <?php if('Asia/Seoul'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                                    <option <?php if('Asia/Tokyo'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Tokyo">(GMT+09:00) Tokyo</option>
                                                                    <option <?php if('Australia/Adelaide'==$profile->TimeZone){ echo "selected"; }?> value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                                    <option <?php if('Australia/Darwin'==$profile->TimeZone){ echo "selected"; }?> value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                                    <option <?php if('Asia/Yakutsk'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Yakutsk">(GMT+10:00) Yakutsk</option>
                                                                    <option <?php if('Australia/Brisbane'==$profile->TimeZone){ echo "selected"; }?> value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                                    <option <?php if('Australia/Canberra'==$profile->TimeZone){ echo "selected"; }?> value="Australia/Canberra">(GMT+10:00) Canberra</option>
                                                                    <option <?php if('Pacific/Guam'==$profile->TimeZone){ echo "selected"; }?> value="Pacific/Guam">(GMT+10:00) Guam</option>
                                                                    <option <?php if('Australia/Hobart'==$profile->TimeZone){ echo "selected"; }?> value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                                    <option <?php if('Australia/Melbourne'==$profile->TimeZone){ echo "selected"; }?> value="Australia/Melbourne">(GMT+10:00) Melbourne</option>
                                                                    <option <?php if('Pacific/Port_Moresby'==$profile->TimeZone){ echo "selected"; }?> value="Pacific/Port_Moresby">(GMT+10:00) Port Moresby</option>
                                                                    <option <?php if('Australia/Sydney'==$profile->TimeZone){ echo "selected"; }?> value="Australia/Sydney">(GMT+10:00) Sydney</option>
                                                                    <option <?php if('Asia/Vladivostok'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Vladivostok">(GMT+11:00) Vladivostok</option>
                                                                    <option <?php if('Asia/Magadan'==$profile->TimeZone){ echo "selected"; }?> value="Asia/Magadan">(GMT+12:00) Magadan</option>
                                                                    <option <?php if('Pacific/Auckland'==$profile->TimeZone){ echo "selected"; }?> value="Pacific/Auckland">(GMT+12:00) Auckland</option>
                                                                    <option <?php if('Pacific/Fiji'==$profile->TimeZone){ echo "selected"; }?> value="Pacific/Fiji">(GMT+12:00) Fiji</option>
                                        </select>
                                                                                                    </div>
                                                </div>
                                                
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                <div class="form-group">


                                                    <div class="upload-images">
                                                                    <div  class="image-block">
                                                                        <img src='<?= base_url("public/owner/images/customer/$profile->ProfilePic") ?>' id="logofile" style="width: 100px;height: 100px;" />
                                                                    </div>
                                                                    <input type="file"  onchange="readURL( this,'logofile');" name="ProfilePic" class="upload_input">
                                                                </div>


                                              <!--  <span style="width: 100%;font-weight: 400;">Profile Picture</span>
													<div class="custom-file" style="margin: 6px 0 0 0;">
  <input type="file" class="custom-file-input" name="ProfilePic" id="customFileLang" lang="in">
  <label class="custom-file-label" for="customFileLang"> </label> 
</div>-->
										          </div>
                                                </div>
                                            
                                                
                                                </div>
                                                
                                                
                                            <div class="kt-form__actions">
													<button type="text" class="btn btn-primary" style="background-color:#fcc433; color: #ffffff; border:0px;">Edit Profile</button>
													
												</div>    
                                                
                                                
                                                
                                                
												</div>
											</div>

											<!--end::Section-->

											<!--begin::Section-->
											
</form>
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
