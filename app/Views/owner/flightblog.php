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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-list"></i> Flight Blog</h2>
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
                                    <h4 class="card-title">Flight Blog</h4>
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
                                        <form class="form-horizontal" action="<?= base_url('owner/flightblog/edit') ?>" method="post" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Version</label>
                                                        <div class="controls">
                                                            <input type="text" name="Version" value="<?php echo $editData->Version; ?>" class="form-control" data-validation-required-message="This field is required" placeholder="Version">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <div class="controls">
                                                            <input type="text" name="Title" value="<?php echo $editData->Title; ?>" class="form-control" data-validation-required-message="This field is required" placeholder="Title">
                                                            <input type="hidden" name="FlightBlogId" value="<?php echo $editData->FlightBlogId; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <div class="controls">
                                                            <textarea name="Description"  class="form-control" data-validation-required-message="This field is required" placeholder="Description"><?php echo $editData->Description; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                        <?php
                                    }else{
                                        ?>
                                        <form class="form-horizontal" action="<?= base_url('owner/flightblog/insert') ?>" method="post" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Version</label>
                                                        <div class="controls">
                                                            <input type="text" name="Version" class="form-control" data-validation-required-message="This field is required" placeholder="Version">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <div class="controls">
                                                            <input type="text" name="Title" class="form-control" data-validation-required-message="This field is required" placeholder="Title">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Description</label>
                                                        <div class="controls">
                                                            <textarea name="Description" class="form-control" placeholder="Description">Description</textarea>
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
                                                        <th>Version</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Created At</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($flightblog as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->FlightBlogId ?>">
                                                        <td><?= $single->Version ?></td>
                                                        <td><?= $single->Title ?></td>
                                                        <td><?= $single->Description ?></td>
                                                        <td><?= $single->CreatedAt ?></td>
                                    <td><a href="<?php echo base_url('owner/flightblog/edit').'/'.$single->FlightBlogId; ?>" >Edit</a></td>
                                    <td><span class="delete-data" onclick="deleteData('flightblog',<?= $single->FlightBlogId ?>);">Delete</span></td>
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
