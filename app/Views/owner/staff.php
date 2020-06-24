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
                        <h2 class="content-header-title float-left mb-0"><i class="feather icon-users"></i> Manage Staff</h2>
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
                                <h4 class="card-title">Manage Staff</h4>
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
                                        <?php
                                        if(isset($editData))
                                        {
                                            ?>
                                            <form class="form-horizontal" action="<?= base_url('owner/staff/edit') ?>" enctype='multipart/form-data' method="post" novalidate>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <div class="controls">
                                                                <input type="text" name="FirstName" class="form-control" data-validation-required-message="This field is required" placeholder="First Name" value="<?php echo $editData->FirstName; ?>" data-validation-regex-regex="^[a-zA-Z ]+$" data-validation-regex-message="Must Enter Character And Space Only">
                                                                <input type="hidden" name="OwnerId" value="<?php echo $editData->OwnerId; ?>">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <div class="controls">
                                                                <input type="text" name="LastName" class="form-control" data-validation-required-message="This field is required" placeholder="Last Name" value="<?php echo $editData->LastName; ?>" data-validation-regex-regex="^[a-zA-Z ]+$" data-validation-regex-message="Must Enter Character And Space Only">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email Id</label>
                                                            <div class="controls">
                                                                <input type="email" name="EmailId" class="form-control" data-validation-required-message="This field is required" placeholder="Email Address" value="<?php echo $editData->EmailId; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <div class="controls">
                                                                <input type="password" name="Password" class="form-control" data-validation-required-message="This field is required" placeholder="Password"  value="<?php echo base64_decode($editData->Password); ?>" minlength="5" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <div class="controls">
                                                                <input type="text" name="Phone" class="form-control" data-validation-required-message="This field is required" placeholder="Phone" value="<?php echo $editData->Phone; ?>" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The numeric field may only contain numeric characters.">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Designation</label>
                                                            <div class="controls">
                                                                <input type="text" name="Designation" class="form-control" data-validation-required-message="This field is required" placeholder="Designation" value="<?php echo $editData->Designation; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><h4>Profile Picture</h4></label>
                                                            <div class="controls">
                                                                <div class="upload-images">
                                                                    <div  class="image-block">
                                                                        <img src='<?= base_url("public/owner/images/owner/$editData->ProfilePic") ?>' id="logofile" style="width: 100%;height: 100%;" />
                                                                    </div>
                                                                    <input type="file"  onchange="readURL( this,'logofile');" name="ProfilePic" class="upload_input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Edit</button>
                                            </form>
                                            <?php
                                        }else{
                                            ?>
                                            <form class="form-horizontal" action="<?= base_url('owner/staff/insert') ?>" method="post" enctype='multipart/form-data' novalidate>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>First Name</label>
                                                            <div class="controls">
                                                                <input type="text" name="FirstName" class="form-control" data-validation-required-message="This field is required" placeholder="First Name" data-validation-regex-regex="^[a-zA-Z ]+$" data-validation-regex-message="Must Enter Character And Space Only">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Last Name</label>
                                                            <div class="controls">
                                                                <input type="text" name="LastName" class="form-control" data-validation-required-message="This field is required" placeholder="Last Name" data-validation-regex-regex="^[a-zA-Z ]+$" data-validation-regex-message="Must Enter Character And Space Only">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email Id</label>
                                                            <div class="controls">
                                                                <input type="email" name="EmailId" class="form-control" data-validation-required-message="This field is required" placeholder="Email Address">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Password</label>
                                                            <div class="controls">
                                                                <input type="password" name="Password" class="form-control" data-validation-required-message="This field is required" placeholder="Password" minlength="5" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Phone</label>
                                                            <div class="controls">
                                                                <input type="text" name="Phone" class="form-control" data-validation-required-message="This field is required" placeholder="Phone" required data-validation-containsnumber-regex="(\d)+" data-validation-containsnumber-message="The numeric field may only contain numeric characters.">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Designation</label>
                                                            <div class="controls">
                                                                <input type="text" name="Designation" class="form-control" data-validation-required-message="This field is required" placeholder="Designation">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label><h4>Logo</h4></label>
                                                            <div class="controls">
                                                                <div class="upload-images">
                                                                    <div  class="image-block">
                                                                        <img src='<?= base_url('public/owner/images/default.jpg') ?>'  id="logofile" style="width: 100%;height: 100%;" />
                                                                    </div>
                                                                    <input type="file"  onchange="readURL( this,'logofile');" name="ProfilePic" class="upload_input"  data-validation-required-message="This field is required" placeholder="Sub Category Name">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Insert</button>
                                            </form>

                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->
                <!-- Scroll - horizontal and vertical table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Information</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                     <div class="table-responsive">
                                        <table class="table zero-configuration table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Owner Id</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Profile</th>
                                                    <th>Phone</th>
                                                    <th>Email Id</th>
                                                    <th>Password</th>
                                                    <th>Designation</th>
                                                    <th>Created At</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($staff as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->OwnerId ?>">
                                                        <td>#<?= $single->OwnerId ?></td>
                                                        <td><?= $single->FirstName ?></td>
                                                        <td><?= $single->LastName ?></td>
                                                        <td><img src='<?= base_url("public/owner/images/owner/$single->ProfilePic") ?>' class="rounded-circle" style="width: 100px;height: 100px;" /></td>
                                                        <td><?= $single->Phone ?></td>
                                                        <td><?= $single->EmailId ?></td>
                                                        <td><?= base64_decode($single->Password) ?></td>
                                                        <td><?= $single->Designation ?></td>
                                                        <td><?= $single->CreatedAt ?></td>
                                                        <td><a href="<?php echo base_url('owner/staff/edit').'/'.$single->OwnerId; ?>" >Edit</a></td>
                                                        <td><span class="delete-data" onclick="deleteData('staff',<?= $single->OwnerId ?>);">Delete</span></td>
                                                    </tr>

                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Scroll - horizontal and vertical table -->
        </div>
    </div>
</div>
<!-- END: Content-->
<?php include("footer.php") ?>
