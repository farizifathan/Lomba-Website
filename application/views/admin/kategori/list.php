<p>
 	<a href="<?php echo base_url ('admin/kategori/tambah')?>" class="btn btn-success btn-lg">
 		<i class = "fa fa-plus "> </i>Tambah Baru</a>
</p> 


<?php 

//notif

if($this->session->flashdata('sukses')){
	echo '<p class="alert-warning-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}
?>

<table class="table table-bordered"id="example1" >
	<thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>SLUG</th>
			<th>URUTAN</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>


		<?php $no=1;  foreach($kategori as $kategori) {?>

		<tr>
			
			<td><?php echo $no ?></td>
			<td><?php echo $kategori->nama_kategori ?></td>
			<td><?php echo $kategori->slug_kategori ?></td>
			<td><?php echo $kategori->urutan ?></td>
		
			<td> 

				<a href="<?php echo base_url('admin/kategori/edit/' .$kategori->id_kategori)?>" class="btn btn-warning btn-xs"> <i class="fa fa-edit"></i>Edit </a>

				<a href="<?php echo base_url('admin/kategori/delete/' .$kategori->id_kategori)?>" class="btn btn-danger btn-xs"> <i class="fa fa-trash-o" onclick="return confirm('Data Akan Dihapus?')"></i>Hapus </a></td></tr>

			


	<?php $no++; } ?>
	</tbody>
</table>