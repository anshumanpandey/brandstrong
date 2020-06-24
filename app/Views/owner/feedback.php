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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-thumbs-up"></i> Feedback</h2>
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
                                    <h4 class="card-title">Information</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                       <div class="table-responsive">
                                            <table class="table zero-configuration table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Customer Name</th>
                                                        <th>Customer Phone</th>
                                                        <th>Customer Email</th>
                                                        <th>Title</th>
                                                        <th>Note</th>
                                                        <th>File</th>
                                                        <th>Tags</th>
                                                        <th>CreatedAt</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($feedback as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->FeedbackId ?>">
                                                        <td><?= $single->CustomerFirstName ?> <?= $single->CustomerLastName ?></td>
                                                        <td><?= $single->CustomerPhone ?></td>
                                                        <td><?= $single->CustomerEmail ?></td>
                                                        <td><?= $single->Title ?></td>
                                                        <td><?= $single->Note ?></td>
                                                        <td  class="text-center">
                                                            <?php
                                                            if(!empty($single->File)){
                                                                ?>
                                                            <a class="badge badge-success" target="_black" href='<?= base_url("public/owner/images/feedback/$single->File") ?>'>Open</a>
                                                            <a  class="badge badge-primary" href='<?= base_url("public/owner/images/feedback/$single->File") ?>' download>Download</a>
                                                          <?php
                                                            }else{
                                                                echo "-";
                                                            }
                                                            ?>
                                                            </td>
                                                        <td><?= $single->Tags ?></td>
                                                        <td><?= $single->CreatedAt ?></td>
                                    <td><span class="delete-data" onclick="deleteData('feedback',<?= $single->FeedbackId ?>);">Delete</span></td>
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
