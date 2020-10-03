
<?php echo  form_open_multipart ('barang/add')?>
<div class="form-group row">
<label class="col-md-2 col-form-label">Provinsi</label>
<div class="col-md-7">
<select name="provinsi" class="form-control">
</div>
</select>
</div>
</div>

<div class="form-group row">
<label class="col-md-2 col-form-label">Kota</label>
<div class="col-md-7">
<select name="Kota" class="form-control">
</div>
</select>
</div>
</div>




<?php echo form_close();?>





<script>
	$(document).ready(function() {
		$.ajax({

			type: "POST",
			url: "<?= base_url('rajaongkir/provinsi') ?>",
			success: function(hasil_provinsi) {
				// console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});
	});

</script>

