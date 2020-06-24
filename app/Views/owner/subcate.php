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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-grid"></i> Sub Category</h2>
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
                                    <h4 class="card-title">Sub Category</h4>
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
                                        <form class="form-horizontal" action="<?= base_url('owner/subcate/edit') ?>" enctype='multipart/form-data' method="post" novalidate>
                                            <div class="row">
                                                 <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Main Category</label>
                                                        <div class="controls">
                                                            <select name="MainCateId" class="form-control" data-validation-required-message="This field is required">
                                                                <option value="">--Main Category--</option>
                                                                <?php
                                                                foreach ($maincate as $single) {
                                                                    if($single->MainCateId==$editData->MainCateId){
                                                                        ?>
                                                                    <option value="<?= $single->MainCateId ?>" selected><?= $single->Name ?></option>
                                                                        
                                                                        <?php
                                                                    }else{                   
                                                                        ?>
                                                                    <option value="<?= $single->MainCateId ?>"><?= $single->Name ?></option>
                                                             
                                                                        <?php

                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sub Category Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="Name"  value="<?php echo $editData->Name; ?>" class="form-control" data-validation-required-message="This field is required" placeholder="Sub Category Name">
                                                            <input type="hidden" name="SubCateId" value="<?php echo $editData->SubCateId; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Project Output(Accept Multiple,Comma Seperated)</label>
                                                        <div class="controls">
                                                            <input type="text" name="ProjectOutput" class="form-control"  value="<?php echo $editData->ProjectOutput; ?>" data-validation-required-message="This field is required" placeholder="eg. .png,.jpg,.svg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><h4>Logo</h4></label>
                                                        <div class="controls">
                                                            <div class="upload-images">
                                                            <div  class="image-block">
                                                                <img src='<?= base_url("public/owner/images/category/$editData->Logo") ?>' id="logofile" style="width: 100%;height: 100%;" />
                                                            </div>
                                                            <input type="file" onchange="readURL(this,'logofile');" name="Logo" class="upload_input"  placeholder="Sub Category Name">
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
                                        <form class="form-horizontal" action="<?= base_url('owner/subcate/insert') ?>" method="post" enctype='multipart/form-data' novalidate>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Main Category</label>
                                                        <div class="controls">
                                                            <select name="MainCateId" class="form-control" data-validation-required-message="This field is required">
                                                                <option value="">--Main Category--</option>
                                                                <?php
                                                                foreach ($maincate as $single) {
                                                                    ?>
                                                                    <option value="<?= $single->MainCateId ?>"><?= $single->Name ?></option>
                                                                    <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Sub Category Name</label>
                                                        <div class="controls">
                                                            <input type="text" name="Name" class="form-control" data-validation-required-message="This field is required" placeholder="Sub Category Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Project Output(Accept Multiple,Comma Seperated)</label>
                                                        <div class="controls">
                                                            <input type="text" name="ProjectOutput" class="form-control" data-validation-required-message="This field is required" placeholder="eg. .png,.jpg,.svg">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label><h4>Logo</h4></label>
                                                        <div class="controls">
                                                            <div class="upload-images">
                                                            <div  class="image-block">
                                                                <img src='<?= base_url('public/owner/images/default.jpg') ?>' id="logofile" style="width: 100%;height: 100%;" />
                                                            </div>
                                                            <input type="file"  onchange="readURL(this,'logofile');" name="Logo" class="upload_input"  data-validation-required-message="This field is required" placeholder="Sub Category Name">
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
                                                        <th>Sub Category</th>
                                                        <th>Main Category</th>
                                                        <th>Logo</th>
                                                        <th>Project Output</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($subcate as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->SubCateId ?>">
                                                        <td><?= $single->Name ?></td>
                                                        <td><?= $single->MainCateName ?></td>
                                                        <td><img src='<?= base_url("public/owner/images/category/$single->Logo") ?>' class="rounded-circle" style="width: 100px;height: 100px;" /></td>
                                                        <td><?= $single->ProjectOutput ?></td>
                                    <td><a href="<?php echo base_url('owner/subcate/edit').'/'.$single->SubCateId; ?>" >Edit</a></td>
                                    <td><span class="delete-data" onclick="deleteData('subcate',<?= $single->SubCateId ?>);">Delete</span></td>
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
