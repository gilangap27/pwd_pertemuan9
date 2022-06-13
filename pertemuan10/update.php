<?php
require "function.php";

$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa where id = $id")[0];

//cek apakah tombol submit diklik
if (isset($_POST['tambah'])) {
    if (updateData($_POST) > 0) {
        echo "<script>
          alert('data berhasil diubah');
          document.location.href = 'index.php';
          </script>";
    } else {
        echo "data gagal diubah";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update Data</title>
</head>

<body>
    <h3>Form Update Data</h3>
    <!-- action = kosong krn ketika data disubmit akan dikembalikan ke halaman yg sama -->
    <form method="post" action="">
        <ul>
            <li><input type="hidden" name="id" value="<?= $mhs['id'] ?>"></li>
            <li>
                <label>
                    NIM :
                    <input type="text" name="nim" value="<?= $mhs['nim'] ?>" autofocus required>
                </label>
            </li>
            <li>
                <label>
                    Nama :
                    <input type="text" name="nama" value="<?= $mhs['nama'] ?>" required>
                </label>
            </li>
            <li>
                <label>
                    Prodi :
                    <input type="text" name="prodi" value="<?= $mhs['prodi'] ?>" required>
                </label>
            </li>
            <li>
                <label>
                    Foto :
                    <input type="text" name="foto" value="<?= $mhs['foto'] ?>" required>
                </label>
            </li>
            <li>
                <button type="submit" name="tambah">Tambah</button>
                <a href="index.php" name="batal">Batal</a>
            </li>
        </ul>
    </form>
</body>

</html>