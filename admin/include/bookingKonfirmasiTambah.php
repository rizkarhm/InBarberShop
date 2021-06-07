<?php
$id_paket = $_POST['pilih_paket'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['time'];
$ket = $_POST['keterangan'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];

$tgl = date_create($tanggal);
$tgl_baru = date_format($tgl, "m/d/Y");

$sql_a = "SELECT * FROM `tabel_booking` where `jam_booking`='$waktu' && `tanggal_booking`='$tgl_baru' && `status`='pending' or `status`='in process'";
$query_a = mysqli_query($koneksi, $sql_a);
$jumlah = mysqli_num_rows($query_a);

//pengguna baru dapat memesan pada tanggal x dan waktu x saat status pesanan dengan waktu yg sama sudah complete

if ($jumlah == 0) {
    if (empty($id_paket)) {
        header("Location:index.php?include=bookingTambah&notif=editkosong&jenis=kategoriblog");
    } else if (empty($tanggal)) {
        header("Location:index.php?include=bookingTambah&notif=editkosong&jenis=judul");
    } else if (empty($waktu)) {
        header("Location:index.php?include=bookingTambah&notif=editkosong&jenis=isi");
    } else {
        $sql = "INSERT into `tabel_booking` values ('', '$nama', '$telepon', '$id_paket', '$tgl_baru', '$waktu', '$ket', NULL, 'pending')";
        mysqli_query($koneksi, $sql);
        //echo $sql;
        header("Location:index.php?include=booking&notif=tambahberhasil");
    }
} else {
    header("Location:index.php?include=bookingTambah&notif=jampenuh&jam=$waktu&tanggal=$tanggal");
}
