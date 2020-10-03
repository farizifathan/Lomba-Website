<div class="container">
    <div class="row">
        <div class="col-xs-12">
        </div>
    </div>
</div>
</div>
</div>

<section class="htc__product__details bg__white ptb--100">

<div class="htc__product__details__top">
<div class="container">
    <div class="row">
        <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
            <div class="htc__product__details__tab__content">

                <div class="product__big__images">
                    <div class="portfolio-full-image tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="img-tab-1">
                            <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar)?>" alt="full-image">
                        </div>
                    </div>
                </div>

<?php echo form_open(base_url('belanja/add'));
//elemen
echo form_hidden('id', $produk->id_produk);
echo form_hidden('qty', 1);
echo form_hidden('price', $produk->harga);
echo form_hidden('name', $produk->nama_produk);

echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
?>
            </div>
        </div>
        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40">
            <div class="ht__product__dtl">
                <h2><?php echo $produk->nama_produk?></h2>
                <ul  class="pro__prize">
                    <li>Rp <?php echo number_format($produk->harga,'0',',','.')?></li>
                </ul>
                <p class="pro__info"><?php echo $produk->keterangan?></p>
                <div class="ht__pro__desc">
                    <div class="sin__desc">
                        <p><span>Tersedia:</span> <?php echo $produk->stok?> Pcs</p>
                    </div>
                    <div class="sin__desc align--left">
                        <p><span>Categories:</span></p>
                        <ul class="pro__cat__list">
                            <li><a href="#">Fashion,</a></li>
                        </ul>
                    </div>
                     <div class="col-xs-4">
                       <button type="submit" class="btn btn-primary btn-block btn-flat" value="submit">Add To Cart<i class="icon-handbag icons">
                                                  
                                              </i>
                    </div>                        </button>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
             <?php
// tutup proses
echo form_close();
 ?>

</section>

<section class="htc__produc__decription bg__white">
<div class="container">
<div class="row">
    <div class="col-xs-12">
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="ht__pro__details__content">
  
            <div role="tabpanel" id="description" class="pro__single__content tab-pane fade in active">
                <div class="pro__tab__content__inner">
                    <h4 class="ht__pro__title">Deskripsi</h4>
                    <p><?php echo $produk->deskripsi?></p>
                </div>
            </div>

            
        </div>
    </div>
</div>

</section>