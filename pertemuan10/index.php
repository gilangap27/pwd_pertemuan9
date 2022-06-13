<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!-- halaman awal yg menampilkan seluruh data yg ada di db mahasiswa -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>List Data Mahasiswa</h1>
    <a href="insert.php">Tambah Data</a>
    <table class="table table-hover">
      <!-- baris header-  -->
      <tr>
        <th>No</th>
        <th>Foto</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Aksi</th>
      </tr>

      <!-- baris data -->
      <!-- looping -->
      <?php $i = 1;
      foreach ($mahasiswa as $mhs) : ?>
        <tr>
          <td><?= $i++; ?></td>
          <td><img src="<?= $mhs['foto']; ?>" width="50px"></td>
          <td><?= $mhs['nim']; ?></td>
          <td><?= $mhs['nama']; ?></td>
          <td><?= $mhs['prodi']; ?></td>
          <td>
            <a href="update.php?id=<?= $mhs['id'] ?>">Ubah</a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm ('apakah anda yakin?');">Hapus</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>