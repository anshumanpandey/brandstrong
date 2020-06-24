<?php include("header.php") ?>
<style type="text/css">
    .dataTables_scrollBody{
        height: 400px !important;
    }
</style>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0"><i class="feather icon-thumbs-up"></i> Manage Customer</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
         
                  <!-- Scroll - horizontal and vertical table -->
                <section id="horizontal-vertical">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Information</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                       <div class="table-responsive">
                                            <table class="table  nowrap scroll-horizontal-vertical table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Customer Id</th>
                                                        <th>First Name</th>
                                                        <th>Last Name</th>
                                                        <th>Company</th>
                                                        <th>Profile</th>
                                                        <th>Email Id</th>
                                                        <th>Phone</th>
                                                        <th>TimeZone</th>
                                                        <th>UserName</th>
                                                        <th>BOD</th>
                                                        <th>Position</th>
                                                        <th>Address</th>
                                                        <th>City</th>
                                                        <th>Country</th>
                                                        <th>CreatedAt</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach ($customer as $single) {
                                                    ?>
                                                    <tr id="rowtr<?= $single->CustomerId ?>">
                                                        <td>#<?= $single->CustomerId ?></td>
                                                        <td><?= $single->FirstName ?></td>
                                                        <td><?= $single->LastName ?></td>
                                                        <td><?= $single->Company ?></td>
                                                        <td>
                                                            <img src='<?= base_url("public/owner/images/customer/$single->ProfilePic") ?>' class="rounded-circle" style="width: 100px;height: 100px;" />
                                                        </td>
                                                        <td><?= $single->EmailId ?></td>
                                                        <td><?= $single->Phone ?></td>
                                                        <td><?= $single->TimeZone ?></td>
                                                        <td><?= $single->UserName ?></td>
                                                        <td><?= $single->BOD ?></td>
                                                        <td><?= $single->Position ?></td>
                                                        <td><?= $single->Address ?></td>
                                                        <td><?= $single->City ?></td>
                                                        <td><?= $single->CountryName ?></td>
                                                        <td><?= $single->CreatedAt ?></td>
                                   <!--  <td><span class="delete-data" onclick="deleteData('customer',<?= $single->CustomerId ?>);">Delete</span></td> -->
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
