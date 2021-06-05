<?php 
$nama = $_POST['nama'];
$pencapaian = $_POST['jumlah'];

if (empty($nama)) {
    header("Location:index.php?include=pencapaianTambah&notif=namaKosong");
} else if (empty($pencapaian)) {
    header("Location:index.php?include=pencapaianTambah&notif=pencapaianKosong");
} else {
    $sql = "insert into `tabel_pencapaian` values ('','$nama', '$pencapaian')";
    mysqli_query($koneksi, $sql);
    header("Location:index.php?include=pencapaian&notif=tambahberhasil");
}
