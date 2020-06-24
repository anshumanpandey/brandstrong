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
					<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside ds_wel_text_cont" style="background-image: url('<?= base_url("public/customer/assets/media/bg/bg-4.jpg") ?>');">
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
						<div class="kt-login__body" style="padding: 155px 74px;">

							<!--begin::Signin-->
							<div class="kt-login__form">
								<div class="kt-login__title">
									<h3>SIGN IN</h3>
								</div>

								<!--begin::Form-->
								<form class="kt-form" action="<?= base_url('checklogin') ?>" method="post">
                                
                                
									<?php if (isset($status)) : ?>
                                            <?php if ($status['status']==1) : ?>
                                                <div class="alert alert-success"><?= $status['message'] ?></div>
                                            <?php else : ?>
                                                <div class="alert alert-danger"><?= $status['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
                                                                        
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Username" name="username" autocomplete="off" required="">
									</div>
									<div class="form-group">
										<input class="form-control" type="password" placeholder="Password" name="password" autocomplete="off" required="" pattern=".{5,}" title="minimum 5 character password">
									</div>

									<!--begin::Action-->
									<div class="kt-login__actions" style="margin: 0 0 14px 0;">
                                    <div class="row">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<a href="<?= base_url('forget') ?>" class="kt-link kt-login__link-forgot">
											Forgot Password ?
										</a>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="text-align: right;">
                                       <!--  <a href="#" class="kt-link kt-login__link-forgot">
										<label class="kt-checkbox" style=" margin:0 0 0 0;">
															<input type="checkbox">Remember me
															<span></span>
														</label>
										</a> -->
                                        </div>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-elevate kt-login__btn-primary" style="width: 100%;">Sign In</button>
									<!--end::Action-->
								</form>

								<!--end::Form-->
                                <div class="" style="text-align: center;margin: 50px 0 0 0;">
<p>Don’t have an account? Sign up now or see our pricing.</p>
</div><a href="<?= base_url('signup') ?>" class="btn btn-primary btn-elevate kt-login__btn-primary btn-warning" style="width: 100%; color:#FFF">Sign Up</a>
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