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

	$id_petugas = $_GET['id_petugas'];
	$sql = "SELECT * FROM petugas t WHERE id_petugas=$id_petugas";
	$res = mysqli_query($kon, $sql);
	$detail = mysqli_fetch_assoc($res);
	// var_dump($detail);
?>

<!DOCTYPE html>
</html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/96cfbc074b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="http://localhost/persada/style.css">
	<title>Detail Petugas</title>
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
			
			<div class="col-md-10 p-5 pt2">
				<h3><strong><i class="fas fa-search"></i> DETAIL PETUGAS</strong></h3><hr>
					<table class="table table-bordered">
						<tr>
							<td><strong>Id</strong></td>
							<td><?=$detail['id_petugas'];?></td>
						</tr>
						<tr>
							<td><strong>Nama Petugas</strong></td>
							<td><?=$detail['nama_petugas'];?></td>
						</tr>
						<tr>
							<td><strong>Alamat Petugas</strong></td>
							<td><?=$detail['alamat_petugas']?></td>
						</tr>
						<tr>
							<td><strong>No Telepon</strong></td>
							<td><?=$detail['telp']?></td>
						</tr>
						<tr>
							<td><strong>Username</strong></td>
							<td><?=$detail['username']?></td>
						</tr>
						<tr>
							<td><strong>Password</strong></td>
							<td><?=$detail['password']?></td>
						</tr>
						<tr>
							<td class="text-rigth" colspan="2">
								<a href="index-petugas.php" class="btn btn-warning"><i class="fas fa-angle-double-left"></i>Kembali</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
