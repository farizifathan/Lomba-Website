<!-- Registrasi -->
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

                        
                               
                                
                    	 <div class="send__btn">
                                <p class="alert alert-success">Konfirmasi Pembayran Disini<a href="<?php echo base_url('dasbor/belanja')?>" class="btn btn-info btn-sm">Pembayaran</a>
                                </p>
                            </div>
                            </div>
								
                            
                                    </div>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
   