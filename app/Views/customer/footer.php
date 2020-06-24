<!-- begin:: Footer -->
					<div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
						<div class="kt-container  kt-container--fluid ">
							<div class="kt-footer__copyright">
								2020&nbsp;&copy;&nbsp;<a href="<?= base_url('dashboard') ?>" target="_blank" class="kt-link">Lobby</a>
							</div>
						</div>
					</div>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

	

		<!-- end::Quick Panel -->


		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": [
							"#c5cbe3",
							"#a1a8c3",
							"#3d4465",
							"#3e4466"
						],
						"shape": [
							"#f0f3ff",
							"#d9dffa",
							"#afb4d4",
							"#646c9a"
						]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<?= base_url('public/customer/assets/plugins/global/plugins.bundle.js') ?>" type="text/javascript"></script>
		<script src="<?= base_url('public/customer/assets/js/scripts.bundle.js') ?>" type="text/javascript"></script>

	  	<script type="text/javascript" src="<?= base_url('public/owner/rich/nicEdit.js') ?>"></script>
	  	<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	  	<script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
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
                        url:"<?= base_url('deletedata') ?>",
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
       	$(document).ready(function() {
		    $('.datatable').DataTable();
		} );

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

		<!--end::Global Theme Bundle -->
	</body>

	<!-- end::Body -->
</html>