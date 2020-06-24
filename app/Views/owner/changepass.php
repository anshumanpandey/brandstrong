<?php include("header.php") ?>
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0"><i class="feather icon-lock"></i> Change Password</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <!-- Input Validation start -->
            <section class="input-validation">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Change Password</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <?php if (! empty($status)) : ?>
                                        <?php if ($status['status']==1) : ?>
                                            <div class="animated fadeOut delay-5s alert alert-success"><?= $status['message'] ?></div>
                                            <?php else : ?>
                                                <div class="animated fadeOut delay-5s alert alert-danger"><?= $status['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
                                            <form class="form-horizontal" action="<?= base_url('owner/changepass') ?>" method="post" novalidate>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Old Password</label>
                                                            <div class="controls">
                                                                <input type="password" name="opass" class="form-control" data-validation-required-message="This field is required" placeholder="Old Password"  minlength="5">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>New Password</label>
                                                            <div class="controls">
                                                                <input type="password" name="npass" class="form-control" data-validation-required-message="This field is required" placeholder="New Password"  minlength="5">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Confirm Password</label>
                                                            <div class="controls">
                                                                <input type="password" name="cpass" class="form-control" data-validation-required-message="This field is required" placeholder="Confirm Password"  minlength="5"  data-validation-match-match="npass">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Change Password</button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->
        </div>
    </div>
</div>
<!-- END: Content-->
<?php include("footer.php") ?>
