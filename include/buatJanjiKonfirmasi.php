<?php
$nama_paket = $_POST['harga'];
$sql_b = "SELECT `id_paket` FROM `tabel_harga` where `nama_paket`='$nama_paket'";
$query_b = mysqli_query($koneksi, $sql_b);
while ($data_b = mysqli_fetch_array($query_b)) {
    $id = $data_b['id_paket'];
    //$nama = $data_b['nama_paket'];
}
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$ket = $_POST['keterangan'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];

// $tgl = date_create($tanggal);
// $tgl_baru = date_format($tgl, "m/d/Y");

$sql_a = "SELECT * FROM `tabel_booking` where `jam_booking`='$waktu' && `tanggal_booking`='$tanggal' && `status`='pending' or `status`='in process'";
$query_a = mysqli_query($koneksi, $sql_a);
$jumlah = mysqli_num_rows($query_a);

if ($jumlah == 0) {
    if (empty($id)) {
        header("Location:index.php?include=buatJanji&data=$id_buku&notif=editkosong&jenis=id");
    } else if (empty($tanggal)) {
        header("Location:index.php?include=buatJanji&data=$id_buku&notif=editkosong&jenis=judul");
    } else if (empty($waktu)) {
        header("Location:index.php?include=buatJanji&data=$id_buku&notif=editkosong&jenis=isi");
    } else {
        $sql = "INSERT into `tabel_booking` values ('', '$nama', '$telepon', '$id', '$tanggal', '$waktu', '$ket', NULL, 'pending')";
        mysqli_query($koneksi, $sql);
        //echo $sql;
        header("Location:index.php?include=buatJanji&notif=bookingberhasil");
    }
} else {
    header("Location:index.php?include=buatJanji&notif=jampenuh&jam=$waktu&tanggal=$tanggal");
}
