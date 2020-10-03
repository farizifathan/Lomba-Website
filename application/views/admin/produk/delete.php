   <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-<?php echo $produk->id_produk ?>">
                 <i class="fa fa-trash-o"></i>Hapus
   </button>

<div class="modal fade" id="delete-<?php echo $produk->id_produk ?>">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Hapus Produk</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="callout callout-info">
	      		<h5>Peringatan!</h5>
	      		Data akan di hapus?
	      	<a href="http://getbootstrap.com/javascript/#modals"></a>
	      	</div>
  		  </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fa fa-times"></i>Kembali</button>
      <a href="<?php echo base_url('admin/produk/delete/' .$produk->id_produk) ?>" class="btn btn-warning"><i class="fa - fa-trash-o"></i>Hapus Data </a></button>
    </div>
  </div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->