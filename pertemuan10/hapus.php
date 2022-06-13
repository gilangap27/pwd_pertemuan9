<?php
require 'function.php';

//get id yg ingin dihapus
$id = $_GET['id'];

//jika berhasil hapus, ada alert
if (deleteData($id) > 0) {
  echo "<script>
      alert('data berhasil dihapus');
      document.location.href = 'index.php';
  </script>";
} else {
  echo "data gagal dihapus";
}
