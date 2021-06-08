<?php
if (isset($_SESSION['id_foto'])) {
    $id_foto = $_SESSION['id_foto'];
    $nama = $_POST['nama'];

    $sql_f = "SELECT `foto` FROM `tabel_galery` WHERE `id_foto`='$id_foto'";
    $query_f = mysqli_query($koneksi, $sql_f);
    while ($data_f = mysqli_fetch_row($query_f)) {
        $foto = $data_f[0];
    }

    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto/' . $nama_file;

    if (empty($nama)) {
        header("Location:index.php?include=galeriEdit&notif=namaKosong&data=$id_foto");
    } elseif (empty($nama_file)) {
        header("Location:index.php?include=galeriEdit&notif=fotoKosong&data=$id_foto");
    } elseif (!empty($nama_file)) {
        unlink("../images/$foto");
        if (move_uploaded_file($lokasi_file, $direktori)) {
            $sql = "UPDATE `tabel_galery` set `nama_foto`='$nama', `foto`='$nama_file' where `id_foto`='$id_foto'";
            mysqli_query($koneksi, $sql);
            header("Location:index.php?include=galeri&notif=editberhasil");
        }
    }
}
