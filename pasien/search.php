<?php  
include '../koneksi.php';

$keyword = $_GET['keyword'];

$sql = "SELECT * FROM pasien WHERE nama_pasien LIKE '%$keyword%' OR gejala LIKE '%$keyword%' OR suhu LIKE '%$keyword%'";
$res = mysqli_query($kon, $sql);
$pasien = array();
while ($data = mysqli_fetch_assoc($res)) {
    $pasien[] = $data;
}
?>

<table class="table table-default table-hover table-bordered">
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