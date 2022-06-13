<?php
require 'function.php';

//cek apakah tombol submit diklik
if (isset($_POST['tambah'])) {
  // echo "berhasil";
  // tambahData($_POST);
  if (tambahData($_POST) > 0) {
    echo "<script>
          alert('data berhasil ditambahkan');
          document.location.href = 'index.php';
          </script>";
  } else {
    echo "data gagal ditambahkan";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Tambah Data</title>
</head>

<body>
  <h3>Form Tambah Data</h3>
  <!-- action = kosong krn ketika data disubmit akan dikembalikan ke halaman yg sama -->
  <form method="post" action="">
    <ul>
      <li>
        <label>
          NIM :
          <input type="text" name="nim" autofocus required>
        </label>
      </li>
      <li>
        <label>
          Nama :
          <input type="text" name="nama">
        </label>
      </li>
      <li>
        <label>
          Prodi :
          <input type="text" name="prodi">
        </label>
      </li>
      <li>
        <label>
          Foto :
          <input type="text" name="foto">
        </label>
      </li>
      <li>
        <button type="submit" name="tambah">Tambah</button>
      </li>
    </ul>
  </form>
  <!-- post $_POST : mengirim data ke server / datanya tertutup (form, password)
       get $_GET : mengirim data ke url browser / datanya publik (id, nama) -->
</body>

</html>