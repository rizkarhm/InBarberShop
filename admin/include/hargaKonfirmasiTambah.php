<?php 
$nama = $_POST['nama'];
$harga = $_POST['harga'];

if (empty($nama)) {
    header("Location:index.php?include=hargaTambah&notif=namaKosong");
} else if (empty($harga)) {
    header("Location:index.php?include=hargaTambah&notif=hargaKosong");
} else {
    $sql = "insert into `tabel_harga` values ('','$nama', '$harga')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=harga&notif=tambahberhasil");
}
