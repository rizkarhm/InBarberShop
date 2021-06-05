<?php
if (isset($_SESSION['id_kontak'])) {
    $id_kontak = $_SESSION['id_kontak'];
    $nama = $_POST['nama'];
    $kontak = $_POST['link'];
    if (empty($nama)) {
        header("Location:index.php?include=kontakEdit&data=" . $id_kontak . "&pesan=namaKosong");
    } else if (empty($kontak)) {
        header("Location:index.php?include=kontakEdit&data=" . $id_kontak . "&pesan=kontakKosong");
    } else {
        $sql = "UPDATE `tabel_kontak` set `nama_kontak`='$nama', `link_kontak`='$kontak' where `id_kontak`='$id_kontak'";
        mysqli_query($koneksi, $sql);
        unset($_SESSION['id_kontak']);
        header("Location:index.php?include=kontak&notif=editberhasil");
    }
}
