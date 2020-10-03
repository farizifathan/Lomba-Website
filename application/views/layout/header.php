<?php 
//Ambil Data Menu Dari Konfigurasi
$nav_produk =$this->konfigurasi_model->nav_produk();
$nav_produk_mobile=$this->konfigurasi_model->nav_produk();
?>
<?php
//loading konfigurasi model
$site = $this->konfigurasi_model->listing();
?>  

<body>
   
    <div class="wrapper">
     
        <header id="htc__header" class="htc__header__area header--one">

            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5"> 
                                <div class="logo">
                                     <a href="<?php echo base_url('home')?>"><img src="<?php echo base_url('assets/upload/image/'.$site->logo)?>" width="200" alt="<?php echo $site->namaweb?> |<?php echo $site->tagline ?>"/></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"> <a href="<?php echo base_url()?>">Beranda</a></li>
                                          <li class="drop"><a href="<?php echo base_url('produk')?>">Produk</a>
                                            <ul class="dropdown">
                                                <?php foreach($nav_produk as $nav_produk){ ?>
                                                <li><a href="<?php echo base_url('produk/kategori/'.$nav_produk->slug_kategori)?>">
                                                  <?php echo $nav_produk->nama_kategori?>
                                             </li> </a>
                                            <?php  } ?>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="<?php echo base_url('dasbor/profil') ?>">Profil</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url('dasbor')?>">Dashboard</a></li>
                                            </ul>
                                        </li>

                                        <li class="drop"><a href="<?php echo base_url('belanja') ?>">Belanja</a>
                                            <ul class="dropdown">
                                                
                                                <li><a href="<?php echo base_url('dasbor/belanja')?>">Riwayat Belanja</a></li>
                                                <li><a href="<?php echo base_url('belanja')?>">Keranjang Belanja</a></li>
                                            </ul>
                                        </li>

                                        <li class="drop"> <a href="<?php echo base_url('kontak')?>">Kontak</a>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="<?php echo base_url()?>">Beranda</a></li>
                                            <li><a href="<?php echo base_url('produk')?>">Produk</a>
                                                <ul>
                                                   <?php foreach($nav_produk_mobile as $nav_produk_mobile){ ?>
                                                <a href="<?php echo base_url('produk/kategori/'.$nav_produk->slug_kategori)?>">
                                                        <?php echo $nav_produk_mobile->nama_kategori?>  
                                                    </a>
                                                    <?php  } ?>
                                                </ul>
                                            </li>
                                            <li class="drop"><a href="<?php echo base_url('dasbor/profil') ?>">Profil</a>
                                            <ul class="dropdown">
                                                <li><a href="<?php echo base_url('dasbor')?>">Dashboard</a></li>
                                            </ul>
                                            <li class="drop"><a href="<?php echo base_url('belanja') ?>">Belanja</a>
                                                <ul class="dropdown">
                                                    <li><a href="<?php echo base_url('dasbor/belanja')?>">Riwayat Belanja</a></li>
                                                <li><a href="<?php echo base_url('belanja')?>">Keranjang Belanja</a></li>
                                            </ul>
                                        </li>
                                            <li><a href="<?php echo base_url('kontak')?>">
                                            Kontak</a></li>
                                        </ul>
                                    </nav>
                                </div>  
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                     <?php
                                        //check data belanja
                                        $keranjang      = $this->cart->contents();
                                        $total_belanja ='Rp. '.number_format( $this->cart->total(),'0',',','.');
                                       
                                       
                                        ?>
                                   

                                    <div class="header__account">
                                        <?php if($this->session->userdata('email')) {?>
                                        <a href="<?php echo base_url('dasbor')?>"><i class="icon-user icons"><?php echo $this->session->userdata('nama_pelanggan'); ?></a></i>
                                    </div>
                                     <div class="header__account">
                                        <a href="<?php echo base_url('masuk/logout')?>"><i class="fa fa-sign-out">Logout</i></a>
                                    </div>    
                                            
                                             <?php }else{ ?>
                                        <a href="<?php echo base_url('registrasi')?>"><i class="icon-user icons"></i></a>
                                 
                                    </div>
                                      <?php } ?>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua"><?php echo count($keranjang)?></span></a>
                                    </div>

                                </div>
                            </div>
                            </div>
                            </div>
                    </div>
                    <div class="mobile-menu-area">
                </div>
            </div>



         </header>

        <div class="body__overlay"></div>

        <div class="offset__wrapper">

            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                         <a href="#"><i class="zmdi zmdi-close"></i></a>
                        <?php 
                            
                            if(empty($keranjang)) {
                                ?>
                                 <div class="shp__pro__thumb">
                          
                                    <p class="alert alert-success">Keranjang Belanja kosong</p>
                                 

                                <?php 
                            }else{
                                //totbel
                                $total_belanja ='Rp. '.number_format( $this->cart->total(),'0',',','.');
                                //tampilkan data belanjaan
                                foreach($keranjang as $keranjang){
                                    $id_produk = $keranjang['id'];
                                    // ambil data produk
                                    $produknya  = $this->produk_model->detail($id_produk);

                                 ?>
                       
                    </div>
                    <div class="shp__cart__wrap">
                         
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produknya->gambar)?>" alt="<?php echo $keranjang['name'] ?>">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="<?php echo base_url('produk/detail/'.$produknya->slug_produk)?>"><?php echo $keranjang['name']?></a></h2>
                                <span class="quantity">Jumlah: <?php echo $keranjang ['qty']?></span>
                                <span class="shp__price"><?php echo $keranjang['qty']?>x Rp. <?php echo number_format($keranjang['price'],'0',',','.' )?></span>
                              
                            </div>
                                
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                             <?php  }
                            }?> 
                        </div>

                    </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price"><?php echo $total_belanja ?></li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="<?php echo base_url('belanja')?>">View Cart</a></li>
                        <li class="shp__checkout"><a href="<?php echo base_url('belanja/checkout')?>">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

