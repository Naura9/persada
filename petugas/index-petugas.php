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

	$sql = "SELECT * FROM petugas";
	$res = mysqli_query($kon, $sql);
	$petugas = array();

	while ($data = mysqli_fetch_assoc($res)) {
		$petugas[] = $data;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../admin.css">

    <script src="https://kit.fontawesome.com/96cfbc074b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="http://localhost/persada/style.css">

    <title>Petugas</title>
</head>

<body>
	<div class="wrapper">
			<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
				<a class="navbar-brand text-white" href="#"><strong>PERSADA HOSPITAL | KOTA MALANG</strong></a>
				<div class="icon ml-auto">
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
			<h3><strong><i class="fas fa-user-nurse mr-2"></i>DATA PETUGAS</strong></h3><hr>
				<div class="card-body pt-0">
					<table class="table table-default table-hover table-bordered">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Nama Petugas</th>
							<th scope="col">Alamat Petugas</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>

						<?php  
							$no = 1;
							foreach ($petugas as $t) {
						?>

						<tr>
							<th scope="row"><?=$no?></th>
							<td><?=$t['nama_petugas']?></td>
							<td><?=$t['alamat_petugas']?></td>
							<td>
								<a href="detail-petugas.php?id_petugas=<?= $t['id_petugas'];?>" class="badge badge-success">Detail</a>
							</td>
						</tr>
						
						<?php
							$no++;
						}
						?>
					</table>
				</div>
			</div>
		</div>
</body>
</html>
