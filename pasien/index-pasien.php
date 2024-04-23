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

	$sql = "SELECT * FROM pasien";
	$res = mysqli_query($kon, $sql);
	$pasien = array();
	while ($data = mysqli_fetch_assoc($res)) {
		$pasien[] = $data;
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://kit.fontawesome.com/96cfbc074b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/persada/style.css">
    <script src="script.js"></script>
    <title>Pasien</title>
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
                        <a class="nav-link text-white" href="https://persadahospital.co.id/a"><i class="fa-regular fa-circle-question mr-2"></i>Tentang PERSADA HOSPITAL</a><hr class="bg-success">
                    </li>
                </ul>
            </div>
            <div class="col-md-10 p-5">
                <h3><strong><i class="fas fa-user mr-2"></i>DATA PASIEN</strong></h3><hr>
                <div class="card-body pt-0">
                    <a href="http://localhost/persada/pasien/tambah-pasien.php">
                        <button type="button" class="btn btn-outline-info"><i class="fas fa-plus p"></i></button><br><br>
                    </a>
                    <div class="form-group">
                        <input type="text" id="keyword" class="form-control" placeholder="Cari pasien...">
                    </div>
                    <div id="search-results" style="display:none;"></div>
                    <table class="table table-default table-hover table-bordered" id="pasien-table"> <!-- Menambahkan id "pasien-table" -->
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gejala</th>
                                <th scope="col">Suhu</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                            $no = 1;
                            foreach ($pasien as $p) {?>
                            <tr>
                                <th scope="row"><?=$no?></th>
                                <td><?=$p['nama_pasien']?></td>
                                <td><?=$p['gejala']?></td>
                                <td><?=$p['suhu'] . "℃"?></td>
                                <td>
                                    <a href="detail-pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-success">Detail</a>
                                    <a href="edit-pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-warning">Edit</a>
                                    <a href="hapus-pasien.php?id_pasien=<?= $p['id_pasien'];?>" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php
                                $no++;
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
