<?php

include "layout/header.php";

$id_mahasiswa = (int)$_GET['id_mahasiswa'];

if (delete_mahasiswa($id_mahasiswa) > 0) {
  echo "<script>
  Swal.fire({
      icon: 'success',
      title: 'Berhasil',
      text: 'Data Mahasiswa Berhasil Dihapus!',
  }).then(function(){
      document.location.href = 'index.php';
  });
  </script>";
  }else
  echo "<script>
  Swal.fire({
      icon: 'error',
      title: 'Gagal',
      text: 'Data Mahasiswa Gagal Dihapus!',
  }).then(function(){
      document.location.href = 'index.php';
  });
  </script>";
?>

