<?php  
include '../koneksi.php';
if(isset($_POST['simpan'])){
	$nama_pasien     		= $_POST['nama_pasien'];
    $alamat_pasien       	= $_POST['alamat_pasien'];
    $telp            	 	= $_POST['telp'];
    $tgl_cek        	 	= $_POST['tgl_cek'];
    $gejala          	 	= $_POST['gejala'];
    $suhu            	 	= $_POST['suhu'];
    $ket                    = $_POST['ket'];

	$sql = "INSERT INTO pasien(nama_pasien, alamat_pasien, telp, tgl_cek, gejala, suhu, ket) 
			VALUES ('$nama_pasien', '$alamat_pasien', '$telp', '$tgl_cek', '$gejala', '$suhu', '$ket')";

	$res = mysqli_query($kon, $sql);
	$count = mysqli_affected_rows($kon);

	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di Tambahkan');
			document.location.href='index-pasien.php';
			</script>
		";
	}
}
?>