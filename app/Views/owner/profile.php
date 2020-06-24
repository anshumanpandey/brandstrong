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
                        <h2 class="content-header-title float-left mb-0"><i class="feather icon-edit"></i> Edit Profile</h2>
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
                                <h4 class="card-title">Edit Profile</h4>
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
                                            <form class="form-horizontal" action="<?= base_url('owner/profile') ?>" enctype='multipart/form-data' method="post" novalidate>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <div class="controls">
                                                                <input type="text" name="FirstName" class="form-control" data-validation-required-message="This field is required" placeholder="First Name" value="<?php echo $profile->FirstName; ?>" data-validation-regex-regex="^[a-zA-Z ]+$" data-validation-regex-message="Must Enter Character And Space Only">
                                                                <input type="hidden" name="OwnerId" value="<?php echo $profile->OwnerId; ?>">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <div class="controls">
                                                                <input type="text" name="LastName" class="form-control" data-validation-required-message="This field is required" placeholder="Last Name" value="<?php echo $profile->LastName; ?>" data-validation-regex-regex="^[a-zA-Z ]+$" data-validation-regex-message="Must Enter Character And Space Only">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email Id</label>
                                                            <div class="controls">
                                                                <input type="email" name="EmailId" class="form-control" data-validation-required-message="This field is required" placeholder="Email Address" value="<?php echo $profile->EmailId; ?>" disabled>
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                            <label>Phone</label>
                                                            <div class="controls">
                                                                <input type="text" name="Phone" class="form-control" data-validation-required-message="This field is required" placeholder="Phone" value="<?php echo $profile->Phone; ?>" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The numeric field may only contain numeric characters.">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Designation</label>
                                                            <div class="controls">
                                                                <input type="text" name="Designation" class="form-control" data-validation-required-message="This field is required" placeholder="Designation" value="<?php echo $profile->Designation; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><h4>Profile Picture</h4></label>
                                                            <div class="controls">
                                                                <div class="upload-images">
                                                                    <div  class="image-block">
                                                                        <img src='<?= base_url("public/owner/images/owner/$profile->ProfilePic") ?>' id="logofile" style="width: 100%;height: 100%;" />
                                                                    </div>
                                                                    <input type="file"  onchange="readURL( this,'logofile');" name="ProfilePic" class="upload_input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Edit</button>
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
