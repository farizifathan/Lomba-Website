<div class="cart-main-area ptb--100 bg__white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
            	<h2><?php echo $title ?></h2><hr>
         	  <?php 
         	  //notif
         	  if ($this->session->flashdata('sukses')){
                    echo '<div class="alert alert-warning">';
                    echo $this->session->flashdata('sukses');
                    echo '</div>';
                   }
                   
                            //display error
                            echo validation_errors('<div class="alert alert-warning">','</div>');

                            //form open


                            echo form_open(base_url('dasbor/profil'));
                            ?>
                            
                            <table class="table"> 
                                <thead>
                                    <tr>
                                        <th width="25%">Nama</th>
                                        <th><input tpye="text" name="nama_pelanggan" class="form-control" placeholder="Nama Lengkap" value="<?php echo $pelanggan->nama_pelanggan?>" required></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>E-mail</td>
                                        <td><input tpye="email" name="email" class="form-control" placeholder="E-Mail" value="<?php echo $pelanggan->email?>" readonly></td>
                                    </tr>

                                    <tr>
                                        <td>Password</td>
                                        <td><input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $pelanggan->password?>">
                                        	<span class="danger">Minimal 8 Karakter Untuk Mengganti Password</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Telepon</td>
                                        <td><input tpye="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo $pelanggan->telepon?>" required></td>
                                    </tr>

                                    <tr>
                                        <td>Alamat</td>
                                        <td><textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $pelanggan->alamat?></textarea></td>
                                    </tr>

                                     <tr>
                                        <td></td>
                                        <td>
                                            <div class="btn-group">
                                            <button class="btn btn-success btn-lg" type="submit">
                                            <i class="fa fa-save"> </i>Update Profil
                                        </button>
                                        <button class="btn btn-info btn-lg" type="submit">
                                            <i class="fa fa-times"> </i>reset
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