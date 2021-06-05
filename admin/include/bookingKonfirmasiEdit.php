<?php
if (isset($_SESSION['id_booking'])) {
    $id_booking = $_SESSION['id_booking'];
    $nama = $_POST['nama'];
    $id_paket = $_POST['id_paket'];
    $tanggal = $_POST['tanggal'];
    $time = $_POST['time'];
    $keterangan = $_POST['keterangan'];

    if (empty($id_booking)) {
        header("Location:index.php?include=bookingEdit&data=$id_booking&notif=editkosong&jenis=idpaket");
    } else if (empty($nama)) {
        header("Location:index.php?include=bookingEdit&data=$id_booking&notif=editkosong&jenis=nama");
    } else if (empty($tanggal)) {
        header("Location:index.php?include=bookingEdit&data=$id_booking&notif=editkosong&jenis=tanggal");
    } else if (empty($time)) {
        header("Location:index.php?include=bookingEdit&data=$id_booking&notif=editkosong&jenis=waktu");
    }  else {
        $sql = "UPDATE `tabel_booking` set `nama`='$nama', `id_paket`='$id_paket',`tanggal_booking`='$tanggal', `jam_booking`='$time', `keterangan_booking`='$keterangan' WHERE `id_booking`='$id_booking'";
        mysqli_query($koneksi, $sql);
        //echo $sql;
        header("Location:index.php?include=booking&notif=editberhasil");
    }
}
