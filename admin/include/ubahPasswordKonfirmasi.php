<?php
if (isset($_SESSION['id_user'])) {
    $id_user = $_SESSION['id_user'];
    $passlama = $_POST['passlama'];
    $passwordbaru = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    $sql = "SELECT `password_user` from `tabel_user` where `id_user`='$id_user'";
    echo $sql;
    $query = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_array($query)) {
        $pass_lama = $data['password_user'];

        if (empty($passlama)) {
            header("Location:index.php?include=ubahPassword&notif=lamakosong");
        } else if ($pass_lama != mysqli_real_escape_string($koneksi, MD5($passlama))) {
            header("Location:index.php?include=ubahPassword&notif=lamatidaksama");
        } else if (empty($konfirmasi)) {
            header("Location:index.php?include=ubahPassword&notif=barukosong");
        } else if ($passwordbaru != $konfirmasi) {
            header("Location:index.php?include=ubahPassword&notif=tidaksama");
        } else {
            $sql = "UPDATE `tabel_user` set `password_user`= MD5('$passwordbaru') where `id_user` = '$id_user'";
            mysqli_query($koneksi, $sql);
            header("Location:index.php?include=ubahPassword&notif=ubahberhasil");
        }
    }
}
