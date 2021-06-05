<?php
if (isset($_SESSION['id_paket'])) {
    $id_paket = $_SESSION['id_paket'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    if (empty($nama)) {
        header("Location:index.php?include=hargaEdit&data=" . $id_paket . "&pesan=namaKosong");
    } else if (empty($harga)) {
        header("Location:index.php?include=hargaEdit&data=" . $id_paket . "&pesan=hargaKosong");
    } else {
        $sql = "UPDATE `tabel_harga` set `nama_paket`='$nama', `harga_paket`='$harga' where `id_paket`='$id_paket'";
        mysqli_query($koneksi, $sql);
        unset($_SESSION['id_paket']);
        header("Location:index.php?include=harga&notif=editberhasil");
    }
}
