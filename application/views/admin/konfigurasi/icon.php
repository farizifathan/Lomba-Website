 <?php 

//notif

if($this->session->flashdata('sukses')){
	echo '<p class="alert-warning-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>


 <?php

//error upload
if(isset ($error)){
  echo '<p class="alert alert-warning">';
  echo $error;
  echo '</p>';
}
//notif eror

echo validation_errors('<div class="alert alert-warning">','</div>');

//form open

echo form_open_multipart(base_url ('admin/konfigurasi/icon'),' class="form-horizontal"');
?>

<div class="form-group form-group-lg">
<label class="col-md-2 control-label">Nama Website</label>
<div class="col-md-4">
<input type="text" name="namaweb" class="form-control" placeholder="Nama Website" value=
"<?php echo $konfigurasi->namaweb ?>" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-2 control-label">Upload Icon Baru</label>
<div class="col-md-4">
<input type="file" name="icon" class="form-control" placeholder="Upload Icon Baru" value=
"<?php echo  $konfigurasi->icon ?>" required>
</div>
</div>
Icon lama:	<br>
 <img src="<?php echo base_url('assets/upload/image/' .$konfigurasi->icon)  ?>"class="img img-responsive img-thumbnail" width="200">

<div class="form-group row">
    <label class="col-md-4 control-label"></label>
    <div class="col-md-6">
      	<button class="btn btn-success btn-lg"  name="submit" type="submit">
           	<i class="fa fa-save"> </i>Simpan
      	</button> 
      	<button class="btn btn-info btn-lg" name="reset" type="reset">
      		<i class="fa fa-times"> </i>Reset 
      	</button> 
          </div>
</div>
<?php echo form_close(); ?> 
