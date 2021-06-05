<?php
if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    //get foto      
    $sql_f = "SELECT `foto_user` FROM `tabel_user` WHERE `id_user`='$id_user'";
    $query_f = mysqli_query($koneksi, $sql_f);
    while ($data_f = mysqli_fetch_row($query_f)) {
        $foto = $data_f[0];
        //echo $foto;   
    }

    $lokasi_file = $_FILES['foto']['tmp_name'];
    $nama_file = $_FILES['foto']['name'];
    $direktori = 'foto/' . $nama_file;

    if (empty($nama)) {
        header("Location:index.php?include=proflEdit&notif=editkosong&jenis=nama");
    } else if (empty($email)) {
        header("Location:index.php?include=proflEdit&notif=editkosong&jenis=email");
    } elseif ($foto == 'default.png') {
        if (move_uploaded_file($lokasi_file, $direktori)) {
            $sql = "UPDATE `tabel_user` set `nama_user`='$nama', `email_user`='$email', `foto_user`='$nama_file' where `id_user`= '$id_user'";
            mysqli_query($koneksi, $sql);
            header("Location:index.php?include=profi&notif=editberhasil");
        }
    } else {
        if (move_uploaded_file($lokasi_file, $direktori)) {
            if (!empty($foto)) {
                unlink("foto/$foto");
            }
            $sql = "UPDATE `tabel_user` set `nama_user`='$nama', `email_user`='$email', `foto_user`='$nama_file'  where `id_user`='$id_user'";
            //echo $sql;  
            mysqli_query($koneksi, $sql);
        } else {
            $sql = "UPDATE `tabel_user` set `nama_user`='$nama', `email_user`='$email' where `id_user`='$id_user'";
            //echo $sql;      
            mysqli_query($koneksi, $sql);
        }
        header("Location:index.php?include=profil&notif=editberhasil");
    }
}
