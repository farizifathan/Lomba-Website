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

echo form_open_multipart(base_url ('admin/produk/tambah'), ' class="form-horizontal"');
?>

<div class="form-group form-group-lg">
<label class="col-md-2 col-form-label">Nama Produk</label>
<div class="col-md-9">
<input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk" value=
"<?php echo set_value('nama_produk') ?>" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-2 col-form-label">Kode Produk</label>
<div class="col-md-7">
<input type="text" name="kode_produk" class="form-control" placeholder="Kode Produk" value=
"<?php echo set_value('kode_produk') ?>" required>
</div>
</div>



<div class="form-group row">
<label class="col-md-2 col-form-label">Kategori Produk</label>
<div class="col-md-7">
<select name="id_kategori" class="form-control">
<?php  foreach ($kategori as $kategori) {?>
<option value="<?php echo $kategori->id_kategori?>">
<?php echo $kategori->nama_kategori ?>
</option>
<?php } ?>
</div>
</select>
</div>
</div>



<div class="form-group row">
<label class="col-md-2 col-form-label">Harga Produk</label>
<div class="col-md-7">
<input type="number" name="harga" class="form-control" placeholder="Harga" value=
"<?php echo set_value('harga') ?>" required>
</div>
</div>


<div class="form-group row">
<label class="col-md-2 col-form-label">Stok Produk</label>
<div class="col-md-7">
<input type="number" name="stok" class="form-control" placeholder="Stok" value=
"<?php echo set_value('stok') ?>" required>
</div>
</div>

<div class="form-group row">
<label class="col-md-2 col-form-label">Berat Produk</label>
<div class="col-md-7">
<input type="text" name="berat" class="form-control" placeholder="Berat Produk" value=
"<?php echo set_value('berat') ?>" required>
</div>
</div>

<div class="form-group row">
<label class="col-md-2 col-form-label">Ukuran Produk</label>
<div class="col-md-7">
<input type="text" name="ukuran" class="form-control" placeholder="Ukuran Produk" value=
"<?php echo set_value('ukuran') ?>" required>
</div>
</div>

<div class="form-group row">
<label class="col-md-2 col-form-label">Keterangan Produk</label>
<div class="col-md-10">
<textarea name="keterangan" class="form-control" placeholder="Keterangan Produk" id="editor"><?php echo set_value('keterangan')?></textarea>
</div>
</div>

<div class="form-group row">
<label class="col-md-2 col-form-label">Deskripsi</label>
<div class="col-md-10">
<textarea name="deskripsi" class="form-control" placeholder="Deksripsi" id="editor"><?php echo set_value('deskripsi')?></textarea>
</div>
</div>



<div class="form-group row">
<label class="col-md-2 col-form-label">Keyword</label>
<div class="col-md-10">
<textarea name="keywords" class="form-control" placeholder="keywords"><?php echo set_value('keywords')?></textarea>
</div>
</div>

<div class="form-group row">
<label class="col-md-2 col-form-label">Upload Gambar Produk</label>
<div class="col-md-10">
  <input type="file" name="gambar" class="form-control" required="required">
</div>
</div>

<div class="form-group row">
<label class="col-md-2 col-form-label">Status Produk</label>
<div class="col-md-10">
<select name="status_produk" class="form-control">
  <option value="Publish">Publikasikan</option>
    <option value="Publish">Simpan Sebagai Draft</option>
  </select>

</div>
</div>

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
