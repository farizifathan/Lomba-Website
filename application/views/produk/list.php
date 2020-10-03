
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(<?php echo base_url()?>assets/frontend/images/bg/banner1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="htc__product__grid bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-lg-push-3 col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                        <div class="htc__product__rightidebar">
                            <div class="htc__grid__top">
                                <div class="htc__select__option">
                                    <select class="ht__select">
                                        <option>Default softing</option>
                                        <option>Sort by popularity</option>
                                        <option>Sort by average rating</option>
                                        <option>Sort by newness</option>
                                    </select>
                                </div>
                                
                                <ul class="view__mode" role="tablist">
                                    <li role="presentation" class="grid-view active"><a href="#grid-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-grid"></i></a></li>
                                    <li role="presentation" class="list-view"><a href="#list-view" role="tab" data-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                              
                                </ul>

                            </div>

                            <div class="row">
                            <?php foreach($produk as $produk){ ?>
                                <div class="shop__grid__view__wrap">
                                    <div role="tabpanel" id="grid-view" class="single-grid-view tab-pane fade in active clearfix">

                                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
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
                                                    <a href="product-details.html">
                                                        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar)?>" alt="<?php echo $produk->nama_produk?>">
                                                    </a>
                                                </div>
                                                <div class="fr__hover__info">
                                        <ul class="product__action">
                                            <li><button type="#" value="#"><i class="icon-heart icons"></i></button></li>
      
                                              <li><button type="submit" value="submit"><i class="icon-handbag icons">
                                                  
                                              </i>
                                          </button>
                                            </li>

                                            <li><button type="#" value="#"><i class="icon-shuffle icons"></i></button></li>
                                        </ul>
                                    </div>
                                                <div class="fr__product__inner">
                                                    <h4><a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>"><?php echo $produk->nama_produk?></a></h4>


                                                    <ul class="fr__pro__prize">
                                                        <li>Rp <?php echo number_format($produk->harga,'0',',','.')?></li>
                                                    </ul>
                                                </div>

                                                <?php
                                                // tutup proses
                                                echo form_close();
                                                 ?> 
                                                                                                 
                                            </div>

                                        </div>
                               
                                                <?php } ?>
                                               
                                                    </div>
                                               
                                                </div>

                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                                </div>
                            </div>
                            <!-- Pagination -->
                            <div class="pagination flex-m flex-w p-t-26">
                                <?php echo $pagin;?>
                        </div>
                    </div>
                    </section>
  
                </div>
            </div>

       