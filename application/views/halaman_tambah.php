<!DOCTYPE html>
<html>
<head>

	<title>Halaman Tambah</title>
</head>
<body>
	<h3>Halaman Tambah User</h3>
	<form action="<?php echo base_url('home/fungsiTambah') ?>" method="post">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
			<input type="radio" name="jk" value="Laki - laki">Laki - laki
			<input type="radio" name="jk" value="Perempuan">Perempuan
			</td>
		<tr>
			<form action="<?php echo base_url('home/multicheck') ?>" method="post">
			<td>Hobi</td>
			<td>:</td>
			<td>
				<input type="checkbox" id="checkItem" name="check[]" value="Travelling">Travelling
				<input type="checkbox" id="checkItem" name="check[]" value="Makan"/>Makan
				<input type="checkbox" id="checkItem" name="check[]" value="Pesta"/>Pesta
			</td>
			</form>
		</tr>
		</tr>
			<td>Foto Profil</td>
			<td>:</td>
			<td>
				<input type="file" name="foto" value="upload">
			</td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit" name="submit">Tambah User</button></td>
		</tr>
	</table>
	<?php echo form_error('id'); ?>
	<?php echo form_error('email'); ?>
	<?php echo form_error('username'); ?>
	<?php echo form_error('alamat'); ?>
	<?php echo form_error('jk'); ?>

	</form>
</body>
</html>