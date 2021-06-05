<?php
$id_paket = $_POST['pilih_paket'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['time'];
$ket = $_POST['keterangan'];
$nama = $_POST['nama'];

if (empty($id_paket)) {
    header("Location:index.php?include=bookingTambah&data=$id_buku&notif=editkosong&jenis=kategoriblog");
} else if (empty($tanggal)) {
    header("Location:index.php?include=bookingTambah&data=$id_buku&notif=editkosong&jenis=judul");
} else if (empty($waktu)) {
    header("Location:index.php?include=bookingTambah&data=$id_buku&notif=editkosong&jenis=isi");
} else {
    $sql = "INSERT into `tabel_booking` values ('', '$nama', '$id_paket', '$tanggal', '$waktu', '$ket', NULL)";
    mysqli_query($koneksi, $sql);
    //echo $sql;
    header("Location:index.php?include=booking&notif=tambahberhasil");
}
