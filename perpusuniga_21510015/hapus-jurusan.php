<?php

include "layout/header.php";

$id_jurusan = (int)$_GET['id_jurusan'];

if (delete_jurusan($id_jurusan) > 0) {
  echo "<script>
  Swal.fire({
      icon: 'success',
      title: 'Berhasil',
      text: 'Data Jurusan Berhasil Dihapus!',
  }).then(function(){
      document.location.href = 'jurusan.php';
  });
  </script>";
  }else
  echo "<script>
  Swal.fire({
      icon: 'error',
      title: 'Gagal',
      text: 'Data Jurusan Gagal Dihapus!',
  }).then(function(){
      document.location.href = 'jurusan.php';
  });
  </script>";
?>