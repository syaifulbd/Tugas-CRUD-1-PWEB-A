<!DOCTYPE html>
<html>
<head>
	<title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="form-daftar.css">
</head>

<body>
	<header>
		<h1>Formulir Pendaftaran Siswa Baru</h1>
	</header>
	
	<form action="proses-pendaftaran.php" method="POST">
		
		<div class="box">
		<table cellpadding="8">
			<tr>
				<td><label for="nama">Nama</label></td>
				<td><input type="text" name="nama" placeholder="nama lengkap" /></td>
			</tr>

			<tr>
				<td><label for="alamat">Alamat</label></td>
				<td><textarea name="alamat"></textarea></td>
			</tr>

			<tr>
				<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
				<td>
					<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
					<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
				</td>
			</tr>

			<tr>
				<td><label for="agama">Agama</label></td>
				<td>
					<select name="agama">
						<option>Islam</option>
						<option>Kristen</option>
						<option>Hindu</option>
						<option>Budha</option>
						<option>Atheis</option>
					</select>
				</td>
			</tr>

			<tr>
				<td><label for="sekolah_asal">Sekolah Asal: </label></td>
				<td><input type="text" name="sekolah_asal" placeholder="nama sekolah" /></td>
			</tr>

		</table>
		</div>

		<div class="act">
			<input type="submit" value="Daftar" class="btn" name="daftar">
			<a href="index.php"><input type="button" value="Batal" class="btn"></a>
		</div>
		
	
	</form>
	
	</body>
</html>
