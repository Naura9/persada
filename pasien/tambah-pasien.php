<?php
include '../koneksi.php';
session_start();

if (!isset($_SESSION["login"])) {
    if (isset($_SESSION['username'])) {
        $_SESSION["username"] = $_COOKIE['username'];
        $_SESSION["login"] = true;
        header("Location: index.php");
        exit();
    }

    header("Location: http://localhost/persada/login/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/96cfbc074b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="http://localhost/persada/style.css">
	<title>Tambah Data Pasien</title>
</head>

<body>
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
			<a class="navbar-brand text-white" href="#"><strong>PERSADA HOSPITAL | KOTA MALANG</strong></a>
			<div class="ml-auto">
				<h5>
					<a class="link text-white" href="http://localhost/persada/login/logout.php">
                            <i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="Sign Out"></i>
                        </a>
				</h5>
			</div>
		</nav>

		<div class="content row no-gutters mt-5">
			<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
				<!-- Sidebar content -->
				<ul class="nav flex-column ml-3 mb-5">
					<li class="nav-item">
						<a class="nav-link active text-white" href="http://localhost/persada/index.php"><i class="fas fa-home mr-2"></i>Home</a><hr class="bg-success">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="http://localhost/persada/pasien/index-pasien.php"><i class="fas fa-user mr-2"></i>Data Pasien</a><hr class="bg-success">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="http://localhost/persada/petugas/index-petugas.php"><i class="fas fa-user-nurse mr-2"></i>Data Petugas</a><hr class="bg-success">
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" href="https://persadahospital.co.id/a"><i class="fa-regular fa-circle-question mr-2"></i></i>Tentang PERSADA HOSPITAL</a><hr class="bg-success">
					</li>
				</ul>
			</div>			
			
			<div class="col-md-7 p-1 pl-5">
				<div class="card-body">
					<div class="container">
						<div class="row mt-4">
							<div class="col-md">
							<center>
							<div class="card" style="width: 100%;">
							<div class="card-header" style="width: 100%;">
							<h2 class="card-title"><i class="fas fa-plus-square"></i> Tambah Data Pasien </h2>
							</div>
							<div class="card-body">
								<form method="post" action="proses-tambah.php">
									<div class="form-group text-left font-weight-bold">
										<label for="nama_pasien">Nama Lengkap</label>
										<input type="text" class="form-control" name="nama_pasien" id="nama_pasien" placeholder="Masukkan Nama Lengkap">
										<hr class="bg-secondary">
									</div>						
									<div class="form-group text-left font-weight-bold">
										<label for="alamat_pasien">Alamat</label>
										<input type="text" class="form-control" name="alamat_pasien"id="alamat_pasien" placeholder="Masukkan Alamat Pasien">
										<small class="form-text text-left text-muted">Contoh: Jl. Ahmad Yani</small>
										<hr class="bg-secondary">
									</div>
									<div class="form-group text-left font-weight-bold">
										<label for="telp">No.Telepon</label>
										<input type="text" class="form-control" name="telp"id="telp" placeholder="Masukkan No.Telepon">
										<small class="form-text text-left text-muted">Contoh: 085274829418</small>
										<hr class="bg-secondary">
									</div>
									<div class="form-group text-left font-weight-bold">
										<label for="datepicter">Tanggal Pemeriksaan</label>
										<input type="date" name="tgl_cek" class="form-control" required>
										<hr class="bg-secondary">
									</div>
									<div class="form-group text-left font-weight-bold">
										<label for="gejala">Gejala</label>
										<input type="text" class="form-control" name="gejala"id="gejala" placeholder="Masukkan Gejala Pasien"> 
										<hr class="bg-secondary">
									</div>
									<div class="form-group text-left font-weight-bold">
										<label for="suhu">Suhu</label>
										<input type="text" class="form-control" name="suhu"id="suhu" placeholder="Masukkan Suhu Pasien"> 
										<hr class="bg-secondary">
									</div>
									<div class="form-group text-left font-weight-bold">
										<label for="ket">Riwayat Pasien</label>
										<input type="text" class="form-control" name="ket"id="ket" placeholder="Masukkan Riwayat Pasien"> 
									</div>

									<tr>
										<td class="text-rigth" colspan="2">
											<a href="http://localhost/persada/pasien/index-pasien.php" class="btn btn-warning"><i class="fas fa-angle-double-left"></i>Kembali</a>
										</td>
										</tr>
										
									<button type="submit" class="btn btn-success" name="simpan">Simpan</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
