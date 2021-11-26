<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Data Customer</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Data User TokoPedidi</h1>
	<a href="<?php echo base_url('/home/halaman_tambah') ?>">Tambah User</a>
	<br>

	<br>
	<div class="card-body">
	<?php echo $this->session->flashdata('pesan'); ?>
	<table class="table">
	  <thead>
		<tr>
			<th scope="col">No</th>
			<th scope="col">ID User</th>
			<th scope="col">Nama</th>
			<th scope="col">Email</th>
			<th scope="col">Username</th>
			<th scope="col">Alamat</th>
			<th scope="col">Jenis Kelamin</th>
			<th scope="col">Hobi</th>
			<th scope="col">Foto Profil</th>
			<th scope="col">Aksi</th>
		</tr>
		<?php 
			$count = 0;
			foreach ($queryDetail as $row) {
				$count = $count + 1;
		 ?>
		<tr>
			<th><?php echo $count ?></th>
			<td><?php echo $row->id ?></td>
			<td><?php echo $row->nama ?></td>
			<td><?php echo $row->email ?></td>
			<td><?php echo $row->username ?></td>
			<td><?php echo $row->alamat ?></td>
			<td><?php echo $row->jk ?></td>
			<td><?php echo $row->hobi ?></td>
			<td><?php echo $row->foto ?></td>
			<td>

			<a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->id ?>" <button type="button" class="btn btn-warning"  >Edit</button></a>
			 <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->id ?>"  <button type="button" class="btn btn-danger" >Delete</button></a>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	 </div>
		<?php echo rupiah(50000000)."<br/>"?>
		<a href="<?php echo base_url('/keranjang_belanja') ?>">Halaman Cart</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>