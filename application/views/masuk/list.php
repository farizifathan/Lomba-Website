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
                                <p class="alert alert-success">Sudah Memiliki Akun? Silahkan<a href="<?php echo base_url('registrasi')?>" class="btn btn-info btn-sm">Registrasi Disini</a></p>
                                <div class="col-md-8 col-md-offset-2">
                                    <?php 
                                    //display error
                                    echo validation_errors('<div class="alert alert-warning">','</div>');

                                    
                                    //display notif login
                                    if($this->session->flashdata('warning')){
                                    	echo '<div class="alert alert-warning">';
                                    	echo $this->session->flashdata('warning');
                                    	echo '</div>';
                                    }

                                    //display notif logout sukses
                                    
                                    //form open


                                    echo form_open(base_url('masuk'));
                                    ?>
                                    <table class="table"> 
                                        
                                        <tbody>
                                            <tr>
                                                <td width="20%">E-mail(Username)</td>
                                                <td><input tpye="email" name="email" class="form-control" placeholder="E-Mail" value="<?php echo set_value('email')?>" required></td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password')?>" required></td>
                                            </tr>

                                             <tr>
                                                <td></td>
                                                <td>
                                                    <div class="btn-group">
                                                    <button class="btn btn-success btn-lg" type="submit">
                                                    <i class="fa fa-save"> </i>Login
                                                </button>
                                                <button class="btn btn-info btn-lg" type="submit">
                                                    <i class="fa fa-times"> </i>Reset
                                                </button>
                                                </td>
                                            </div>
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
   