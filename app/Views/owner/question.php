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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-help-circle"></i> Manage Question</h2>
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
                                    <h4 class="card-title">Manage Question</h4>
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
                                        <form class="form-horizontal" action="<?= base_url('owner/question/edit') ?>" method="post" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Sub Category</label>
                                                        <div class="controls">
                                                             <select name="SubCateId" class="form-control" data-validation-required-message="This field is required">
                                                                <option value="">--Sub Category--</option>
                                                                <?php
                                                                foreach ($subcate as $single) {
                                                                    if($single->SubCateId==$editData->SubCateId){
                                                                        ?>
                                                                    <option value="<?= $single->SubCateId ?>" selected><?= $single->Name ?></option>
                                                                        
                                                                        <?php
                                                                    }else{                   
                                                                        ?>
                                                                    <option value="<?= $single->SubCateId ?>"><?= $single->Name ?></option>
                                                             
                                                                        <?php

                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                            <input type="hidden" name="QuestionId" value="<?php echo $editData->QuestionId; ?>">
    
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <div class="controls">
                                                            <textarea type="text" name="Title" class="form-control" data-validation-required-message="This field is required" placeholder="Question"><?php echo $editData->Title; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                        <?php
                                    }else{
                                        ?>
                                        <form class="form-horizontal" action="<?= base_url('owner/question/insert') ?>" method="post" novalidate>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Sub Category</label>
                                                        <div class="controls">
                                                             <select name="SubCateId" class="form-control" data-validation-required-message="This field is required">
                                                                <option value="">--Sub Category--</option>
                                                                <?php
                                                                foreach ($subcate as $single) {
                                                                        ?>
                                                                    <option value="<?= $single->SubCateId ?>"><?= $single->Name ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Title</label>
                                                        <div class="controls">
                                                            <textarea type="text" name="Title" class="form-control" data-validation-required-message="This field is required" placeholder="Question">Question</textarea>
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
                                                        <th>Title</th>
                                                        <th>Created At</th>
                                                        <th>Edit</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($question as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->QuestionId ?>">
                                                        <td><?= $single->SubCateName ?></td>
                                                        <td><?= $single->Title ?></td>
                                                        <td><?= $single->CreatedAt ?></td>
                                    <td><a href="<?php echo base_url('owner/question/edit').'/'.$single->QuestionId; ?>" >Edit</a></td>
                                    <td><span class="delete-data" onclick="deleteData('question',<?= $single->QuestionId ?>);">Delete</span></td>
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
