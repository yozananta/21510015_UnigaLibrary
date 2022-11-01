<?php
 include "layout/header.php";

 $title = "Data Dosen";

 $data_dosen = select("SELECT * FROM t_dosen ORDER BY id_dosen ASC");

?>

<div class="container mt-5">
    <h1><i class="fas fa-chalkboard-teacher"></i> Data Dosen</h1>

    <hr>

    <a href="tambah-dosen.php" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data</a>

    <table id="table" class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <td><b>No</td>
                <td><b>Nama Dosen</td>
                <td><b>Alamat</td>
                <td><b>Telepon</td>
                <td><b>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_dosen as $dosen):   ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $dosen['nama_dosen']; ?></td>
                <td><?= $dosen['alamat']; ?></td>
                <td><?= $dosen['telepon']; ?></td>

                <td width="20%" class="text-center">
                    <a href="ubah-dosen.php?id_dosen=<?= $dosen['id_dosen'];?>" class="btn btn-success"><i
                            class="fas fa-edit"></i> Edit</a>
                    <a href="hapus-dosen.php?id_dosen=<?= $dosen['id_dosen'];?>" class="btn btn-danger"
                        onclick="return confirm('Yakin Data Barang Akan Dihapus.?')"><i class="fas fa-trash-alt"></i>
                        Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php include "layout/footer.php"; ?>