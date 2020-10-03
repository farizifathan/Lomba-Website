 <?php
//Load data konfigurasi Model
 $site                      =$this->konfigurasi_model->listing();
 $nav_produk_footer         = $this->konfigurasi_model->nav_produk();
 ?>

        <footer id="htc__footer">
         
            <div class="footer__container bg__cat--1">
                <div class="container">
                    <div class="row">
                    
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="footer">
                                <h2 class="title__line--2">KONTAK KAMI</h2>
                                <div class="ft__details">
                                    <p> <?php echo nl2br($site->alamat)?>
                                        <br><i class="fa fa-envelope"></i><?php echo $site->email?>
                                        <br><i class="fa fa-phone"></i><?php echo $site->telepon?>
                                    </p>
                                    <div class="ft__social__link">
                                        <ul class="social__link">

                                            <li><a href="<?php echo $site->instagram?>"><i class="icon-social-instagram icons"></i></a></li>

                                            <li><a href="<?php echo $site->facebook?>"><i class="icon-social-facebook icons"></i></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                            <div class="footer">
                                <h2 class="title__line--2">Kategori Produk</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <?php foreach($nav_produk_footer as $nav_produk_footer){?>
                                        <li><a href="<?php echo base_url('produk/kategori/'.$nav_produk_footer  ->slug_kategori)?>">
                                        <?php echo $nav_produk_footer->nama_kategori?>
                                        </a></li>
                                        
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">Tentang Kita</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Peta</a></li>
                                        <li><a href="#">Produk</a></li>
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">Support</h2>
                                <div class="ft__inner">
                                    <ul class="ft__list">
                                        <li><a href="#">Hubungi Kami</a></li>
                                        <li><a href="">Cara Belanja</a></li>
                                        <li><a href="#">Pembayaran</a></li>
                                        <li><a href="#">Pengiriman</a></li>
                                        <li><a href="#">Dana</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
             
                        <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                            <div class="footer">
                                <h2 class="title__line--2">NEWSLETTER </h2>
                                <div class="ft__inner">
                                    <div class="news__input">
                                        <input type="text" placeholder="Email Kamu*">
                                        <div class="send__btn">
                                            <a class="fr__btn" href="#">Dapatkan Update</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="htc__copyright bg__cat--5">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="copyright__inner">
                                <p>Copyright© <a href="https://www.instagram.com/ex_king99/">Rifat Hasbi</a> 2017-2020</p>
                                <a href="#"><img src="<?php echo base_url()?>assets/frontend/images/others/shape/finalbank.png" alt="payment images"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div>

    <script src="<?php echo base_url()?>assets/frontend/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/plugins.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/slick.min.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/waypoints.min.js"></script>
    <script src="<?php echo base_url()?>assets/frontend/js/main.js"></script>

</body>

</html>