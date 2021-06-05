<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $username = mysqli_real_escape_string($koneksi, $user);
    $password = mysqli_real_escape_string($koneksi, MD5($pass));

    //cek username dan password
    $sql = "select `id_user`, `level_user` from `tabel_user` where `email_user`='$email' and `password_user`='$password'";
    $query = mysqli_query($koneksi, $sql);
    $jumlah = mysqli_num_rows($query);

    if (empty($email)) {
        header("Location:index.php?include=login&pesan=emailKosong");
    } else if (empty($pass)) {
        header("Location:index.php?include=login&pesan=passKosong");
    } else if ($jumlah == 0) {
        header("Location:index.php?include=login&pesan=userpassSalah");
    } else {
        //get data
        while ($data = mysqli_fetch_row($query)) {
            $id_user = $data[0]; //1
            $level = $data[1]; //speradmin
            $_SESSION['id_user'] = $id_user;
            $_SESSION['level'] = $level;

            header("Location:index.php?include=profil");
        }
    }
}
