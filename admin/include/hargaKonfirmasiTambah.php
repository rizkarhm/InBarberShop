<?php 
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

if (empty($nama)) {
    header("Location:index.php?include=hargaTambah&notif=namaKosong");
} else if (empty($harga)) {
    header("Location:index.php?include=hargaTambah&notif=hargaKosong");
} else {
    $sql = "insert into `tabel_harga` values ('','$nama', '$harga', '$deskripsi')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=harga&notif=tambahberhasil");
}
