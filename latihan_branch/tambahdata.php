<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $sql = "INSERT INTO mahasiswa (nama) VALUES ('$nama')";
    if(mysqli_query($conn, $sql)){
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<form method="POST">
    <input type="text" name="nama" placeholder="Masukkan nama">
    <button type="submit" name="submit">Tambah</button>
</form>

