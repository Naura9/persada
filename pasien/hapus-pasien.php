<?php 
    include '../koneksi.php';

    $id_pasien = $_GET["id_pasien"];
    $query = mysqli_query($kon, "DELETE FROM pasien WHERE id_pasien=$id_pasien");
    
    if($query > 0){
        echo "
        <script>
        alert('Data berhasil dihapus');
        document.location.href = 'index-pasien.php';
        </script>
        "
        ;
    }
?>