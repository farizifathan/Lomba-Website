<div class="cart-main-area ptb--0 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            	<h2><?php echo $title ?></h2><hr>
            	<div class="clearfix"></div><br> 
                <?php if ($this->session->flashdata('sukses')){
                    echo '<div class="alert alert-warning">';
                    echo $this->session->flashdata('sukses');
                    echo '</div>';
                   } ?>

                
                       
                    <div class="table-content table-responsive">
						 <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Gambar</th>
                                    <th class="product-name">Nama Produk</th>
                                    <th class="product-price">Harga</th>
                                    <th class="product-quantity">Jumlah</th>
                                    <th class="product-subtotal">Subtotal</th>
                                    <th class="product-remove">Hapus</th>
                                    <th class="product-update">Update</th>
                                </tr>
                                <?php
                                 
                                    
                                //perulangan data
                                foreach($keranjang as $keranjang) { 
                                	$id_produk 	=$keranjang['id'];
                                	$produk 	=$this->produk_model->detail($id_produk);

                                    //form update
                                    echo form_open(base_url('belanja/update_cart/'.$keranjang['rowid']));


                                	?>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-thumbnail"><a href=""><img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar)?>" alt="<?php echo $keranjang['name']?>" /></a></td>
                                    <td class="product-name"><a href="#"><?php echo $keranjang['name']?></a>
                                        <ul  class="pro__prize">
                                            <li>Rp. <?php echo number_format($keranjang['price'],'0',',','.')?></li>
                                        </ul>
                                    </td>
                                    <td class="product-price"><span class="amount">Rp. <?php echo number_format($keranjang['price'],'0',',','.')?></span></td>
                                    <td class="product-quantity"><input type="number" name="qty" value="<?php echo $keranjang['qty']?>" /></td>
                                    <td class="product-subtotal">Rp.
                                    	<?php
                                    	$sub_total = $keranjang['price'] * $keranjang['qty'];
                                    	echo number_format($sub_total,'0',',','.');
                                    	?>
                                    </td>
                                    <td class="product-remove"><a href="<?php echo base_url('belanja/hapus/'.$keranjang['rowid'])?>"><i class="icon-trash icons"></i></a></td>
                                    <td><button type="submit" name="update" class="product-remove"><i class="fa fa-edit">
                                        
                                    </i></button></td>

                                    </td>
                                
                                </tr>
                                
                            </tbody>
                            <?php
                            //form close
                                echo form_close();
                                //end perulangan
                            	}
                                
                            	?>
                            	<tr class="table-bordered text-strong">
                            		<td colspan="4" class="product-subtotal">Total Belanja</td>
                            		<td class="product-subtotal">Rp. <?php echo number_format($this->cart->total(),'0',',','.')?></td>
                            	</tr>
                        </table>
                    </div>
                    <?php echo form_open(base_url('belanja/checkout'));
                    $kode_transaksi = date('dmY').strtoupper(random_string('alnum',6));
                    ?>
                    <input type="hidden" name="id_pelanggan" value="<?php echo $pelanggan->id_pelanggan;?>">
                    <input type="hidden" name="jumlah_transaksi" value="<?php echo $this->cart->total() ?>">
                    <input type="hidden" name="tanggal_transaksi" value="<?php echo date('Y-m-d'); ?>">

                         <table class="table"> 
                                <thead>
                                    <tr>
                                        <th width="25%">Kode Transaksi</th>
                                        <th><input tpye="text" name="kode_transaksi" class="form-control "value="<?php echo $kode_transaksi?>"  readonly required></th>
                                    </tr>
                                <thead>
                                    <tr>
                                        <th width="25%">Nama Penerima</th>
                                        <th><input tpye="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pelanggan->nama_pelanggan?>" required></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>E-mail Penerima</td>
                                        <td><input tpye="email" name="email" class="form-control" placeholder="E-Mail" value="<?php echo $pelanggan->email?>" required></td>
                                    </tr>

                                    <tr>
                                        <td>Telepon Penerima</td>
                                        <td><input tpye="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo 
                                        $pelanggan->telepon?>" required></td>
                                    </tr>

                                    <tr>
                                        <td>Alamat Pengiriman</td>
                                        <td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $pelanggan->alamat?></textarea></td>
                                    </tr>

                                     <tr>
                                        <td></td>
                                        <td>
                                            <button class="btn-success btn-lg" type="submit">
                                            <i class="fa fa-save"> </i>Checkout Sekarang
                                        </button>
                                        <button class="btn-info btn-lg" type="reset">
                                            <i class="fa fa-times"> </i>reset
                                        </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>


                    <?php echo form_close(); ?>


                </form> 
            </div>
        </div>
    </div>
</div>
