<?php
if (isset($_SESSION['id_booking'])) {
    $id_booking = $_SESSION['id_booking'];
    $nama = $_POST['nama'];
    $id_paket = $_POST['id_paket'];
    $tanggal = $_POST['tanggal'];
    $time = $_POST['time'];
    $telepon = $_POST['telepon'];
    $keterangan = $_POST['keterangan'];

    $tgl = date_create($tanggal);
    $tgl_baru = date_format($tgl, "m/d/Y");

    $sql_a = "SELECT * FROM `tabel_booking` where `jam_booking`='$time' && `tanggal_booking`='$tgl_baru' && `status`='pending' or `status`='in process'";
    $query_a = mysqli_query($koneksi, $sql_a);
    $jumlah = mysqli_num_rows($query_a);

    if ($jumlah == 0) {
        if (empty($id_booking)) {
            header("Location:index.php?include=bookingEdit&data=$id_booking&notif=editkosong&jenis=idpaket");
        } else if (empty($nama)) {
            header("Location:index.php?include=bookingEdit&data=$id_booking&notif=editkosong&jenis=nama");
        } else if (empty($tanggal)) {
            header("Location:index.php?include=bookingEdit&data=$id_booking&notif=editkosong&jenis=tanggal");
        } else if (empty($time)) {
            header("Location:index.php?include=bookingEdit&data=$id_booking&notif=editkosong&jenis=waktu");
        } else {
            $sql = "UPDATE `tabel_booking` set `nama`='$nama',`telepon`='$telepon', `id_paket`='$id_paket',`tanggal_booking`='$tgl_baru', `jam_booking`='$time', `keterangan_booking`='$keterangan' WHERE `id_booking`='$id_booking'";
            mysqli_query($koneksi, $sql);
            //echo $sql;
            header("Location:index.php?include=booking&notif=editberhasil");
        }
    } else {
        header("Location:index.php?include=bookingEdit&data=$id_booking&notif=jampenuh&jam=$time&tanggal=$tgl_baru");
    }
}
