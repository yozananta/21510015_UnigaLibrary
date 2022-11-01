<?php 
include "layout/header.php";

$data_jadwal = select("SELECT * FROM t_jadwalkuliah
                       INNER JOIN t_matakuliah ON t_jadwalkuliah.id_matkul = t_matakuliah.id_matkul 
                       INNER JOIN t_dosen ON t_jadwalkuliah.id_dosen = t_dosen.id_dosen
                       ORDER BY id_jadwal ASC");

?>
<div class="container mt-5">
    <h1><i class="fas fa-stream"></i> Data Jadwal Kuliah</h1>

    <hr>

    <a href="tambah-jadwalkuliah.php" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data</a>

    <table id="table" class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <td><b>No</td>
                <td><b>Hari</td>
                <td><b>Jam</td>
                <td><b>Matakuliah</td>
                <td><b>Nama Dosen</td>
                <td><b>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_jadwal as $jadwalkuliah):   ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $jadwalkuliah['hari']; ?></td>
                <td><?= date('H:i', strtotime($jadwalkuliah['jam'])); ?></td>
                <td><?= $jadwalkuliah['nama_matkul']; ?></td>
                <td><?= $jadwalkuliah['nama_dosen']; ?></td>


                <td width="20%" class="text-center">
                    <a href="ubah-jadwalkuliah.php?id_jadwal=<?= $jadwalkuliah['id_jadwal'];?>"
                        class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                    <a href="hapus-jadwalkuliah.php?id_jadwal=<?= $jadwalkuliah['id_jadwal'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




<?php 
include "layout/footer.php";
?>