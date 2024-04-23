<?php  
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
	include '../koneksi.php';

	$id_pasien = $_GET['id_pasien'];
	$sql = mysqli_query($kon, "SELECT * FROM pasien WHERE id_pasien=$id_pasien");
	$query = "SELECT * FROM pasien  WHERE id_pasien=$id_pasien";
	$res = mysqli_query($kon, $query);
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/96cfbc074b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="http://localhost/persada/style.css">
</head>
<body>

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

			<div class="col-md-10 p-5">

				<div class="container">
					<div class="row mt-4">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h2><strong><i class="fas fa-pencil-ruler"></i>Edit Data Pasien</strong></h2>
								</div>
								<div class="card-body">
									<form method="post" action="proses-edit.php">
										<table class="table">
											<?php  
											while ($pasien = mysqli_fetch_assoc($sql)):
											?>
											<tr>
												<input type="hidden" name="id_pasien" value="<?php echo $pasien['id_pasien'];?>">
												<td>Nama Pasien</td>
												<td><input type="text" name="nama_pasien" value="<?php echo $pasien['nama_pasien'];?>" required></td>
											</tr>
											<tr>
												<td>Alamat Pasien</td>
												<td><input type="text" name="alamat_pasien" value="<?php echo $pasien['alamat_pasien'];?>" required></td>
											</tr>
											<tr>
												<td>Telepon</td>
												<td><input type="text" name="telp" value="<?php echo $pasien['telp'];?>" required></td>
											</tr>
											<div class="form-group">
												<label for="datepicter">Tanggal Pemeriksaan</label>
												<input type="date" name="tgl_cek" class="form-control" require>
											</div>
											<tr>
												<td>Suhu</td>
												<td><input type="text" name="suhu" value="<?php echo $pasien['suhu'];?>" required></td>
											</tr>
											<tr>
												<td>Keterangan</td>
												<td><input type="text" name="ket" value="<?php echo $pasien['ket'];?>" required></td>
											</tr>

											<?php  
											endwhile;
											?>

											<tr>
												<td class="text-left" colspan="2">
													<a href="index-pasien.php" class="btn btn-success ">Kembali</a>
												</td>
												<td><input type="submit" class="btn btn-info text-right" name="simpan" value="Simpan"></td>
											</tr>
										</table>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>