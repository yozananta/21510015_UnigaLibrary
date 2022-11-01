<?php
 include "layout/header.php";

 $title = "Data Matakuliah";

 $data_matkul = select("SELECT * FROM t_matakuliah ORDER BY id_matkul ASC");

?>

<div class="container mt-5">
<h1><i class="fas fa-stream"></i> Data Matakuliah</h1>

    <hr>

    <a href="tambah-matkul.php" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data</a>

    <table id="table" class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <td><b>No</td>
                <td><b>Nama Matakuliah</td>
                <td><b>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_matkul as $matkul):   ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $matkul['nama_matkul']; ?></td>

                <td width="20%" class="text-center">
                    <a href="ubah-matkul.php?id_matkul=<?= $matkul['id_matkul'];?>" class="btn btn-success"><i
                            class="fas fa-edit"></i> Edit</a>
                    <a href="hapus-matkul.php?id_matkul=<?= $matkul['id_matkul'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>
                        Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




<?php include "layout/footer.php"; ?>