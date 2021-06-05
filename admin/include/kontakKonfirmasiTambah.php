<?php 
$nama = $_POST['nama'];
$kontak = $_POST['kontak'];

if (empty($nama)) {
    header("Location:index.php?include=kontakTambah&notif=namaKosong");
} else if (empty($kontak)) {
    header("Location:index.php?include=kontakTambah&notif=kontakKosong");
} else {
    $sql = "insert into `tabel_kontak` values ('','$nama', '$kontak')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=kontak&notif=tambahberhasil");
}
