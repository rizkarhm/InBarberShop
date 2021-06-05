<?php
if (isset($_SESSION['id_blog'])) {
    $id_user = $_SESSION['id_user'];
    $id_blog = $_SESSION['id_blog'];
    $id_kategori_blog = $_POST['kategori_blog'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $sql_f = "SELECT `gambar` FROM `tabel_blog` WHERE `id_blog`='$id_blog'";
    $query_f = mysqli_query($koneksi, $sql_f);
    while ($data_f = mysqli_fetch_row($query_f)) {
        $foto = $data_f[0];
        //echo $foto;
    }

    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto/' . $nama_file;

    if (empty($id_kategori_blog)) {
        header("Location:index.php?include=blogEdit&data=$id_blog&notif=editkosong&jenis=kategoriblog");
    } else if (empty($judul)) {
        header("Location:index.php?include=blogEdit&data=$id_blog&notif=editkosong&jenis=judul");
    } else if (empty($isi)) {
        header("Location:index.php?include=blogEdit&data=$id_blog&notif=editkosong&jenis=isi");
    } else if (empty($nama_file)) {
        $sql = "UPDATE `tabel_blog` set `id_kategori`='$id_kategori_blog',`judul`='$judul', `isi`='$isi', `update_by`='$id_user' WHERE `tabel_blog`.`id_blog`='$id_blog'";
        mysqli_query($koneksi, $sql);
        //echo $sql;
        header("Location:index.php?include=blog&notif=editberhasil");
    } else {
        move_uploaded_file($lokasi_file, $direktori);
        $sql = "UPDATE `tabel_blog` set `id_kategori`='$id_kategori_blog',`judul`='$judul', `isi`='$isi', `update_by`='$id_user', `gambar`='$nama_file' WHERE `tabel_blog`.`id_blog`='$id_blog'";
        mysqli_query($koneksi, $sql);

        header("Location:index.php?include=blog&notif=editberhasil");
    }
}
