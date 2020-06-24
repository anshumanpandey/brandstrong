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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-layers"></i> Main Category</h2>
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
                                    <h4 class="card-title">Main Category</h4>
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
                                        <form class="form-horizontal" action="<?= base_url('owner/maincate/edit') ?>" method="post" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="Name" class="form-control" data-validation-required-message="This field is required" value="<?php echo $editData->Name; ?>" placeholder="Category Name">
                                                            <input type="hidden" name="MainCateId" value="<?php echo $editData->MainCateId; ?>">
    
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                        <?php
                                    }else{
                                        ?>
                                        <form class="form-horizontal" action="<?= base_url('owner/maincate/insert') ?>" method="post" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Category Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="Name" class="form-control" data-validation-required-message="This field is required" placeholder="Category Name">
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
                                                        <th>Category Name</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($maincate as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->MainCateId ?>">
                                                        <td><?= $single->Name ?></td>
                                    <td><a href="<?php echo base_url('owner/maincate/edit').'/'.$single->MainCateId; ?>" >Edit</a></td>
                                    <td><span class="delete-data" onclick="deleteData('maincate',<?= $single->MainCateId ?>);">Delete</span></td>
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
