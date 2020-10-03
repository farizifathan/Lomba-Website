<!-- Registrasi -->
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

                        
                               
                                
                                <div class="send__btn">
                                <p class="alert alert-success">Sudah Memiliki Akun? Silahkan<a href="<?php echo base_url('masuk')?>" class="btn btn-info btn-sm">Login Disini</a></p>
                                <div class="col-md-12">
                                    <?php 
                                    //display error
                                    echo validation_errors('<div class="alert alert-warning">','</div>');

                                    //form open


                                    echo form_open(base_url('registrasi'));
                                    ?>
                                    
                                    <table class="table"> 
                                        <thead>
                                            <tr>
                                                <th width="25%">Nama</th>
                                                <th><input tpye="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo set_value('nama_pelanggan')?>" required></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>E-mail</td>
                                                <td><input tpye="email" name="email" class="form-control" placeholder="E-Mail" value="<?php echo set_value('email')?>" required></td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password')?>" required></td>
                                            </tr>
                                            <tr>
                                                <td>Telepon</td>
                                                <td><input tpye="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo set_value('telepon')?>" required></td>
                                            </tr>

                                            <tr>
                                                <td>Alamat</td>
                                                <td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo set_value('alamat')?></textarea></td>
                                            </tr>

                                      <tr>
                                                <td></td>
                                                <td>
                                                    <div class="btn-group">
                                                    <button class="btn btn-success btn-lg" type="submit">
                                                    <i class="fa fa-save"> </i>Daftar
                                                </button>
                                                <button class="btn btn-info btn-lg" type="submit">
                                                    <i class="fa fa-times"> </i>Reset
                                                </button>
                                                </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <?php echo form_close();?> 
                                    </div>
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
   