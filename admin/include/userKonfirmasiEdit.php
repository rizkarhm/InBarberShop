<?php
if (isset($_SESSION['user'])) {
    $id_user = $_SESSION['user'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    $nim = $_POST['nim'];
    $job = $_POST['job'];

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
        header("Location:index.php?include=editUser&data=" . $id_user . "&notif=editkosong&jenis=nama");
    } else if (empty($email)) {
        header("Location:index.php?include=editUser&data=" . $id_user . "&notif=editkosong&jenis=email");
    } else if (empty($nama_file)) {
        if (empty($password)) {
            $sql = "UPDATE `tabel_user` set `nama_user`='$nama', `nim_user`='$nim',`jobdesk`='$job',`email_user`='$email', `level_user`='$level' where `id_user`= '$id_user'";
            mysqli_query($koneksi, $sql);
            header("Location:index.php?include=user&notif=editberhasil");
        } else {
            $sql = "UPDATE `tabel_user` set `nama_user`='$nama',`nim_user`='$nim',`jobdesk`='$job', `email_user`='$email', `password_user`= MD5('$password'), `level_user`='$level' where `id_user`= '$id_user'";
            // echo $sql;
            mysqli_query($koneksi, $sql);

            header("Location:index.php?include=user&notif=editberhasil");
        }
    } else if (empty($foto)) {
        if (move_uploaded_file($lokasi_file, $direktori)) {
            if (empty($password)) {
                $sql = "UPDATE `tabel_user` set `nama_user`='$nama', `nim_user`='$nim',`jobdesk`='$job',`email_user`='$email', `level_user`='$level',`foto_user`='$nama_file' where `id_user`= '$id_user'";
                mysqli_query($koneksi, $sql);
                header("Location:index.php?include=user&notif=editberhasil");
            } else {
                $sql = "UPDATE `tabel_user` set `nama_user`='$nama', `nim_user`='$nim',`jobdesk`='$job',`email_user`='$email', `password_user`= MD5('$password'), `level_user`='$level',`foto_user`='$nama_file' where `id_user`= '$id_user'";
                // echo $sql;
                mysqli_query($koneksi, $sql);
                header("Location:index.php?include=user&notif=editberhasil");
            }
        }
    } else if (empty($password)) {
        if (move_uploaded_file($lokasi_file, $direktori)) {
            if (!empty($foto)) {
                unlink("foto/$foto");
            }
            $sql = "UPDATE `tabel_user` set `nama_user`='$nama',`nim_user`='$nim',`jobdesk`='$job', `email_user`='$email', `level_user`='$level', `foto_user`='$nama_file' where `id_user`= '$id_user'";
            mysqli_query($koneksi, $sql);
            //echo $sql;
            header("Location:index.php?include=user&notif=editberhasil");
        }
    } else {
        if (move_uploaded_file($lokasi_file, $direktori)) {
            if (!empty($foto)) {
                unlink("foto/$foto");
            }
            $sql = "UPDATE `tabel_user` set `nama_user`='$nama',`nim_user`='$nim',`jobdesk`='$job', `email_user`='$email', `level_user`='$level', `foto_user`='$nama_file' where `id_user`= '$id_user'";
            mysqli_query($koneksi, $sql);
            //echo $sql;
            header("Location:index.php?include=user&notif=editberhasil");
        }
    }
}
