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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-check-square"></i> Manage Single Job</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('owner/job/manage') ?>">Manage Jobs</a>
                                    </li>
                                    <li class="breadcrumb-item active">Single Job
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
         
              <!-- Scroll - horizontal and vertical table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Jobs Question Answer</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                       <div class="table-responsive">
                                            <table class="table zero-configuration table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Question</th>
                                                        <th>Answer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($questionanswer as $single) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $single->Title ?></td>
                                                        <td><?= $single->Answer ?></td>
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

                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Assign Staff</h4>
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
                                        <form class="form-horizontal" action="<?= base_url('owner/job/manage') ?>" method="post" novalidate>
                                            <div class="row">
                                                 <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Staff</label>
                                                        <div class="controls">
                                                            <select name="OwnerId" class="form-control" data-validation-required-message="This field is required">
                                                                <option value="">--Staff--</option>
                                                                <?php
                                                                foreach ($staff as $single) {
                                                                        ?>
                                                                    <option value="<?= $single->OwnerId ?>"><?= $single->FirstName." ".$single->LastName ?></option>
                                                                        
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </select>
                                                            <input type="hidden" name="JobId" value="<?= $JobId ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Assign Staff</button>
                                        </form>
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
                                    <h4 class="card-title">Assign Staff Information</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                       <div class="table-responsive">
                                            <table class="table zero-configuration table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Staff Id</th>
                                                        <th>Profile</th>
                                                        <th>Name</th>
                                                        <th>Designation</th>
                                                        <th>Email</th>
                                                        <th>Mobile</th>
                                                        <th>Created At</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($jobassign as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->AssignStaffId ?>">
                                                        <td>#<?= $single->OwnerId ?></td>
                                                        <td><img src='<?= base_url("public/owner/images/owner/$single->ProfilePic") ?>' class="rounded-circle" style="width: 100px;height: 100px;" /></td>
                                                        <td><?= $single->FirstName." ".$single->LastName ?></td>
                                                        <td><span class="badge badge-primary"><?= $single->Designation ?></span></td>
                                                        <td><?= $single->EmailId ?></td>
                                                        <td><?= $single->Phone ?></td>
                                                        <td><?= $single->CreatedAt ?></td>
                                    <td><span class="delete-data" onclick="deleteData('jobassign',<?= $single->AssignStaffId ?>);">Delete</span></td>
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


                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Upload Customer Work</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <?php if (! empty($status2)) : ?>
                                            <?php if ($status2['status']==1) : ?>
                                                <div class="animated fadeOut delay-5s alert alert-success"><?= $status2['message'] ?></div>
                                            <?php else : ?>
                                                <div class="animated fadeOut delay-5s alert alert-danger"><?= $status2['message'] ?></div>
                                            <?php endif ?>
                                        <?php endif ?>
                                        <form class="form-horizontal" action="<?= base_url('owner/job/manage/work') ?>" enctype='multipart/form-data' method="post" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <?php
                                                    if(!empty($job->DownloadLink)){
                                                    ?>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <a class="badge badge-success" target="_black" href='<?= base_url("public/owner/images/job/completed/$job->DownloadLink") ?>'>Open</a>
                                                            <a  class="badge badge-primary" href='<?= base_url("public/owner/images/job/completed/$job->DownloadLink") ?>' download>Download</a>                  
                                                        </div>
                                                    </div>
                                                    <?php
                                                     }
                                                    ?>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <input type="file" name="work" class="form-control"   data-validation-required-message="This field is required">
                                                        <input type="hidden" name="JobId" value="<?= $JobId ?>">
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
