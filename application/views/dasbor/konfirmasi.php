
<div class="cart-main-area ptb--100 bg__white">
  <div class="container">
      <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
          	<h2><?php echo $title ?></h2><hr>
          	<p>Berikut Adalah Riwayat Belanja Anda</p>
          	<?php 
          	//jika ada transaksi

          	if($header_transaksi) {

          		 ?>
          		 <table class="table">
          		 	<thead>
          		 		<tr width="50%">
          		 			<th width="100%">Kode Transaksi</th>
          		 			<th>:<?php echo $header_transaksi->kode_transaksi?></th>
          		 		</tr>
          		 	</thead>
          		 	<tbody>
          		 		<tr>
          		 			<td>Tanggal</td>
          		 			<td>:<?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi))?></td>
          		 		</tr>
          		 		<tr>
          		 			<td>Jumlah</td>
          		 			<td>:<?php echo number_format($header_transaksi->jumlah_transaksi)?></td>
          		 		</tr>
          		 		<tr>
          		 			<td>Status Bayar</td>
          		 			<td>:<?php echo $header_transaksi->status_bayar?></td>
          		 		</tr>

          		 		<tr>
          		 			<td>Bukti Bayar</td>
          		 			<td>:<?php if($header_transaksi->bukti_bayar !=""){?> 
          		 				<img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200">
          		 			<?php }else{echo 'Belum ada Bukti Bayar';} ?>
          		 			</td>
          		 		</tr>
           		 	</tbody>
          		 </table>
          		 <br>
          		 <br>
          		 <br>
          		 <?php 
          		 //error upload
          		 if(isset($error)){
          		 	echo '<p class="alert alert-warning">'.$error.'</p>';
          		 }
          		 //notif error
          		 echo validation_errors('<p class="alert alert-warning">','</p>');

          		 //form open
          		 echo form_open_multipart(base_url('dasbor/konfirmasi/'.$header_transaksi->kode_transaksi));
          		 	
          		 	?>
          		 	<table class="table">
          		 	
          		 			<tr>
          		 				<th width="30%">Pembayaran Rekening</th>
          		 				<td> 
          		 					<select name="id_rekening" class="form-control">
          		 						<?php foreach($rekening as $rekening){ ?>
          		 						<option value="<?php echo $rekening->id_rekening ?>" <?php if($header_transaksi->id_rekening==$rekening->id_rekening){echo "selected";} ?>>
          		 							<?php echo $rekening->nama_bank ?> (No.Rekening:
          		 							<?php echo $rekening->nomor_rekening ?> A/N <?php 
          		 							echo $rekening->nama_pemilik ?>)
          		 						</option>
          		 						<?php } ?>
          		 					</select>
          		 				</td>
          		 			</tr>
          		 		<tbody>
          		 			<tr>
          		 				<td>Tanggal Bayar</td>
          		 				<td>
          		 					<input type="text" name="tanggal_bayar" class="form-control-lg" placeholder="dd-mm-yyyy" value="<?php if(isset($_POST['tanggal_bayar'])) { echo set_value('tanggal_bayar'); }elseif($header_transaksi->tanggal_bayar!="") {echo $header_transaksi->tanggal_bayar; }else{echo date('d-m-Y'); }?>">
          		 				</td>
          		 			</tr>
          		 				<tr>
          		 				<td>Jumlah Pembayaran</td>
          		 				<td><input type="text" name="jumlah_bayar" class="form-control-lg" placeholder="Jumlah Pembayaran" value="<?php if(isset($_POST['jumlah_bayar'])) { echo set_value
          		 					('jumlah_bayar');}elseif($header_transaksi->jumlah_bayar!=""){ echo $header_transaksi->jumlah_bayar; }else{ echo $header_transaksi->jumlah_transaksi;}?>"> </td>
          		 			</tr>
          		 				<tr>
          		 				<td>Bank</td>
          		 				<td>
          		 					<input type="text" name="nama_bank" class="form-control" value="<?php echo $header_transaksi->nama_bank ?>" placeholder="Bank">
          		 					<small>Contoh :Bank BCA</small>
          		 				 </td>
          		 			</tr>
          		 				<tr>
          		 				<td>No Rekening</td>
          		 				<td>
          		 					<input type="text" name="rekening_pembayaran" class="form-control" value="<?php echo $header_transaksi->rekening_pembayaran ?>" placeholder="No Rekening Pembayaran">
          		 					<small>Contoh :021401924</small>
          		 				</td>
          		 				<tr>
          		 				<td>Nama Pemilik Rekening</td>
          		 				<td>
          		 					<input type="text" name="rekening_pelanggan" class="form-control" value="<?php echo $header_transaksi->rekening_pelanggan ?>" placeholder="Nama Pemilik Rekening">
          		 					<small>Contoh :A/N Farizi Fathan</small>
          		 				</td>
          		 			</tr>
          		 			<tr>
          		 				<td>Upload Bukti Bayar</td>
          		 				<td>
          		 					<input type="file" name="bukti_bayar" class="form-control" placeholder="Upload Bukti Pembayaran">
          		 				</td>
          		 			</tr>
          		 			<tr>
          		 				<td></td>
          		 				<td>
          		 					<div class="btn-group">
          		 						<button class="btn btn-success btn-lg" type="submit" name="submit"><i class="fa fa-upload"></i>Submit</button>
          		 						<button class="btn btn-info btn-lg" type="reset" name="reset"><i class="fa fa-times"></i>Reset</button>
          		 					</div>
          		 				</td>
          		 			</tr>
          		 			</tr>
          		 		</tbody>
          		 	</table>


          	<?php
          	//form close
          	echo form_close();
          	//kalau tidak ada transaksi
          	}else{ ?>
          		<p class ="alert alert-success">
          			<i class="fa fa-warning"></i>Belum Ada Data Transaksi
          		</p>


          	<?php }?>

          </div>
      </div>
  </div>
</div>