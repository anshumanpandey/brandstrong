  <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="" target="_blank">Vuexy,</a>All rights Reserved</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('public/owner/app-assets/vendors/js/vendors.min.js') ?>"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url('public/owner/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/tables/datatable/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/tables/datatable/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/tables/datatable/datatables.min.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/tables/datatable/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/tables/datatable/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/extensions/sweetalert2.all.min.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/vendors/js/extensions/polyfill.min.js') ?>"></script>
     <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('public/owner/app-assets/js/core/app-menu.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/js/core/app.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/js/scripts/components.js') ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url('public/owner/app-assets/js/scripts/forms/validation/form-validation.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/js/scripts/datatables/datatable.js') ?>"></script>
    <script src="<?= base_url('public/owner/app-assets/js/scripts/extensions/sweet-alerts.min.js') ?>"></script>
    <!-- END: Page JS-->

    <script type="text/javascript" src="<?= base_url('public/owner/rich/nicEdit.js') ?>"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>


    <script type="text/javascript">
         function deleteData(table,id){
          Swal.fire({
            title:"Are you sure?",
            text:"You won't be able to revert this!",
            type:"warning",
            showCancelButton:!0,
            confirmButtonColor:"#3085d6",
            cancelButtonColor:"#d33",
            confirmButtonText:"Yes, delete it!",
            confirmButtonClass:"btn btn-primary",
            cancelButtonClass:"btn btn-danger ml-1",
            buttonsStyling:!1})
          .then(
            function(t){
                if(t.value){
                    $.ajax({
                        method:'POST',
                        url:"<?= base_url('owner/deletedata') ?>",
                        data:"id="+id+"&table="+table,
                        success:function(data){
                          if(data){
                            Swal.fire({
                                type:"success",
                                title:"Deleted!",
                                text:"Your record has been deleted.",
                                timer: 1000,
                                confirmButtonClass:"btn btn-success"});
                            $("#rowtr"+id).fadeOut();
                        }else{
                           Swal.fire({type:"danger",title:"Not Deleted!",text:"Your record has been not deleted.",timer: 1000,confirmButtonClass:"btn btn-danger"});
                       }
                   }
               });  

                }else{
                    Swal.fire({type:"danger",title:"Not Deleted!",text:"Your record has been not deleted.",timer: 1000,confirmButtonClass:"btn btn-danger"});
                }
            });
        }
        function readURL(input,id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#'+id).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</body>
<!-- END: Body-->

</html>