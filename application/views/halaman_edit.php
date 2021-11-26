<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit User</title>
</head>
<body>
	<h3>Halaman Edit User</h3>
	<form action="<?php echo base_url('home/fungsiEdit') ?>" method="post">
	<table>
		<tr>
			<td>ID User</td>
			<td>:</td>
			<td><input name="id" value="<?php echo $queryDetail->id ?>" readonly></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo $queryDetail->nama ?>"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" value="<?php echo $queryDetail->email ?>"></td>
		</tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" value="<?php echo $queryDetail->username ?>"></td>
		</tr>
			<td>Alamat</td>
			<td>:</td>
			<td><input type="text" name="alamat" value="<?php echo $queryDetail->alamat ?>"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
			<input type="radio" name="jk" value="Laki- Laki"<?php echo $queryDetail->jk?>"/>Laki - laki
			<input type="radio" name="jk" value="Perempuan"<?php echo $queryDetail->jk?>"/>Perempuan
			</td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td>
				<input type="checkbox" id="checkItem" name="check[]" value="Travelling">Travelling
				<input type="checkbox" id="checkItem" name="check[]" value="Makan"/>Makan
				<input type="checkbox" id="checkItem" name="check[]" value="Pesta"/>Pesta
			</td>
			</form>
		</tr>
		<td>Foto Profil</td>
			<td>:</td>
			<td>
				<input type="file" name="foto" value="upload">
			</td>
		<tr>
			<td colspan="3"><button type="submit">Update User</button></td>
		</tr>
	</table>
	</form>
</body>
</html>