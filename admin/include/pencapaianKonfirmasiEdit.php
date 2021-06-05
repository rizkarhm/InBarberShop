<?php
if (isset($_SESSION['id_pencapaian'])) {
    $id_pencapaian = $_SESSION['id_pencapaian'];
    $nama = $_POST['nama'];
    $pencapaian = $_POST['pencapaian'];
    if (empty($nama)) {
        header("Location:index.php?include=pencapaianEdit&data=" . $id_pencapaian . "&pesan=namaKosong");
    } else if (empty($pencapaian)) {
        header("Location:index.php?include=pencapaianEdit&data=" . $id_pencapaian . "&pesan=pencapaianKosong");
    } else {
        $sql = "UPDATE `tabel_pencapaian` set `nama_pencapaian`='$nama', `jumlah_pencapaian`='$pencapaian' where `id_pencapaian`='$id_pencapaian'";
        mysqli_query($koneksi, $sql);
        unset($_SESSION['id_pencapaian']);
        header("Location:index.php?include=pencapaian&notif=editberhasil");
    }
}
