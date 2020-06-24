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
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-check-square"></i> Manage Jobs</h2>
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
                                                        <th>Job Id</th>
                                                        <th>Manage Job</th>
                                                        <th>Customer Name</th>
                                                        <th>Customer Phone</th>
                                                        <th>Customer Email</th>
                                                        <th>Sub Category</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Special Request</th>
                                                        <th>Assets</th>
                                                        <th>Hanger</th>
                                                        <th>Job Status</th>
                                                        <th>Completed Date</th>
                                                        <th>Download Link</th>
                                                        <th>Project Output</th>
                                                        <th>CreatedAt</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($job as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->JobId ?>">
                                                        <td>#<?= $single->JobId ?></td>
                                                        <td><a href="<?php echo base_url('owner/job/manage').'/'.$single->JobId; ?>" class="badge badge-primary">Manage</a></td>
                                                        <td><?= $single->CustomerFirstName ?> <?= $single->CustomerLastName ?></td>
                                                        <td><?= $single->CustomerPhone ?></td>
                                                        <td><?= $single->CustomerEmail ?></td>
                                                        <td><?= $single->SubCateName ?></td>
                                                        <td><?= $single->Title ?></td>
                                                        <td><?= $single->Description ?></td>
                                                        <td><?= $single->SpecialRequest ?></td>
                                                        <td class="text-center">
                                                            <?php
                                                            $db=\Config\Database::connect();
                                                            $job_assets=$db->table('job_assets')->where('JobId',$single->JobId)->get()->getResult();
                                                            $temp=1;
                                                            foreach ($job_assets as $assets) {
                                                            ?>
                                                            <a class="badge badge-success" target="_black" href='<?= base_url("public/owner/images/job/assets/$assets->File") ?>'><?= $temp ?> <i class="feather icon-external-link"></i></a>
                                                            <a  class="badge badge-primary" href='<?= base_url("public/owner/images/job/assets/$assets->File") ?>' download><?= $temp ?> <i class="feather icon-download"></i></a>
                                                            <?php
                                                            $temp++;
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($single->Hanger==1){
                                                                ?>
                                                                <span class="badge badge-success">Hanger</span>
                                                                <?php
                                                            }else{
                                                                ?>
                                                                <span class="badge badge-danger">Not Hanger</span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            if($single->JobStatus==1){
                                                                ?>
                                                                <span class="badge badge-primary">Active</span>
                                                                <?php
                                                            }elseif($single->JobStatus==2){
                                                                ?>
                                                                <span class="badge badge-warning">Queued</span>
                                                                <?php
                                                            }elseif($single->JobStatus==3){
                                                                ?>
                                                                <span class="badge badge-success">Completed</span>
                                                                <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?= $single->JobCompletedDate ?></td>
                                                        <td class="text-center">
                                                            <?php
                                                            if(empty($single->DownloadLink)){
                                                                ?>
                                                                <i class="feather icon-minus"></i>
                                                                <?php
                                                            }else{
                                                            ?>
                                                            <a class="badge badge-success" target="_black" href='<?= base_url("public/owner/images/job/completed/$single->DownloadLink") ?>'>Open</a>
                                                            <a  class="badge badge-primary" href='<?= base_url("public/owner/images/job/completed/$single->DownloadLink") ?>' download>Download</a>
                                                            <?php
                                                            }
                                                            ?>
                                                        </td>
                                                        <td><?= $single->ProjectOutput ?></td>
                                                        <td><?= $single->CreatedAt ?></td>
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
