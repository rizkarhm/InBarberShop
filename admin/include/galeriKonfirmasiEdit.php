<?php
if (isset($_SESSION['id_foto'])) {
    $id_foto = $_SESSION['id_foto'];
    $nama = $_POST['nama'];
    $foto = $_POST['foto'];
    if (empty($nama)) {
        header("Location:index.php?include=galeriEdit&data=" . $id_foto . "&pesan=namaKosong");
    } else if (empty($foto)) {
        header("Location:index.php?include=galeriEdit&data=" . $id_foto . "&pesan=fotoKosong");
    } else {
        $sql = "UPDATE `tabel_galery` set `nama_foto`='$nama', `foto`='$foto' where `id_foto`='$id_foto'";
        mysqli_query($koneksi, $sql);
        unset($_SESSION['id_foto']);
        header("Location:index.php?include=galeri&notif=editberhasil");
    }
}
