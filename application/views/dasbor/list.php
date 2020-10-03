<section class="htc__category__area ptb--100">
    <div class="container">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Selamat Datang<i><br><?php echo $this->session->userdata('nama_pelanggan'); ?></i></h2>
                    <p></p>
                </div>
              <?php 
                //jika ada transaksi

                if($header_transaksi) {

                     ?>
                     <table class="table table-bordered" width="100%">
                        <thead>
                            <tr class="bg-success">
                                <th>No</th>
                                <th>Kode</th>
                                <th>Tanggal</th>
                                <th>Jumlah Total</th>
                                <th>Jumlah Item</th>
                                <th>Status</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; foreach($header_transaksi as $header_transaksi) { ?>
                            <tr>
                                <td><?php echo $i ?></td>
                                <td><?php echo $header_transaksi->kode_transaksi?></td>
                                <td><?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi))?></td>
                                <td><?php echo number_format($header_transaksi->jumlah_transaksi)?></td>
                                <td><?php echo $header_transaksi->total_item?></td>
                                <td><?php echo $header_transaksi->status_bayar?></td>
                                <td>
                                    <div class="btn-group">
                                    <a href="<?php echo base_url('dasbor/detail/'.$header_transaksi->kode_transaksi)?>" class="btn btn-success btn-xs"><i class="fa fa-eye"></i>Detail</a>
                                       
                                    <a href="<?php echo base_url('dasbor/konfirmasi/'.$header_transaksi->kode_transaksi)?>" class="btn btn-info btn-xs"><i class="fa fa-upload"></i>Konfirmasi Bayar</a>
                                    </div>
                                </td>

                            </tr>
                            <?php $i++; } ?>
                        </tbody>
                     </table>

                <?php 
                //kalau tidak ada transaksi
                }else{ ?>
                    <p class ="alert alert-success">
                        <i class="fa fa-warning"></i>Belum Ada Data Transaksi
                    </p>


                <?php }?>

        </div>
    </div>
</section>