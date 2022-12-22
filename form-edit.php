<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Siswa | SMK Coding</title>
	<link rel="stylesheet" href="form-edit.css">
</head>

<body>
	<header>
		<h1>Formulir Edit Siswa</h1>
	</header>
	
	<form action="proses-edit.php" method="POST">
		
		<div class="box">
			<table cellpadding="8">
				<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

				<tr>
					<td><label for="nama">Nama</label></td>
					<td><input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" /></td>
				</tr>

				<tr>
					<td><label for="alamat">Alamat</label></td>
					<td><textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea></td>
				</tr>

				<tr>
					<td><label for="jenis_kelamin">Jenis Kelamin</label></td>
					<?php $jk = $siswa['jenis_kelamin']; ?>
					<td>
						<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
						<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
					</td>
				</tr>

				<tr>
					<td><label for="agama">Agama</label></td>
				
					<?php $agama = $siswa['agama']; ?>
					<td>
						<select name="agama">
							<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
							<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
							<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
							<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
							<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
						</select>
					</td>
				</tr>

				<tr>
					<td><label for="sekolah_asal">Sekolah Asal</label></td>
					<td><input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" /></td>
				</tr>
			</table>
		</div>

		<div class="act">
			<input type="submit" value="Ubah" class="btn" name="simpan">
			<a href="list-siswa.php"><input type="button" value="Batal" class="btn"></a>
		</div>
			
	</form>
	
	</body>
</html>
