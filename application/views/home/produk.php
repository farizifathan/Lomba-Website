<section class="ftr__product__area ptb--50">
<div class="container">
<div class="row">

<div class="col-xs-12">
    <div class="section__title--2 text-center">
        <h2 class="title__line">Semua Produk</h2>
        <p></p>
    </div>
</div>
</div>

<div class="row"> 

<div class="product__wrap clearfix">
        <?php foreach($produk as $produk) { ?> 

    
    <!-- Start Single Category -->
    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">

<!-- Form untuk Proses -->
<?php echo form_open(base_url('belanja/add'));
//elemen
echo form_hidden('id', $produk->id_produk);
echo form_hidden('qty', 1);
echo form_hidden('price', $produk->harga);
echo form_hidden('name', $produk->nama_produk);

echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
?>
               
                                <div class="category">
                                    <div class="ht__cat__thumb">
                                        <a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>">
                                          <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar)?>" alt="<?php echo $produk->nama_produk?>"> 
                                        </a>
                                    </div>
                                    <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><button><i class="icon-heart icons"></i></button></li>
                                                <!-- Cart -->
                                              <li><button type="submit" value="submit"><i class="icon-handbag icons">
                                                  
                                              </i>
                                          </button>
                                            </li>

                                            <li><button><i class="icon-shuffle icons"></i></button></li>
                                        </ul>
                                    </div>
                                    <div class="fr__product__inner">
                                        <h4><a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>"><?php echo $produk->nama_produk?></a></h4>
                                        <ul class="fr__pro__prize">
                                            <li class="old__prize"></li>
                                            <li>Rp <?php echo number_format($produk->harga,'0',',','.')?></li>
                                        </ul>
                                    </div>
                                </div>


            <?php
// tutup proses
echo form_close();
 ?>
</div>
    
 <?php } ?>

</div>
</div>
</div>
</section>
