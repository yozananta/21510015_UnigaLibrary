<?php 
include "layout/header.php";

$data_mahasiswa = select("SELECT * FROM t_mahasiswa, t_jurusan WHERE t_mahasiswa.id_jurusan = t_jurusan.id_jurusan ORDER BY id_mahasiswa ASC");

?>
<div class="container mt-5">
    <h1><i class="fas fa-graduation-cap"></i> Data Mahasiswa</h1>

    <hr>

    <a href="tambah-mahasiswa.php" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Data</a>

    <table id="table" class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <td><b>No</td>
                <td><b>Nama</td>
                <td><b>NIM</td>
                <td><b>Alamat</td>
                <td><b>Username</td>
                <td><b>Password</td>
                <td><b>Jurusan</td>
                <td><b>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($data_mahasiswa as $mahasiswa):   ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mahasiswa['nama']; ?></td>
                <td><?= $mahasiswa['nim']; ?></td>
                <td><?= $mahasiswa['alamat']; ?></td>
                <td><?= $mahasiswa['username']; ?></td>
                <td><?= $mahasiswa['password']; ?></td>
                <td><?= $mahasiswa['nama_jurusan']; ?></td>

                <td width="20%" class="text-center">
        <a href="ubah-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa'];?>" class="btn btn-success"><i class="fas fa-edit"></i> Edit</a>
        <a href="hapus-mahasiswa.php?id_mahasiswa=<?= $mahasiswa['id_mahasiswa'];?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus</a>
        </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    </div>



    <?php 
include "layout/footer.php";
?>