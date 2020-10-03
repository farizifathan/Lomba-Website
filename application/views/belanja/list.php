
<div class="cart-main-area ptb--100 bg__white">
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
                                foreach($keranjang as $keranjang){ 
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
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="buttons-cart--inner">
                                <div class="buttons-cart">
                                    <a href="<?php echo base_url('produk') ?>">Continue Shopping</a>
                                </div>
                                <div class="buttons-cart checkout--btn">
                                    <a href="<?php echo base_url('belanja/hapus')?>">Remove Cart</a>
                                    <a href="<?php echo base_url('belanja/checkout')?>">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form> 
            </div>
        </div>
    </div>
</div>

</div>