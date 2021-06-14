<?php
$nama = $_POST['nama'];

$lokasi_file = $_FILES['foto']['tmp_name'];
$nama_file = $_FILES['foto']['name'];
$direktori = '../images/' . $nama_file;

if (empty($nama)) {
    header("Location:index.php?include=galeriTambah&notif=namaKosong&jenis=nama");
} elseif (!empty($nama_file)) {
    if (move_uploaded_file($lokasi_file, $direktori)) {
        $sql = "INSERT INTO `tabel_galery` values ('','$nama', '$nama_file')";
        mysqli_query($koneksi, $sql);
        header("Location:index.php?include=galeri&notif=tambahberhasil");
    }
} elseif (empty($nama_file)) {
    header("Location:index.php?include=galeriTambah&notif=fotoKosong&jenis=foto");
}
