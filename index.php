<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
	<link rel="stylesheet" href="index.css">
</head>

<body>
	<header>
		<h2>Pendaftaran Siswa Baru</h2>
		<h1>SMK Coding</h1>
	</header>
	
	<div class="menu">
	<h2>Menu</h2>
	<nav>
			<a href="form-daftar.php"><h3>Daftar Baru</h3></a>
			<a href="list-siswa.php"><h3>Pendaftar</h3></a>
	</nav>
	</div>
	
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran siswa baru berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
