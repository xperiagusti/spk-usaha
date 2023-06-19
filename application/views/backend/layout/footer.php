
<footer class="main-footer">
  <hr>
<div class="text-center">Copyright &copy; 2022

Sistem Pendukung Keputusan
</div>
<div class="footer-right">

</div>
</footer>
<script src="<?= base_url();?>assets/backend/vendors/js/vendors.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/charts/morris.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/js/core/app-menu.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/js/core/app.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/js/scripts/customizer.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/js/scripts/tables/datatables/datatable-basic.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/js/scripts/extensions/sweet-alerts.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/extensions/sweetalert.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/js/scripts/extensions/toastr.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/forms/toggle/bootstrap-checkbox.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/js/scripts/forms/switch.min.js" type="text/javascript"></script>
<script src="<?= base_url();?>assets/backend/vendors/js/ui/prism.min.js" type="text/javascript"></script>

  <script type="text/javascript" src="<?php echo base_url('assets/backend/new_js/bootstrap.bundle.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/backend/new_js/bootstrap-select.js');?>"></script>

  <!-- <script src="<?php echo base_url();?>assets/summernote/summernote-bs4.js"></script> -->
  <!-- <script src="<?php echo base_url();?>assets/scripts.js"></script> -->

	<script type="text/javascript">
		$(document).ready(function(){
			$('.bootstrap-select').selectpicker();

			//GET UPDATE
			$('.update-record').on('click',function(){
				var alternatif_kode = $(this).data('alternatif_kode');
				var alternatif_usaha = $(this).data('alternatif_usaha');
				$(".strings").val('');
				$('#UpdateModal').modal('show');
				$('[name="edit_id"]').val(alternatif_kode);
				$('[name="alternatif_edit"]').val(alternatif_usaha);
                //AJAX REQUEST TO GET SELECTED PRODUCT
                $.ajax({
                    url: "<?php echo site_url('nilai_2/get_parameter_by_alternatif');?>",
                    method: "POST",
                    data :{alternatif_kode:alternatif_kode},
                    cache:false,
                    success : function(data){
                        var item=data;
                        var val1=item.replace("[","");
                        var val2=val1.replace("]","");
                        var values=val2;
                        $.each(values.split(","), function(i,e){
                            $(".strings option[value='" + e + "']").prop("selected", true).trigger('change');
                            $(".strings").selectpicker('refresh');

                        });
                    }
                    
                });
                return false;
			});

			//GET CONFIRM DELETE
			$('.delete-record').on('click',function(){
				var alternatif_kode = $(this).data('alternatif_kode');
				$('#DeleteModal').modal('show');
				$('[name="delete_id"]').val(alternatif_kode);
			});

		});
	</script>

</body>
</html>
