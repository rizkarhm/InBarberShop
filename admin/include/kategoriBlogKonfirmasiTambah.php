<?php
$kategori = $_POST['kategori'];

if (empty($kategori)) {
    header("Location:index.php?include=kategoriBlogTambah&notif=kategoriKosong");
} else {
    $sql = "insert into `tabel_kategori_blog` values ('','$kategori')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=kategoriBlog&notif=tambahberhasil");
}
