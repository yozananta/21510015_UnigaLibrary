<?php
 include "layout/header.php";

 $title = "Data Jurusan";

 $data_jurusan = select("SELECT * FROM t_jurusan ORDER BY id_jurusan ASC");

?>

<div class="container mt-5">
    <h1><i class="fas fa-chalkboard"></i> Data Jurusan</h1>

    <hr>

    <a href="tambah-jurusan.php" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data</a>

    <table id="table" class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <td><b>No</td>
                <td><b>Nama Jurusan</td>
                <td><b>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_jurusan as $jurusan):   ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $jurusan['nama_jurusan']; ?></td>

                <td width="20%" class="text-center">
                    <a href="ubah-jurusan.php?id_jurusan=<?= $jurusan['id_jurusan'];?>"
                        class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
                    <a href="hapus-jurusan.php?id_jurusan=<?= $jurusan['id_jurusan'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>




<?php include "layout/footer.php"; ?>