<?php

include 'config/app.php';

$id_dosen = (int)$_GET['id_dosen'];

if (delete_dosen($id_dosen) > 0) {
    echo "<script>
            alert('Data dosen Berhasil Dihapus');
            document.location.href = 'dosen.php';
          </script>";
}else{
    echo "<script>
            alert('Data dosen Gagal Dihapus');
            document.location.href = 'dosen.php';
          </script>";
}
?>