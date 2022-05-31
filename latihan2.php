<?php
//koneksi DB
$koneksi = mysqli_connect('localhost', 'root', '', 'pwd_2022');
echo "koneksi sukses";

//menampilkan data dari db ke tabel
//1. query isi tabel
$result = mysqli_query($koneksi, 'SELECT * FROM mahasiswa');

//2. ubah data ke dalam array
//*array numerik
//*array associative : mysqli_fetch_assoc
$data = mysqli_fetch_assoc($result);
var_dump($data);

//3. looping data
$baris = [];
while ($data = mysqli_fetch_assoc($result)) {
    $baris[] = $data;
}

//tampung hasil looping ke dalam variabel 
$mahasiswa = $baris;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Koneksi DB</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellspacing="" cellpadding="10">
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
                <td>Foto</td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['prodi']; ?></td>
                <td>
                    <a href="">Ubah</a> | <a href="">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>