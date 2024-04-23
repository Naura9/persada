<?php  
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $id_pasien     = $_POST['id_pasien'];
	$nama_pasien   = $_POST['nama_pasien'];
    $alamat_pasien = $_POST['alamat_pasien'];
    $telp   	   = $_POST['telp'];
    $tgl_cek	   = $_POST['tgl_cek'];
    $suhu          = $_POST['suhu'];
    $ket           = $_POST['ket'];

    $sql = "UPDATE pasien  SET nama_pasien='$nama_pasien', alamat_pasien='$alamat_pasien', telp='$telp', suhu='$suhu', tgl_cek='$tgl_cek', ket='$ket' 
            WHERE id_pasien=$id_pasien";

    $res = mysqli_query($kon, $sql);
    $count = mysqli_affected_rows($kon);
    //  var_dump($count);
    if($res == 1){
        echo "
            <script>
            alert('Data Berhasil Di Edit');
            document.location.href='index-pasien.php';
            </script>
        ";
    }
  }
?>