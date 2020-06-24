<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
		<head>
		
		<meta charset="utf-8" />
		<title>Lobby</title>
		<meta name="description" content="Static table examples">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<?= base_url('public/customer/assets/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('public/customer/assets/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="<?= base_url('public/customer/assets/css/skins/header/base/light.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('public/customer/assets/css/skins/header/menu/light.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('public/customer/assets/css/skins/brand/dark.css') ?>" rel="stylesheet" type="text/css" />
		<link href="<?= base_url('public/customer/assets/css/skins/aside/dark.css') ?>" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<?= base_url('public/customer/assets/media/logos/favicon.ico') ?>" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">

					<!--begin::Aside-->
					<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside ds_wel_text_cont" style='background-image: url("<?= base_url('public/customer/assets/media/bg/bg-4.jpg') ?>");'>
						<div class="kt-grid__item">
						</div>
						<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver ds_wel_text">
							<div class="kt-grid__item kt-grid__item--middle">
								<a href="#" class="kt-login__logo">
									<img src="<?= base_url('public/customer/assets/media/logos/logo-4.png') ?>">
								</a>
								<h3 class="kt-login__title">Welcome to Lobby!</h3>
								<h4 class="kt-login__subtitle">The ultimate Bootstrap & Angular 6 admin theme framework for next generation web apps.</h4>
							</div>
						</div>
						<div class="kt-grid__item">
							<div class="kt-login__info">
								<div class="kt-login__copyright">
									&copy 2018 Metronic
								</div>
								<div class="kt-login__menu">
									<a href="#" class="kt-link">Privacy</a>
									<a href="#" class="kt-link">Legal</a>
									<a href="#" class="kt-link">Contact</a>
								</div>
							</div>
						</div>
					</div>

					<!--begin::Aside-->

					<!--begin::Content-->
					<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">


						<!--begin::Body-->
						<div class="kt-login__body" style="padding: 50px 74px;">

							<!--begin::Signin-->
							<div class="kt-login__form">
								<div class="kt-login__title">
									<h3>CREATE AN ACCOUNT</h3>
                               <p> Create an account to load design requests to our talented designers. Already have a Flight Control account? <a href="<?= base_url('/') ?>">Log in here</a>.</p> </div>

								<!--begin::Form-->
								<form class="kt-form" action="<?= base_url('signup') ?>" method="post" id="kt_login_form">
                                
                                	<?php if (isset($status)) : ?>
                                            <?php if ($status['status']==1) : ?>
                                                <div class="alert alert-success"><?= $status['message'] ?></div>
                                            <?php else : ?>
                                                <div class="alert alert-danger"><?= $status['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
        
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<div class="form-group" style="margin: 0 0 11px 0;">
                                        <label for="" class="bs-black">First Name</label>
										<input class="form-control" type="text" placeholder="First Name" name="FirstName" autocomplete="off" required="" pattern="[a-zA-Z ]+" title="Please Enter Valid Name">
									</div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="form-group" style="margin: 0 0 11px 0;">
                                       <label for="" class="bs-black">Last Name</label>
										<input class="form-control" type="text" placeholder="Last Name" name="LastName" autocomplete="off" required="" pattern="[a-zA-Z ]+" title="Please Enter Valid Name">
									</div>
                                        </div>
										</div>
                                
                                <div class="form-group" style="margin: 0 0 11px 0;">
                                <label for="" class="bs-black">Company</label>
										<input class="form-control" type="text" placeholder="Company" name="Company" autocomplete="off" required="">
									</div>
                                
                                <div class="form-group" style="margin: 0 0 11px 0;">
                                <label for="" class="bs-black">Email Address</label>
										<input class="form-control" type="email" placeholder="Email Address" name="EmailId" autocomplete="off"  required="">
									</div>
                                
                               
                                
                                
									<div class="form-group" style="margin: 0 0 11px 0;">
                                    <label for="" class="bs-black">Phone</label>
										<input class="form-control" type="text" placeholder="Username" name="Phone" autocomplete="off" required="" pattern="[0-9]{10}" title="Please Enter 10 digit phone no">
									</div>
									 <div class="form-group" style="margin: 0 0 11px 0;">
                                		<label for="" class="bs-black">Timezone</label>
										<select class="form-control" name="TimeZone" required="">
											<option value="">--Timezone--</option>
								                                  <option value="Pacific/Midway">(GMT-11:00) Midway Island</option>
                                                                    <option value="US/Samoa">(GMT-11:00) Samoa</option>
                                                                    <option value="US/Hawaii">(GMT-10:00) Hawaii</option>
                                                                    <option value="US/Alaska">(GMT-09:00) Alaska</option>
                                                                    <option value="US/Pacific">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                                                                    <option value="America/Tijuana">(GMT-08:00) Tijuana</option>
                                                                    <option value="US/Arizona">(GMT-07:00) Arizona</option>
                                                                    <option value="US/Mountain">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
                                                                    <option value="America/Chihuahua">(GMT-07:00) Chihuahua</option>
                                                                    <option value="America/Mazatlan">(GMT-07:00) Mazatlan</option>
                                                                    <option value="America/Mexico_City">(GMT-06:00) Mexico City</option>
                                                                    <option value="America/Monterrey">(GMT-06:00) Monterrey</option>
                                                                    <option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
                                                                    <option value="US/Central">(GMT-06:00) Central Time (US &amp; Canada)</option>
                                                                    <option value="US/Eastern">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
                                                                    <option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
                                                                    <option value="America/Bogota">(GMT-05:00) Bogota</option>
                                                                    <option value="America/Lima">(GMT-05:00) Lima</option>
                                                                    <option value="America/Caracas">(GMT-04:30) Caracas</option>
                                                                    <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
                                                                    <option value="America/La_Paz">(GMT-04:00) La Paz</option>
                                                                    <option value="America/Santiago">(GMT-04:00) Santiago</option>
                                                                    <option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
                                                                    <option value="America/Buenos_Aires">(GMT-03:00) Buenos Aires</option>
                                                                    <option value="Greenland">(GMT-03:00) Greenland</option>
                                                                    <option value="Atlantic/Stanley">(GMT-02:00) Stanley</option>
                                                                    <option value="Atlantic/Azores">(GMT-01:00) Azores</option>
                                                                    <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
                                                                    <option value="Africa/Casablanca">(GMT) Casablanca</option>
                                                                    <option value="Europe/Dublin">(GMT) Dublin</option>
                                                                    <option value="Europe/Lisbon">(GMT) Lisbon</option>
                                                                    <option value="Europe/London">(GMT) London</option>
                                                                    <option value="Africa/Monrovia">(GMT) Monrovia</option>
                                                                    <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam</option>
                                                                    <option value="Europe/Belgrade">(GMT+01:00) Belgrade</option>
                                                                    <option value="Europe/Berlin">(GMT+01:00) Berlin</option>
                                                                    <option value="Europe/Bratislava">(GMT+01:00) Bratislava</option>
                                                                    <option value="Europe/Brussels">(GMT+01:00) Brussels</option>
                                                                    <option value="Europe/Budapest">(GMT+01:00) Budapest</option>
                                                                    <option value="Europe/Copenhagen">(GMT+01:00) Copenhagen</option>
                                                                    <option value="Europe/Ljubljana">(GMT+01:00) Ljubljana</option>
                                                                    <option value="Europe/Madrid">(GMT+01:00) Madrid</option>
                                                                    <option value="Europe/Paris">(GMT+01:00) Paris</option>
                                                                    <option value="Europe/Prague">(GMT+01:00) Prague</option>
                                                                    <option value="Europe/Rome">(GMT+01:00) Rome</option>
                                                                    <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo</option>
                                                                    <option value="Europe/Skopje">(GMT+01:00) Skopje</option>
                                                                    <option value="Europe/Stockholm">(GMT+01:00) Stockholm</option>
                                                                    <option value="Europe/Vienna">(GMT+01:00) Vienna</option>
                                                                    <option value="Europe/Warsaw">(GMT+01:00) Warsaw</option>
                                                                    <option value="Europe/Zagreb">(GMT+01:00) Zagreb</option>
                                                                    <option value="Europe/Athens">(GMT+02:00) Athens</option>
                                                                    <option value="Europe/Bucharest">(GMT+02:00) Bucharest</option>
                                                                    <option value="Africa/Cairo">(GMT+02:00) Cairo</option>
                                                                    <option value="Africa/Harare">(GMT+02:00) Harare</option>
                                                                    <option value="Europe/Helsinki">(GMT+02:00) Helsinki</option>
                                                                    <option value="Europe/Istanbul">(GMT+02:00) Istanbul</option>
                                                                    <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
                                                                    <option value="Europe/Kiev">(GMT+02:00) Kyiv</option>
                                                                    <option value="Europe/Minsk">(GMT+02:00) Minsk</option>
                                                                    <option value="Europe/Riga">(GMT+02:00) Riga</option>
                                                                    <option value="Europe/Sofia">(GMT+02:00) Sofia</option>
                                                                    <option value="Europe/Tallinn">(GMT+02:00) Tallinn</option>
                                                                    <option value="Europe/Vilnius">(GMT+02:00) Vilnius</option>
                                                                    <option value="Asia/Baghdad">(GMT+03:00) Baghdad</option>
                                                                    <option value="Asia/Kuwait">(GMT+03:00) Kuwait</option>
                                                                    <option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
                                                                    <option value="Asia/Riyadh">(GMT+03:00) Riyadh</option>
                                                                    <option value="Europe/Moscow">(GMT+03:00) Moscow</option>
                                                                    <option value="Asia/Tehran">(GMT+03:30) Tehran</option>
                                                                    <option value="Asia/Baku">(GMT+04:00) Baku</option>
                                                                    <option value="Europe/Volgograd">(GMT+04:00) Volgograd</option>
                                                                    <option value="Asia/Muscat">(GMT+04:00) Muscat</option>
                                                                    <option value="Asia/Tbilisi">(GMT+04:00) Tbilisi</option>
                                                                    <option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
                                                                    <option value="Asia/Kabul">(GMT+04:30) Kabul</option>
                                                                    <option value="Asia/Karachi">(GMT+05:00) Karachi</option>
                                                                    <option value="Asia/Tashkent">(GMT+05:00) Tashkent</option>
                                                                    <option value="Asia/Kolkata">(GMT+05:30) Kolkata</option>
                                                                    <option value="Asia/Kathmandu">(GMT+05:45) Kathmandu</option>
                                                                    <option value="Asia/Yekaterinburg">(GMT+06:00) Ekaterinburg</option>
                                                                    <option value="Asia/Almaty">(GMT+06:00) Almaty</option>
                                                                    <option value="Asia/Dhaka">(GMT+06:00) Dhaka</option>
                                                                    <option value="Asia/Novosibirsk">(GMT+07:00) Novosibirsk</option>
                                                                    <option value="Asia/Bangkok">(GMT+07:00) Bangkok</option>
                                                                    <option value="Asia/Jakarta">(GMT+07:00) Jakarta</option>
                                                                    <option value="Asia/Krasnoyarsk">(GMT+08:00) Krasnoyarsk</option>
                                                                    <option value="Asia/Chongqing">(GMT+08:00) Chongqing</option>
                                                                    <option value="Asia/Hong_Kong">(GMT+08:00) Hong Kong</option>
                                                                    <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur</option>
                                                                    <option value="Australia/Perth">(GMT+08:00) Perth</option>
                                                                    <option value="Asia/Singapore">(GMT+08:00) Singapore</option>
                                                                    <option value="Asia/Taipei">(GMT+08:00) Taipei</option>
                                                                    <option value="Asia/Ulaanbaatar">(GMT+08:00) Ulaan Bataar</option>
                                                                    <option value="Asia/Urumqi">(GMT+08:00) Urumqi</option>
                                                                    <option value="Asia/Irkutsk">(GMT+09:00) Irkutsk</option>
                                                                    <option value="Asia/Seoul">(GMT+09:00) Seoul</option>
                                                                    <option value="Asia/Tokyo">(GMT+09:00) Tokyo</option>
                                                                    <option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
                                                                    <option value="Australia/Darwin">(GMT+09:30) Darwin</option>
                                                                    <option value="Asia/Yakutsk">(GMT+10:00) Yakutsk</option>
                                                                    <option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
                                                                    <option value="Australia/Canberra">(GMT+10:00) Canberra</option>
                                                                    <option value="Pacific/Guam">(GMT+10:00) Guam</option>
                                                                    <option value="Australia/Hobart">(GMT+10:00) Hobart</option>
                                                                    <option value="Australia/Melbourne">(GMT+10:00) Melbourne</option>
                                                                    <option value="Pacific/Port_Moresby">(GMT+10:00) Port Moresby</option>
                                                                    <option value="Australia/Sydney">(GMT+10:00) Sydney</option>
                                                                    <option value="Asia/Vladivostok">(GMT+11:00) Vladivostok</option>
                                                                    <option value="Asia/Magadan">(GMT+12:00) Magadan</option>
                                                                    <option value="Pacific/Auckland">(GMT+12:00) Auckland</option>
                                                                    <option value="Pacific/Fiji">(GMT+12:00) Fiji</option>
                                  		</select>

									</div>
									<div class="form-group" style="margin: 0 0 11px 0;">
                                    <label for="" class="bs-black">User Name</label>
										<input class="form-control" type="text" placeholder="User Name" name="UserName" autocomplete="off" required="">
									</div>
									<div class="row">
	                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
											<div class="form-group" style="margin: 0 0 11px 0;">
		                                  		<label for="" class="bs-black">Password</label>
												<input class="form-control" type="password" placeholder="Password" name="pass" autocomplete="off" required="" pattern=".{5,}" title="minimum 5 character password">
											</div>
		                                        </div>
		                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
		                                       <div class="form-group" style="margin: 0 0 11px 0;">
		                                       		<label for="" class="bs-black">Confirm Password</label>
													<input class="form-control" type="password" placeholder="Confirm Password" name="cpass" autocomplete="off" required="" pattern=".{5,}" title="minimum 5 character password">
											</div>
	                                    </div>
									</div>
									 <div class="form-group" style="margin: 0 0 11px 0;">
                                	<label for="" class="bs-black">Country</label>
										<select class="form-control" name="CountryId" required="">
											<option value="">--Country--</option>
											 <?php
                                                   foreach ($country as $single) {
                                                ?>
                                                <option value="<?= $single->CountryId ?>"><?= $single->Name ?></option>
                                                <?php
                                               }
                                           ?>				
										</select>
									</div>
									<br/>
						<button type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary" style="width: 100%;">Sign Up</button>
									<!--end::Action-->
								</form>

								<!--end::Form-->
                               
									<!--end::Action-->
							
							</div>

							<!--end::Signin-->
						</div>

						<!--end::Body-->
					</div>

					<!--end::Content-->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?= base_url('public/customer/assets/plugins/global/plugins.bundle.js') ?>" type="text/javascript"></script>
		<script src="<?= base_url('public/customer/assets/js/scripts.bundle.js') ?>" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<?= base_url('public/customer/assets/js/pages/custom/login/login-1.js') ?>" type="text/javascript"></script>

		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>