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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="http://localhost/persada/style.css">
    <script src="https://kit.fontawesome.com/96cfbc074b.js" crossorigin="anonymous"></script>

    <title>Home</title>
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

      <div class="col-md-10 p-5 ">
          <h3><i class="fas fa-home mr-2"></i><strong>HOME</strong></h3><hr>
              <div class="row text-white">
                  <div class="card bg-info ml-5" style="width: 18rem;">
                      <div class="card-body">
                      <div class="card-body-icon">
                          <i class="fas fa-user mr-2"></i>                        
                      </div>
                      <h5 class="card-title">DATA PASIEN</h5>
                      <br>
                      <br>
                      <a href="http://localhost/persada/pasien/index-pasien.php">
                      <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                  </div>

                  <div class="card bg-warning ml-5" style="width: 18rem;">
                      <div class="card-body">
                      <div class="card-body-icon">
                          <i class="fas fa-user-nurse mr-2"></i>                        
                      </div>
                      <h5 class="card-title">DATA PETUGAS</h5>
                      <br>
                      <br>
                      <a href="http://localhost/persada/petugas/index-petugas.php">
                      <p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                  </div>
              </div>
        </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  
</body>
</html>